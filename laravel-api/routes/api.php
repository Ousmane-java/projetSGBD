<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\SyllabusController;
use App\Http\Controllers\Api\CahierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('users', function(){
    return User::all();
});



Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);

// Syllabus
Route::get('syllabus', [SyllabusController::class, 'index']);
Route::post('createSyllabus', [SyllabusController::class, 'store']);

// cahier de texe
Route::get('cahier', [CahierController::class, 'index']);
Route::post('createCahier', [CahierController::class, 'store']);