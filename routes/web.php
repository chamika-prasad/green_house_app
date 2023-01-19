<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireBaseController;
use App\Http\Controllers\UserController;

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

Route::get('/test', function () {
    return view('details');
});

Route::get('/', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/analys', function () {
    return view('analyse');
});

Route::get('/compare', function () {
    return view('compair');
});

Route::get('/refersher', [UserController::class, 'refersher']);


Route::get('/single/{id}', [FireBaseController::class, 'single']);

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/signin', [UserController::class, 'signin']);
 
Route::get('/details', [FireBaseController::class, 'index']);
Route::post('/submit', [FireBaseController::class, 'store']);
Route::get('/view', [FireBaseController::class, 'view']);

Route::get('/temparature', [FireBaseController::class, 'temparature']);
Route::get('/ph', [FireBaseController::class, 'ph']);
Route::get('/light', [FireBaseController::class, 'light']);
Route::get('/humadity', [FireBaseController::class, 'humadity']);
Route::get('/constrartion', [FireBaseController::class, 'constrartion']);
Route::get('/concetarationhumadity', [FireBaseController::class, 'concetarationhumadity']);
Route::get('/concetarationlight', [FireBaseController::class, 'concetarationlight']);
Route::get('/concetarationtemperature', [FireBaseController::class, 'concetarationtemperature']);
Route::get('/humaditylight', [FireBaseController::class, 'humaditylight']);
Route::get('/temperaturelight', [FireBaseController::class, 'temperaturelight']);
Route::get('/temperaturehumadity', [FireBaseController::class, 'temperaturehumadity']);
Route::get('/phtemp', [FireBaseController::class, 'phtemp']);
Route::get('/phhum', [FireBaseController::class, 'phhum']);
Route::get('/phmoi', [FireBaseController::class, 'phmoi']);
Route::get('/phlig', [FireBaseController::class, 'phlig']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
