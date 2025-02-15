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
    return view('welcome');
});

Route::view('home', 'home');
Route::post('home', 'App\Http\Controllers\curdbooking@insert');

Route::get('food', function () {
    return view('food');
});

Route::get('event',  function () {
    return view('event');
});

Route::get('gallery', function () {
    return view('gallery');
});
Route::get('wed', function () {
    return view('wed');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('coro', function () {
    return view('coro');
});
Route::get('mue', function () {
    return view('mue');
});
Route::get('pp', function () {
    return view('pp');
});
Route::get('dw', function () {
    return view('dw');
});
Route::get('bw', function () {
    return view('bw');
});
// wed start
Route::get('boat', function () {
    return view('boat');
});
Route::get('car', function () {
    return view('car');
});
Route::get('live', function () {
    return view('live');
});
Route::get('garaba', function () {
    return view('garaba');
});
Route::get('stage', function () {
    return view('stage');
});

// wed end
Route::get('formf5', function () {
    return view('formf5');
});
Route::get('aboutus2', function () {
    return view('aboutus2');
});
// mue/
Route::get('garabanight', function () {
    return view('garabanight');
});
Route::get('livemusic', function () {
    return view('livemusic');
});
Route::get('artist', function () {
    return view('artist');
});
Route::get('dj', function () {
    return view('dj');
});
Route::get('south', function () {
    return view('south');
});
// party
Route::get('bdy', function () {
    return view('bdy');
});
Route::get('Anni', function () {
    return view('Anni');
});
Route::get('alumni', function () {
    return view('alumni');
});
Route::get('get', function () {
    return view('get');
});
Route::get('them', function () {
    return view('them');
});
Route::get('header', function () {
    return view('header');
});
Route::get('footer', function () {
    return view('footer');
});
Route::get('form6', function () {
    return view('form6');
});
Route::get('form7', function () {
    return view('form7');
});
Route::get('form8', function () {
    return view('form8');
});
Route::get('form9', function () {
    return view('form9');
});



Route::get('submit_booking', function () {
    return view('submit_booking');
});Route::get('db_connect', function () {
    return view('db_connect');
});Route::get('admin1', function () {
    return view('admin1');
});



Route::get('/db_connect', function () {
    $info = DB::table('bookings')->get(); // Fetch data from the database
    return view('db_connect', compact('info'));
});


Route::view('contact', 'contact');
Route::post('contact', 'App\Http\Controllers\curdcont@insert');

// Login, Register & Logout
Route::view('register', 'register');

Route::post('register', 'App\Http\Controllers\user_crud@insert');

Route::post('login', 'App\Http\Controllers\user_crud@index');

Route::get('login', function () {
    if (session()->has('username')) {
        return redirect('home');
    }
    return view('login');
});

Route::get('logout', function () {
    if (session()->has('username')) {
        session()->pull('username');
    }
    return view('login');
});

Route::get('user', 'App\Http\Controllers\user_crud@search', function () {
    return view('user');
});

Route::get('Delete/{id}', 'App\Http\Controllers\user_crud@Delete');

Route::get('Edit/{id}', '\App\Http\Controllers\user_crud@Edit');

Route::PUT('Edit', 'App\Http\Controllers\user_crud@Update');

Route::get('admin', function () {
    return view('admin');
});

Route::get('rooms', function () {
    return view('rooms');
});

Route::get('roomdis', 'App\Http\Controllers\curdrooms@search', function () {
    return view('roomdis');
});

Route::PUT('roomedit', 'App\Http\Controllers\curdrooms@update');

Route::post('rooms', 'App\Http\Controllers\curdrooms@insert');

Route::get('deleteroom/{id}', 'App\Http\Controllers\curdrooms@delete');

Route::get('roomedit/{id}', 'App\Http\Controllers\curdrooms@edit');

Route::get('cont', 'App\Http\Controllers\curdcont@search', function () {
    return view('cont');
});

Route::get('deletecontact/{id}', 'App\Http\Controllers\curdcont@delete');

Route::get('booking', 'App\Http\Controllers\curdbooking@search', function () {
    return view('booking');
});

Route::get('deletebooking/{id}', 'App\Http\Controllers\curdbooking@delete');