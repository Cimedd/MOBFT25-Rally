<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelicController;

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

Route::get('/find-the-relic',[RelicController::class, 'findTheRelic']);

Route::get('/relic', [RelicController::class, 'index'])->name('displaycards');
Route::post('/relic', [RelicController::class, 'inputKode'])->name('inputKode');

Route::post('/pertanyaan', [RelicController::class, 'masuk'])->name('masuk');

Route::post('/cekjawaban', [RelicController::class, 'cekJawaban'])->name('cekJawaban');

Route::get('/pertanyaanrelic', [RelicController::class, 'pertanyaanrelic'])->name('pertanyaanrelic');

Route::get('/jungle-clash', function () {
    return view('jungle-clash');
});
