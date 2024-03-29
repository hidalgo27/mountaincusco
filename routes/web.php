<?php

use App\Http\Controllers\Page\FormpageController;
use App\Http\Controllers\Page\HomeController;
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
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/paquete', [HomeController::class, 'paquetes'])->name('paquetes');
Route::get('/paquete/{url}', [HomeController::class, 'paquete'])->name('paquete');
Route::get('/f-a-q', [HomeController::class, 'faq'])->name('faq');
Route::get('/destinos', [HomeController::class, 'destinos'])->name('destinos');

Route::get('/destinos/{destino}', [HomeController::class, 'destino'])->name('destino');
Route::get('/hoteles', [HomeController::class, 'hoteles'])->name('hoteles');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('/terminos-y-condiciones', [HomeController::class, 'condiciones'])->name('condiciones');
Route::get('/proteccion-de-datos-personales', [HomeController::class, 'personales'])->name('personales');
Route::get('/noticias', [HomeController::class, 'noticias'])->name('noticias');
Route::get('/noticias/{url}',[HomeController::class,'noticias_detail'])->name('noticias_detail');
Route::get('/noticias/categoria/{categoria}',[HomeController::class,'noticias_categoria'])->name('noticias_categoria');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/codigo-esnna', [HomeController::class, 'esnna'])->name('esnna');
Route::get('/transporte', [HomeController::class, 'transporte'])->name('transporte');
Route::get('/pagos', [HomeController::class, 'pagos'])->name('pagos');
Route::post('/',[HomeController::class,'contact_form'])->name('contact_form');
Route::post('/tour',[HomeController::class,'contact_form_tour'])->name('contact_form_tour');
//form inquire
Route::get('/loaddestinos/destinos', [FormpageController::class, 'destinoform'])->name('destinoform');
Route::get('/loadcategory/category', [FormpageController::class, 'categoryform'])->name('categoryform');
Route::post('/formulario-diseno', [FormpageController::class, 'formulario_diseno'])->name('formulario_diseno');
