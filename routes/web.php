<?php

use App\Http\Controllers\Ikan;
use App\Http\Controllers\IkanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home', [
    "title" => "Home"
    ]); 
});

Route::get('/ikan.all', [IkanController::class, 'index']);

Route::get('/Ikan/detail/{ikan}', [IkanController::class, 'show']);