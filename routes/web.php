<?php

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/enrolement', function () {
    return view('services.enrolement.create');
});
Route::get('/enrolement_index', function () {
    return view('services.enrolement.index');
});
Route::get('/bienexonerer', function () {
    return view('services.bien_exonerer.create');
});
Route::get('/convention', function () {
    return view('services.convention.create');
});
Route::get('/exoneration', function () {
    return view('services.exoneration.create');
});
Route::get('/philantropie', function () {
    return view('services.philantropie.create');
});
Route::get('/avisfavorable', function () {
    return view('services.avis_favorable.create');
});
Route::get('/avispermanent', function () {
    return view('services.avis_permanent.create');
});
require __DIR__ . '/auth.php';
