<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtletaController;

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});


Route::get('atleta/lista', [AtletaController::class, 'lista']);

//Rotas para criar novo atleta
Route::get('atleta/novo', [AtletaController::class, 'novo']);

Route::post('atleta/inserir', [AtletaController::class, 'inserir']);


Route::get('users', function (){
    return "usuario ";
});

Route::get('users/{id}', function ($id) {
    return "user id $id";
});


