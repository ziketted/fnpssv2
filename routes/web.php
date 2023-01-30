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




Route::name('enrolement.')->group(function () {
    Route::get('/enrolement/index', [EnrolementController::class, 'index'])->name('index');
    Route::get('/enrolement/pay', [EnrolementController::class, 'pay'])->name('pay');
    Route::post('/enrolement/store', [EnrolementController::class, 'store'])->name('store');
    Route::post('/enrolement/create', [EnrolementController::class, 'create'])->name('create');
    Route::get('/enrolement/show/{enrolement}', [EnrolementController::class, 'show'])->name('show');
    Route::delete('/enrolement/{operateur}', [EnrolementController::class, 'destroy'])->name('destroy');
});

Route::name('exoneration.')->group(function () {
    Route::get('/exoneration/index', [ExonerationController::class, 'index'])->name('index');
    Route::post('/exoneration/store', [ExonerationController::class, 'store'])->name('store');
    Route::get('/exoneration/{exoneration}/edit/', [ExonerationController::class, 'edit'])->name('edit');
    Route::post('/exoneration/create', [ExonerationController::class, 'create'])->name('create');
    Route::get('/exoneration/{exoneration}/show', [ExonerationController::class, 'show'])->name('show');
    Route::delete('/exoneration/{exoneration}', [ExonerationController::class, 'destroy'])->name('destroy');
});
Route::name('convention.')->group(function () {
    Route::get('/convention/index', [ConventionController::class, 'index'])->name('index');
    Route::post('/convention/store', [ConventionController::class, 'store'])->name('store');
    Route::get('/convention/{convention}/edit/', [ConventionController::class, 'edit'])->name('edit');
    Route::post('/convention/create', [ConventionController::class, 'create'])->name('create');
    Route::get('/convention/{convention}/show', [ConventionController::class, 'show'])->name('show');
    Route::delete('/convention/{convention}', [ConventionController::class, 'destroy'])->name('destroy');
});

Route::name('bienexonerer.')->group(function () {
    Route::get('/bienexonerer/index', [BienexonererController::class, 'index'])->name('index');
    Route::post('/bienexonerer/store', [BienexonererController::class, 'store'])->name('store');
    Route::get('/bienexonerer/{bienexonerer}/edit/', [BienexonererController::class, 'edit'])->name('edit');
    Route::post('/bienexonerer/create', [BienexonererController::class, 'create'])->name('create');
    Route::get('/bienexonerer/{bienexonerer}/show', [BienexonererController::class, 'show'])->name('show');
    Route::delete('/bienexonerer/{bienexonerer}', [BienexonererController::class, 'destroy'])->name('destroy');
});

Route::name('philantropie.')->group(function () {
    Route::get('/philantropie/index', [PhilantropieController::class, 'index'])->name('index');
    Route::post('/philantropie/store', [PhilantropieController::class, 'store'])->name('store');
    Route::get('/philantropie/{philantropie}/edit/', [PhilantropieController::class, 'edit'])->name('edit');
    Route::post('/philantropie/create', [PhilantropieController::class, 'create'])->name('create');
    Route::get('/philantropie/{philantropie}/show', [PhilantropieController::class, 'show'])->name('show');
    Route::delete('/philantropie/{philantropie}', [PhilantropieController::class, 'destroy'])->name('destroy');
});

Route::name('avisfavorable.')->group(function () {
    Route::get('/avisfavorable/index', [AvisfavorableController::class, 'index'])->name('index');
    Route::post('/avisfavorable/store', [AvisfavorableController::class, 'store'])->name('store');
    Route::get('/avisfavorable/{avisfavorable}/edit/', [AvisfavorableController::class, 'edit'])->name('edit');
    Route::post('/avisfavorable/create', [AvisfavorableController::class, 'create'])->name('create');
    Route::get('/avisfavorable/{avisfavorable}/show', [AvisfavorableController::class, 'show'])->name('show');
    Route::delete('/avisfavorable/{avisfavorable}', [AvisfavorableController::class, 'destroy'])->name('destroy');
});
Route::name('avispermanent.')->group(function () {
    Route::get('/avispermanent/index', [AvispermanentController::class, 'index'])->name('index');
    Route::post('/avispermanent/store', [AvispermanentController::class, 'store'])->name('store');
    Route::get('/avispermanent/{avispermanent}/edit/', [AvispermanentController::class, 'edit'])->name('edit');
    Route::post('/avispermanent/create', [AvispermanentController::class, 'create'])->name('create');
    Route::get('/avispermanent/{avispermanent}/show', [AvispermanentController::class, 'show'])->name('show');
    Route::delete('/avispermanent/{avispermanent}', [AvispermanentController::class, 'destroy'])->name('destroy');
});

require __DIR__ . '/auth.php';
