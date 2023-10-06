<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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



Route::get('/', [UserController::class, 'index']) ->Name('taken.index');

Route::get('/', [UserController::class, 'index'])->Name('taken.index');

Route::get('/taken/create', [UserController::class, 'create'])->Name('taken.create');

Route::get('/taken/{index}', [UserController::class, 'show']) ->Name('taken.show');

Route::get('/update/{id}', [UserController::class, 'edit'])->name('taken.edit');

Route::put('/update/{id}', [UserController::class, 'update'])->name('taken.update');

Route::post('/store', [UserController::class, 'store'])->Name('taken.store');

Route::delete('/taken/{taak}', [UserController::class, 'destroy'])->Name('taken.destroy');

Route::post('/taken/destroyAll', [UserController::class, 'destroyAll'])->Name('taken.destroyAll');







