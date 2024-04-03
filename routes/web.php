<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test\Test;
use App\Http\Controllers\ApiTreeUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get', [Test::class, 'get'])->name("test.get");
Route::get('/tree-user', [ApiTreeUserController::class, 'index'])->name("tree-user.index");
// Route::get('addData', [ApiTreeUserController::class, 'addData'])->name('addData');

// prefixで指定したURLの前にapiをつける
// asで指定した名前をnameで指定した命名の頭につける
Route::group(['prefix' => 'api/', 'as' => 'api.'], function () {
    Route::get('index', [ApiTreeUserController::class, 'index'])->name('index');
    Route::get('get', [ApiTreeUserController::class, 'get'])->name('get');
    Route::post('addData', [ApiTreeUserController::class, 'addData'])->name('addData');
    Route::delete('deleteData', [ApiTreeUserController::class, 'deleteData'])->name('deleteData');
    Route::put('updateData', [ApiTreeUserController::class, 'updateData'])->name('updateData');
});