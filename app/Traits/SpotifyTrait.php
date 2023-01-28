<?php

namespace App\Traits;

use Illuminate\Support\Facades\Session;

trait SpotifyTrait
{
    /**
     * Create function to get user token
     */
    public function getSpotifyToken($code)
    {

        // spotify app details
        $client_id = env('SPOTIFY_CLIENT_ID');
        $client_secret = env('SPOTIFY_CLIENT_SECRET');
        $callback = env('SPOTIFY_CALLBACK');

        // Build the data for the POST request
        $data = 'grant_type=authorization_code&code=' . $code . '&redirect_uri=' . $callback;

        // Create a new cURL resource
        $ch = curl_init();

        // Set the URL and other options
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_USERPWD, $client_id . ':' . $client_secret);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        // Send the request and check the response
        $response = curl_exec($ch);

        if ($response === false) {
            die('cURL error: ' . curl_error($ch));
        }

        // Close cURL resource
        curl_close($ch);

        // Decode the JSON response
        $result = json_decode($response, true);

        Session::push('user_token', $result);

        return $result['access_token'];
    }

    /**
     * Create function to get user details
     */
    public function getSpotifyUser($code)
    {
        // Pass details to generate Spotify token
        $access_token = $this->getSpotifyToken($code);
        // user url
        $url = 'https://api.spotify.com/v1/me';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $access_token)); //setting custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);
        $data = json_decode($curl_response, true);

        dd($data);
        return $data;
    }

    /**
     * Create function to get user refresh token
     */
    public function getSpotifyRefreshToken()
    {

        // spotify app details
        $client_id = env('SPOTIFY_CLIENT_ID');
        $client_secret = env('SPOTIFY_CLIENT_SECRET');
        $refresh_token = Session::get('user["refresh_token"]');

        // Build the data for the POST request
        $data = array('grant_type' => 'refresh_token', 'refresh_token' => $refresh_token);

        // Create a new cURL resource
        $ch = curl_init();

        // Set the URL and other options
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_USERPWD, $client_id . ':' . $client_secret);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        // Send the request and check the response
        $response = curl_exec($ch);

        if ($response === false) {
            die('cURL error: ' . curl_error($ch));
        }

        // Close cURL resource
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);

        return $data;
    }

    function getSpotifyPlaylists()
    {
        // Pass details to generate Spotify token
        $user = Session::get('user');
        // user url
        $url = 'api.spotify.com/v1/users/' . $user['spotify_user_id'] . '/playlists';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $user['token'])); //setting custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);
        $data = json_decode($curl_response, true);

        return $data;
    }
}
