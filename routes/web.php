<?php

use TCG\Voyager\Voyager;
use App\Models\Avisfavorable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\EnrolementController;
use App\Http\Controllers\ExonerationController;
use App\Http\Controllers\BienexonererController;
use App\Http\Controllers\PhilantropieController;
use App\Http\Controllers\AvisfavorableController;
use App\Http\Controllers\AvispermanentController;

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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::name('enrolement.')->group(function () {
    Route::get('/enrolement/index', [EnrolementController::class, 'index'])->middleware(['auth'])->name('index');
    Route::get('/enrolement/pay', [EnrolementController::class, 'pay'])->middleware(['auth'])->name('pay');
    Route::get('/enrolement/{enrolement}/edit/', [EnrolementController::class, 'edit'])->name('edit');
    Route::post('/enrolement/store', [EnrolementController::class, 'store'])->name('store');
    Route::get('/enrolement', [EnrolementController::class, 'create'])->name('create');
    Route::get('/enrolement/show/{enrolement}', [EnrolementController::class, 'show'])->name('show');
    Route::delete('/enrolement/{enrolement}', [EnrolementController::class, 'destroy'])->name('destroy');
});

Route::name('exoneration.')->group(function () {
    Route::get('/exoneration/index', [ExonerationController::class, 'index'])->name('index');
    Route::post('/exoneration/store', [ExonerationController::class, 'store'])->name('store');
    Route::get('/exoneration/{exoneration}/edit/', [ExonerationController::class, 'edit'])->name('edit');
    Route::get('/exoneration', [ExonerationController::class, 'create'])->name('create');
    Route::get('/exoneration/{exoneration}/show', [ExonerationController::class, 'show'])->name('show');
    Route::delete('/exoneration/{exoneration}', [ExonerationController::class, 'destroy'])->name('destroy');
});
Route::name('convention.')->group(function () {
    Route::get('/convention/index', [ConventionController::class, 'index'])->name('index');
    Route::post('/convention/store', [ConventionController::class, 'store'])->name('store');
    Route::get('/convention/{convention}/edit/', [ConventionController::class, 'edit'])->name('edit');
    Route::get('/convention', [ConventionController::class, 'create'])->name('create');
    Route::get('/convention/{convention}/show', [ConventionController::class, 'show'])->name('show');
    Route::delete('/convention/{convention}', [ConventionController::class, 'destroy'])->name('destroy');
});

Route::name('bienexonerer.')->group(function () {
    Route::get('/bienexonerer/index', [BienexonererController::class, 'index'])->name('index');
    Route::post('/bienexonerer/store', [BienexonererController::class, 'store'])->name('store');
    Route::get('/bienexonerer/{bienexonerer}/edit/', [BienexonererController::class, 'edit'])->name('edit');
    Route::get('/bienexonerer', [BienexonererController::class, 'create'])->name('create');
    Route::get('/bienexonerer/{bienexonerer}/show', [BienexonererController::class, 'show'])->name('show');
    Route::delete('/bienexonerer/{bienexonerer}', [BienexonererController::class, 'destroy'])->name('destroy');
});

Route::name('philantropie.')->group(function () {
    Route::get('/philantropie/index', [PhilantropieController::class, 'index'])->name('index');
    Route::post('/philantropie/store', [PhilantropieController::class, 'store'])->name('store');
    Route::get('/philantropie/{philantropie}/edit/', [PhilantropieController::class, 'edit'])->name('edit');
    Route::get('/philantropie', [PhilantropieController::class, 'create'])->name('create');
    Route::get('/philantropie/{philantropie}/show', [PhilantropieController::class, 'show'])->name('show');
    Route::delete('/philantropie/{philantropie}', [PhilantropieController::class, 'destroy'])->name('destroy');
});

Route::name('avisfavorable.')->group(function () {
    Route::get('/avisfavorable/index', [AvisfavorableController::class, 'index'])->name('index');
    Route::post('/avisfavorable/store', [AvisfavorableController::class, 'store'])->name('store');
    Route::get('/avisfavorable/{avisfavorable}/edit/', [AvisfavorableController::class, 'edit'])->name('edit');
    Route::get('/avisfavorable', [AvisfavorableController::class, 'create'])->name('create');
    Route::get('/avisfavorable/{avisfavorable}/show', [AvisfavorableController::class, 'show'])->name('show');
    Route::delete('/avisfavorable/{avisfavorable}', [AvisfavorableController::class, 'destroy'])->name('destroy');
});
Route::name('avispermanent.')->group(function () {
    Route::get('/avispermanent/index', [AvispermanentController::class, 'index'])->name('index');
    Route::post('/avispermanent/store', [AvispermanentController::class, 'store'])->name('store');
    Route::get('/avispermanent/{avispermanent}/edit/', [AvispermanentController::class, 'edit'])->name('edit');
    Route::get('/avispermanent', [AvispermanentController::class, 'create'])->name('create');
    Route::get('/avispermanent/{avispermanent}/show', [AvispermanentController::class, 'show'])->name('show');
    Route::delete('/avispermanent/{avispermanent}', [AvispermanentController::class, 'destroy'])->name('destroy');
});

require __DIR__ . '/auth.php';
