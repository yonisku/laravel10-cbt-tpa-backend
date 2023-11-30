<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExamController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Register
Route::post('/register', [AuthController::class, 'register']);

//Login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Get User
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // Create Exam
    Route::post('/create-exam', [ExamController::class, 'createExam']);

    // Get Exam Question List by Category
    Route::get('/get-question', [ExamController::class, 'getQuestionListByCategory']);

    // Submit and Check the Answer
    Route::post('/answer', [ExamController::class, 'answerTheQuestion']);
});
