<?php

use App\Http\Controllers\ControllerCliente;
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

Route::get("/", [ControllerCliente::class, "index"]);
Route::post("/adicionar", [ControllerCliente::class, "adicionar"]);

Route::get('/listar', function () {
    return view('listar');
});

