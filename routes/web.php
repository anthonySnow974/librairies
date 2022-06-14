<?php
use App\Http\Controllers\livresController;
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

Route::get('',[livresController::class, 'index'])->name('index');

Route::get('',[livresController::class, 'ShowLivre'])->name('ShowLivre');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/inscrit',[livresController::class, 'inscrit'])->name('livre');

Route::get('/inscrit',[livresController::class, 'inscrit'])->name('livre');

Route::post('/inscrit',[livresController::class, 'log'])->name('log');

Route::get('/auth',[livresController::class, 'auth'])->name('auth');

Route::post('/auth',[livresController::class, 'authCheck'])->name('authCheck');





