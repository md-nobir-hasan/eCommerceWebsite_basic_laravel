<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller1;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\adminAccountController;
use App\Http\Controllers\db2uiController;

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

Route::get('/', [db2uiController::class,"show"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix'=>'/admin'],function(){

    Route::get('/show_products_info', [controller1::class,'show'])->name('admin.show');
    Route::post('/insert_products_info', [controller1::class,'insert'])->name('admin.insert');
    Route::put('/update_products', [controller1::class,'update'])->name('admin.update');

    Route::get('/show_admin_account_info', [adminAccountController::class,'show'])->name('admin.adminShow');
    Route::post('/insert_admin_account', [adminAccountController::class,'insert'])->name('admin.AdminInsert');
    Route::put('/update_admin_account', [adminAccountController::class,'update'])->name('admin.AdminUpdate');


    Route::delete('/delete/{model}/{id}', [deleteController::class,'deletes']);

});

