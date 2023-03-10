<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('test-route', function () {
    return "You are welcome!";
});
Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/logout', [UserController::class, 'logout']);
Route::post('/users/register', [UserController::class, 'register']);
Route::post('/users/resetPassword', [UserController::class, 'resetPassword']);
Route::post('/users/resetPassword-activation', [UserController::class, 'resetPasswordActivation']);
Route::get('/show_list_rooms', [RoomController::class, 'listRooms']);//list rooms for user can choose join
Route::get('/show_users_on_room/{id}', [RoomController::class, 'listUsersOnRoom']);//show number users on room
Route::get('/save_message/{id}', [RoomController::class, 'saveMessage']);//saving message
Route::get('/list_old_message/{id}', [RoomController::class, 'listMessages']);//get list old messages showing on chatting two users


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


