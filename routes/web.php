<?php

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
    return view('welcome', [
        'tags' => App\Models\Tag::get()
    ]);
});

Route::get('about', function () {
    return 'hola soy about';
});

Route::view('profile', 'profile');
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'upload']);

Route::post('tags', [App\Http\Controllers\TagController::class, 'store']);
