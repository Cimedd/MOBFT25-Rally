<?php

use App\Http\Controllers\JungleClashController;
use Illuminate\Support\Facades\Route;

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

Route::get('/find-the-relic', function () {
    return view('find-the-relic');
});

Route::get('/displaycards', function () {
    return view('displaycards');
})->name('displaycards');

Route::get('/pertanyaanrelic', function () {
    $kode = request()->get('kode');
    return view('pertanyaanrelic', ['kode' => $kode]);
})->name('pertanyaanrelic');

Route::prefix('jungleclash')->group(function () {
    Route::get('/', [JungleClashController::class, 'index'])->name('jungleclash.index');
    Route::post('/play',[JungleClashController::class, 'play'])->name('jungleclash.play');
});

