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
    return redirect('/find-the-relic');
});

Route::get('/find-the-relic',[RelicController::class, 'findTheRelic']);

Route::post('/relicselesai',[RelicController::class, 'relicSelesai']);

Route::get('/relic', [RelicController::class, 'index'])->name('displaycards');//Ndak dipakai (?)
Route::post('/relic', [RelicController::class, 'inputKode'])->name('inputKode');

Route::get('/showrelic', [RelicController::class, 'showRelic'])->name('showRelic');

Route::get('/endrelic', [RelicController::class, 'endRelic'])->name('endRelic');

Route::post('/pertanyaan', [RelicController::class, 'masuk'])->name('masuk');

Route::post('/cekjawaban', [RelicController::class, 'cekJawaban'])->name('cekJawaban');

Route::get('/pertanyaanrelic', [RelicController::class, 'pertanyaanrelic'])->name('pertanyaanrelic');

Route::get('/jungle-clash', function () {
    return view('jungle-clash');
});
