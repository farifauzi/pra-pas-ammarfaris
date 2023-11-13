<?php

use App\Http\Controllers\Farisgunshopcontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Farisgunshops;

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
Route ::get('/home ', function () {
    return view ('home', [
        'title'=> 'home',
    ]);
});

Route ::get('/about ', function () {
    return view ('about', [
        "title" => "Tentang Saya",
        "nama" => "M Ammar Faris F",
        "kelas" => "11PPLG2",
        "image" => "image/arren.jpg",
    ]);
});

Route ::get('/farisgunshop/all ', [Farisgunshopcontroller::class,'index']);
Route ::get('/farisgunshop/{farisgunshop}', [Farisgunshopcontroller::class,'show']);
Route::get('/farisgunshops/{id}', [Farisgunshopcontroller::class, 'show']);




