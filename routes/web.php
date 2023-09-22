<?php

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisterCommentatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MaillController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PageController::class, 'welcome']); // главная страница
Route::get('/addPosts', [PageController::class, 'addPosts']); // страница показа всех постов
Route::get('/addCategory/{id}', [PageController::class, 'addCategory']); //страница показа постов по категории
Route::get('/addPost/{id}', [PageController::class, 'addPost']); // страница поста
Route::get('/addAuthors', [PageController::class, 'addAuthors']); // страница показа авторов
Route::get('/addRegisterCommentator', [PageController::class, 'addRegisterCommentator']); // страница регистрации коментаторов
Route::get('/contact', [PageController::class, 'addContact']); //страница показа контактов




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/addUpdeteComment/{id}', [PageController::class, 'addUpdeteComment']); // страница редактирования комментариев

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// admin registrat----------------------------------------------------------
Route::post('register', [RegisterController::class, 'register'])
    ->middleware('restrictothers');

// commentator registrat---------------------------------------------------
Route::post('register', [RegisterCommentatorController::class, 'register'])->middleware('restrictothers')->name('registerCommentator');

Route::get('/{page}', [AuthorController::class, 'index'])->name('page');

// maill--------------------------------------------------------------------
Route::post('/sendmail', [MaillController::class, 'send']); // отправка письма на почту
