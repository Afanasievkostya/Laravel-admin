<?php

use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;


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

Route::put('/counter', [PostController::class, 'postLike'])->name('counter');

Route::group(['middleware' => 'auth:sanctum', 'abilities:check-status,place-orders'], function () {
    Route::prefix('comments')->group(function () {
        Route::post('/storeComment', [CommentController::class, 'store'])->name('storeComment'); // добовить комментарий

        Route::put('/update/{id}', [CommentController::class, "update"])->name('updateComment'); // редактировать комментарии

        Route::delete('delete/{id}', [CommentController::class, "destroy"])->name('deleteComment'); // удалить комментарий
    });
});
