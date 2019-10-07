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
Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['subject' => 'API\SubjectController']);
Route::post('/checkuser', 'API\UserController@checkUser');
Route::get('findSubject', 'API\SubjectController@search');
Route::get('findUser', 'API\UserController@search');
Route::get('findDocument', 'API\DocumentController@search');
Route::apiResources(['document' => 'API\DocumentController']);
Route::apiResources(['task' => 'API\TaskController']);
Route::post('/post-task', 'API\TaskController@store');
Route::get('/student-task', 'API\TaskController@student');
Route::apiResources(['dashboard' => 'API\DashboardController']);
Route::apiResources(['level' => 'API\LevelController']);
Route::get('ifFiles/{orderId}', 'API\TaskController@ifFiles');
Route::get('ifCompleted/{orderId}', 'API\TaskController@ifCompleted');
Route::get('getFiles/{orderId}', 'API\TaskController@getFiles');
Route::post('addFiles/{orderId}', 'API\TaskController@addFiles');
Route::get('getUser/{orderId}','API\TaskController@user');
Route::get('getAdmin','API\TaskController@admin');
Route::get('getThisUser/{orderId}','API\TaskController@user');

Route::get('download/{id}', 'API\TaskController@downloadFile');

Route::post('completed/{orderId}', 'API\CompletedController@store');
Route::get('getcompleted/{orderId}', 'API\CompletedController@show');
Route::get('downloadcompleted/{orderId}', 'API\CompletedController@downloadCompleted');

Route::get('contacts', 'API\ContactsController@index');
Route::get('student', 'API\ContactsController@student');
Route::get('conversation/{id}', 'API\ContactsController@getMessagesFor');
Route::post('conversation/send', 'API\ContactsController@send');
Route::apiResources(['category' => 'API\CategoryController']);
Route::apiResources(['messenger'=>'API\MessangerController']);
Route::post('messenger/send','API\MessangerController@send');
Route::get('receiver','API\MessangerController@index');
Route::get('send','API\MessangerController@send');
Route::get('unread','API\ContactsController@index');
Route::get('getMessage/{orderId}','API\MessangerController@getMessagesFor');
