<?php

use App\Http\Controllers\SpotifyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// spotify routes resource
Route::resource('/spotify-callback', SpotifyController::class);

Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', '.*');
