<?php

use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/get-hash', function() {
    return Hash::make('12345');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
        Route::get('/login', 'LoginController@index')->name('login');
        Route::post('/login_user', 'LoginController@authenticate');
        Route::post('/logout', 'LoginController@logout')->name('logout');
        Route::get('/logout', 'LoginController@logout');
        
        Route::get('/register', 'RegisterController@index')->name('register');
        Route::post('/register_user', 'RegisterController@store');
});
    
    
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
Route::resource("/dashboard/berita", DashboardBeritaController::class)->middleware('auth');
