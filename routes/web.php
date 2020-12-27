<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DespesaController;
use App\Http\Controllers\ReceitaController;

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

Route::resource ('receitas', ReceitaController::class);

Route::resource('despesas', DespesaController::class);
//Route::get('/receitas', [ReceitaController::class, 'index'])->name('receitas.index');
