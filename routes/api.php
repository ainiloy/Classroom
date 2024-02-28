<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::group(['prefix' => 'v1'], function(){

    Route::get('students', [App\Http\Controllers\Api\StudentController::class, 'students'])->name('students');
    Route::get('student/{id}', [App\Http\Controllers\Api\StudentController::class, 'single_student'])->name('student');


});
