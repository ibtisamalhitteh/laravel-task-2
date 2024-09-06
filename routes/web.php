<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;


use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', 'DashboardController@dashboard');
}); */

// Show home page "list of post"
Route::get('/', [LandingController::class, 'index'])->name('landing.page');
// view post details with comments
Route::get('/view/{id}', [LandingController::class, 'view'])->name('post.view.page');

// Show login form
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
// Handle login
Route::post('/loginprocess', [UserController::class, 'login'])->name('login');
// Handle logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/administrator', [AuthController::class, 'loginScreen'])->name('admin.login.form');
Route::post('/loginadmin', [AuthController::class, 'login'])->name('administrator.login');
Route::post('/logoutadmin', [AuthController::class, 'logout'])->name('administrator.logout');

Route::prefix('administrator')->middleware(['auth', 'role'])->name('administrator.')->group(function () {
    Route::controller(PostController::class)->name('posts.')->group(function () {
        Route::get('/posts', 'index')->name('list');
        Route::get('/posts/view/{id}', 'show')->name('show');
        Route::get('/posts/edit/{id}', 'edit')->name('edit');
        Route::get('/posts/delete/{id}', 'delete')->name('delete');
        Route::post('/posts/update/{id}', 'update')->name('update');
        Route::get('/posts/create', 'create')->name('create');
        Route::post('/posts/store', 'store')->name('store');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        
    });
});

Route::middleware(['auth', 'role:user'])->name('user.')->group(function () {
    Route::controller(CommentController::class)->name('comments.')->group(function () {
        Route::get('/comment/delete/{id}', 'delete')->name('delete');
        Route::put('/comment/update/{id}', 'update')->name('update');
        Route::post('/comment/add', 'add')->name('add');
    });
});