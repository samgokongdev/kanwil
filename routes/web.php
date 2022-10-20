<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SptController;
use App\Http\Controllers\TunggakanController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/tunggakan', [TunggakanController::class, 'index'])->middleware(['auth', 'verified'])->name('tunggakan');
Route::get('/sp2belumsppl', [TunggakanController::class, 'sp2belumsppl'])->middleware(['auth', 'verified'])->name('tunggakan.sp2belumsppl');
Route::get('/np2belumsp2', [TunggakanController::class, 'np2belumsp2'])->middleware(['auth', 'verified'])->name('tunggakan.np2belumsp2');
Route::get('/sp2jtbulanini', [TunggakanController::class, 'sp2jtbulanini'])->middleware(['auth', 'verified'])->name('tunggakan.sp2jtbulanini');
Route::get('/sp2permdokbulanini', [TunggakanController::class, 'sp2permdokbulanini'])->middleware(['auth', 'verified'])->name('tunggakan.sp2permdokbulanini');
Route::get('/sp2a/{id}', [TunggakanController::class, 'sp2a'])->middleware(['auth', 'verified'])->name('tunggakan.sp2a');
Route::get('/sp2b/{id}', [TunggakanController::class, 'sp2b'])->middleware(['auth', 'verified'])->name('tunggakan.sp2b');
Route::get('/sp2c/{id}', [TunggakanController::class, 'sp2c'])->middleware(['auth', 'verified'])->name('tunggakan.sp2c');
Route::get('/sp2d/{id}', [TunggakanController::class, 'sp2d'])->middleware(['auth', 'verified'])->name('tunggakan.sp2d');
Route::get('/sp2e/{id}', [TunggakanController::class, 'sp2e'])->middleware(['auth', 'verified'])->name('tunggakan.sp2e');
Route::get('/sp2sphpbulanini', [TunggakanController::class, 'sp2sphpbulanini'])->middleware(['auth', 'verified'])->name('tunggakan.sp2sphpbulanini');
Route::get('/sp2lhpbulanini', [TunggakanController::class, 'sp2lhpbulanini'])->middleware(['auth', 'verified'])->name('tunggakan.sp2lhpbulanini');

Route::get('/spt', [SptController::class, 'index'])->middleware(['auth', 'verified'])->name('spt');
Route::get('/semuaspt', [SptController::class, 'semuaspt'])->middleware(['auth', 'verified'])->name('spt.semuaspt');
Route::get('/spt/{id}', [SptController::class, 'show'])->middleware(['auth', 'verified'])->name('spt.show');
Route::get('/spta/{id}', [SptController::class, 'spta'])->middleware(['auth', 'verified'])->name('spt.spta');
Route::get('/sptb/{id}', [SptController::class, 'sptb'])->middleware(['auth', 'verified'])->name('spt.sptb');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
