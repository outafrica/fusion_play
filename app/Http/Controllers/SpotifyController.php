<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPlaylist;
use App\Traits\SpotifyTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SpotifyController extends Controller
{
    use SpotifyTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Get user code and state to generate token to be used for consecutive requests
        $code = $request->code;

        // get user details i.e. user_id
        $user = $this->getSpotifyUser($code);

        // get token details
        $user_token = Session::get('user_token');

        // user data details
        $user_data = array(
            'name' => $user['display_name'],
            'spotify_user_id' => $user['id'],
            'spotify_code' => $code,
            'token_type' => $user_token['token_type'],
            'token' => $user_token['access_token'],
            'refresh_token' => $user_token['refresh_token']
        );

        // check if user exist with email exists
        if (User::where('name', $user['display_name'])->exists()) {
            // update user token details
            $data = array(
                'spotify_code' => $code,
                'token_type' => $user_token['token_type'],
                'token' => $user_token['access_token'],
                'refresh_token' => $user_token['refresh_token']
            );

            //update user record
            User::where('name', $user['display_name'])->update($data);
        } else {
            // create new user
            User::create($user_data);
        }

        // create session with the new details
        Session::put('user', $user_data);

        return redirect('/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // get user spotify playlists
    public function getPlaylists()
    {

        // get user details
        $user = Session::get('user');
        $user_id = User::where('spotify_user_id', $user['spotify_user_id'])->value('id');
        $data = array();

        if (UserPlaylist::where('user_id', $user_id)->exists()) {
            // get playlist from db
            $data = json_decode(UserPlaylist::where('user_id', $user_id)->value('playlists'), true);
        } else {
            // get spotify playlists
            $playlist = $this->getSpotifyPlaylists();
            $data = $playlist['items'];
            $playlist_data = array(
                'user_id' => $user_id,
                'playlists' => json_encode($data, true),
            );

            // create user playlist data
            UserPlaylist::create($playlist_data);
        }

        // return user playlists
        return response()->json($data, 200);
    }

    function createFusionPlaylist(Request $request)
    {
        // Create a new cURL resource
        $ch = curl_init();

        // get spotify url
        $url = env('SPOTIFY_API_URL');

        // Extract the access token & token type from auth user
        $id = Auth::user()->id;

        $access_token = User::where('id', $id)->value('token');
        $token_type = User::where('id', $id)->value('token_type');

        $get_playlist_url = $url . '/playlists/' . $request->id;

        // Use the access token in the Authorization header of your API requests
        $headers = array('Authorization: ' . $token_type . ' ' . $access_token);
        curl_setopt($ch, CURLOPT_URL, $get_playlist_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if ($response === false) {
            die('cURL error: ' . curl_error($ch));
        }

        curl_close($ch);

        return $response;
    }
}
