<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\OnibusController;
use App\Http\Controllers\AssentoController;
use App\Http\Controllers\ViagemController;
use App\Http\Controllers\ViajarController;
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
use App\Models\Pessoa;
Route::get('/', function () {
    return view('buscarPassagem');
})->name('principal');
Route::resource('/pessoas',PessoaController::class);
Route::resource('/onibus', OnibusController::class);
Route::resource('/assento', AssentoController::class);
Route::resource('/viagem', ViagemController::class);
Route::resource('/viajar', ViajarController::class);




/*
Route::get('/escolherPoltrona', function () {
    return view('escolher_poltrona');
});
Route::get('/pagar', function () {
    return view('pagar');
});
Route::get('/pessoas', function() {
    return Pessoa::all();
});
Route::get('/pessoa/{id}', function($id) {
    $pessoa = Pessoa::find($id);
    if ($pessoa == null){
        return "ID invalido";
    }
    return $pessoa;
});
Route::get('/pessoa/{id}', function($id) {
    return Pessoa::findOrFail($id);
});
Route::get('/listaestados', function() {
    $estados = Pessoa::all();
    return view('lista',['listaestados'=> $estados]);
});*/

