<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student','ApiController@store');
Route::get('/showdata','ApiController@show');
Route::get('/student/{id}','ApiController@getStudentById');
Route::put('/studentupdate/{id}','ApiController@updateStudentById');
Route::delete('/studentdelete/{id}','ApiController@deleteStudentById');
