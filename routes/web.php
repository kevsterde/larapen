<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('home');


Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
    // Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register');

    Route::get('/forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword');
});


Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/editor', [EditorController::class, 'index'])->name('editor');
    Route::post('/editor', [EditorController::class, 'create'])->name('editor.add');

    Route::put('/editor/{user_id}/{id}', [EditorController::class, 'update'])->middleware('auth')->name('editor.update');


    Route::post('/user/{user}/follow', [ProfileController::class, 'follow'])->name('user.follow');
    Route::post('/user/{user}/unfollow', [ProfileController::class, 'unfollow'])->name('user.unfollow');

    Route::post('/editor/love/{editor}', [EditorController::class, 'love'])->name('editor.love');
    Route::post('/editor/unlove/{editor}', [EditorController::class, 'unlove'])->name('editor.unlove');


});
// Route::get('/editor/{id}', function() {
//     return redirect('/');
// });


Route::get('/editor/{user_id}/{id}', [EditorController::class, 'index'])->name('editor.display');



Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('otherprofile');



Route::get('/404', [DashboardController::class, 'notFound'])->name('404');

Route::get('/{id}', [DashboardController::class, 'iframeContent'])->name('iframeContent');