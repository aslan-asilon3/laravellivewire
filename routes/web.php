<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post\Posts;

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



// ===== Data Member =====
route::get('/', [\App\Http\Controllers\DatamemberController::class,'index'])->name('datamember-index');
Route::get('/datamember/export-excel/', [\App\Http\Livewire\Datamember::class, 'export'])->name('datamember-export-excel');
Route::post('/datamember/import-excel/', [\App\Http\Controllers\DatamemberController::class, 'import'])->name('datamember-import-excel');
// ===== End Data Member =====


// ===== Data Sales =====
route::get('/datasales', [\App\Http\Controllers\DatasalesController::class,'index'])->name('datasales-index');
Route::get('/datasales/export-excel/', [\App\Http\Controllers\DatasalesController::class, 'export'])->name('datasales-export-excel');
Route::post('/datasales/import-excel/', [\App\Http\Controllers\DatasalesController::class, 'import'])->name('datasales-import-excel');
// ===== End Data Sales =====


// ===== Data Member Raw =====
route::get('/datamemberraw', [\App\Http\Controllers\DatamemberrawController::class,'index'])->name('datamemberraw-index');
// route::get('/datamemberraw', [\App\Http\Livewire\DatamemberrawController::class,'index'])->name('datamemberraw-index');
Route::get('/datamemberraw/export-excel/', [\App\Http\Controllers\DatamemberrawController::class, 'export'])->name('datamemberraw-export-excel');
Route::post('/datamemberraw/import-excel/', [\App\Http\Controllers\DatamemberrawController::class, 'import'])->name('datamemberraw-import-excel');
// ===== End Data Member Raw =====


// ===== Data Contact Raw =====
route::get('/datacontact', [\App\Http\Controllers\DatacontactController::class,'index'])->name('datacontact-index');
// route::get('/datacontact', [\App\Http\Livewire\Datacontact::class,'render'])->name('datacontact-index');
// Route::get('/datacontact/export-excel/', [\App\Http\Controllers\DatacontactController::class, 'export'])->name('datacontact-export-excel');
// Route::post('/datacontact/import-excel/', [\App\Http\Controllers\DatacontactController::class, 'import'])->name('datacontact-import-excel');
// ===== End Data Contact Raw =====

// ===== Data Post =====
route::get('/post', [Posts::class,'render'])->name('post-index');
// Route::get('/post', Posts::class);
// Route::get('posts', Posts::class);
// ===== End Data Post =====