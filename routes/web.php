<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceleImportController;

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




Route::get('/import_excel', [ExceleImportController::class,'index'])->name('excel');

// ------------------------ delete ------------------------- //
Route::get('import_excel/{importID}',[ExceleImportController::class,'import'])->name('importDelete');
// ------------------------ insert ------------------------ //
Route::post('importInsert',[ExceleImportController::class,'importInsert'])->name('importInsert');
// ------------------------ update ------------------------ //
Route::post('importUpdate',[ExceleImportController::class,'importUpdate'])->name('importUpdate');
