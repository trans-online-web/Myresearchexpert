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
Route::apiResources(['user'=>'API\UserController']);
Route::apiResources(['subject' => 'API\SubjectController']);
Route::post('/checkuser','API\UserController@checkUser');
Route::get('findSubject','API\SubjectController@search');
Route::get('findUser','API\UserController@search');
Route::get('findDocument','API\DocumentController@search');
Route::apiResources(['document' => 'API\DocumentController']);
Route::apiResources(['task' => 'API\TaskController']);
Route::post('/post-task','API\TaskController@store');

Route::apiResources(['level' => 'API\LevelController']);
Route::get('ifFiles/{orderId}','API\TaskController@ifFiles');
Route::get('getFiles/{orderId}','API\TaskController@getFiles');

Route::get('download/{path}','API\TaskController@downloadFile');
