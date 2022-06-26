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

// Route::get('/', function () {
//     return view('home');
// });




route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard-index');



route::get('/', [\App\Http\Controllers\DatamemberController::class,'index'])->name('datamember-index');
Route::get('/datamember/export-excel/', [\App\Http\Livewire\Datamember::class, 'export'])->name('datamember-export-excel');
Route::post('/datamember/import-excel/', [\App\Http\Controllers\DatamemberController::class, 'import'])->name('datamember-import-excel');



route::get('/datasales', [\App\Http\Controllers\DatasalesController::class,'index'])->name('datasales-index');
// Route::get('/datasales/export-excel/', [\App\Http\Livewire\Datasales::class, 'export'])->name('datasales-export-excel');
// Route::post('/datasales/import-excel/', [\App\Http\Controllers\DatasalesController::class, 'import'])->name('datasales-import-excel');
