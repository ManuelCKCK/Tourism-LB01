<?php

use App\Http\Controllers\AttractionController;
use App\Http\Controllers\UsersController;
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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AttractionController::class, 'show_home']);
});

Route::post('addreview/{id}', [AttractionController::class, 'add_review']);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/logout', [UsersController::class, 'logout']);
Route::get('/all_attractions', [AttractionController::class, 'show_all']);
Route::get('/category/{id}', [AttractionController::class, 'show_by_category']);
Route::get('/attraction/{id}', [AttractionController::class, 'show_attraction']);
Route::get('/travellist', [UsersController::class, 'travellist'])->name('travellist');
Route::post('/addtravellist/{attraction_id}', [UsersController::class, 'add_travellist']);

Route::delete('/remove_travellist', [UsersController::class, 'delete_travellist'])->name('delete_travellist');
Route::get('/update_travellist/{attraction_id}', [UsersController::class, 'update_travellist']);


Route::get('/book_ticket/{attraction_id}', [AttractionController::class, 'book_ticket']);
Route::post('/book_ticket/{attraction_id}', [AttractionController::class, 'confirm_booking']);
Route::get('/all_bookings', [AttractionController::class, 'all_bookings']);
Route::get('/remove_booking/{id}', [AttractionController::class, 'remove_booking']);
Route::get('/booking_detail/{id}', [AttractionController::class, 'booking_detail']);
