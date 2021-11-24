<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group(['prefix'=>'/user'],function(){
    Route::get('/', [UserController::class, 'index'])->name('user.index');

    Route::get('/create', [UserController::class, 'create'])->name('user.create');

    Route::post('/', [UserController::class, 'store'])->name('user.store');

    Route::get('/{id}', [UserController::class, 'show'])->name('user.show');

    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');

    Route::delete('/{id}', [UserController::class, 'delete'])->name('user.delete');
});


