<?php

// use Illuminate\Contracts\Session\Session;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Models\Artist;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
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
    $artist=Artist::where('status',1)->get();
    return view('index',['artists'=>$artist]);
});

// Route::post('register', [RegisterController::class, 'create'])->name('register');
Route::post('/submitted', [App\Http\Controllers\EventController::class, 'contactForm'])->name('contact');
Route::post('/karam', [App\Http\Controllers\EventController::class, ''])->name('karam');



// Route::get('request_event',)
Route::get('/request_event', [App\Http\Controllers\EventController::class, 'event']);
Route::post('/sent', [App\Http\Controllers\EventController::class, 'submission'])->name('sent');
Route::get('/live_event', [App\Http\Controllers\LiveController::class, 'live']);



Auth::routes();

Route::get('/logoutt', function () {
    // Session::flush();
    Auth::logout();
    return redirect('login');
})->name('logoutt');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('createartist', [App\Http\Controllers\ArtistController::class, 'create']);
Route::post('artistcreated', [App\Http\Controllers\ArtistController::class, 'store']);
Route::get('artist/dashboard', [App\Http\Controllers\ArtistController::class, 'index']);

Route::get('updateartist/{id}', [App\Http\Controllers\ArtistController::class, 'update']);
Route::get('artistupdated/{id}', [App\Http\Controllers\ArtistController::class, 'update_artist']);

Route::get('/approve/{id}', [App\Http\Controllers\ArtistController::class, 'approve']);
Route::get('/reject/{id}', [App\Http\Controllers\ArtistController::class, 'reject']);
Route::get('/pending/artist', [App\Http\Controllers\ArtistController::class, 'pending']);
Route::get('/rejected/artist', [App\Http\Controllers\ArtistController::class, 'rejectedartist']);


Route::get('singerModal/{id}', [App\Http\Controllers\HomeController::class, 'singerModal']);


Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');
Route::post('admin/dashboard', [HomeController::class, 'store'])->name('admin.dashboard')->middleware('is_admin');

