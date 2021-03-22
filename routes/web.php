<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceleImportController;

use App\Http\Controllers\MasterImportController1;


use App\Http\Controllers\PartmportController2;

use App\Http\Controllers\DropImportController3;
use App\Http\Controllers\GoodImportController4;

use App\Http\Controllers\NiceImportController5;

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
//     return view('excele.All_BEC');
// });

Route::get('/', [ExceleImportController::class,'index']);
Route::post('/import_excel/import', [ExceleImportController::class,'import'])->name('import_excel');


Route::get('/1', [MasterImportController1::class,'index']);
Route::post('/import_excel1/import', [MasterImportController1::class,'import'])->name('x1');

Route::get('/2', [PartmportController2::class,'index']);
Route::post('/import_exce2/import', [PartmportController2::class,'import'])->name('import_excel2');


Route::get('/3', [DropImportController3::class,'index']);
Route::post('/import_excel3/import', [DropImportController3::class,'import'])->name('import_excel3');

Route::get('/4', [GoodImportController4::class,'index']);
Route::post('/import_excel4/import', [GoodImportController4::class,'import'])->name('import_excel4');


Route::get('/5', [NiceImportController5::class,'index']);
Route::post('/import_excel5/import', [NiceImportController5::class,'import'])->name('x5');
