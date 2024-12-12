<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;

use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\User\AuthController;

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
})->name('home');

Route::get('/user/login',[AuthController::class,'loginForm'])->name('user.login.form');
Route::post('/user/login/send',[AuthController::class,'login'])->name('user.login.form.submit');
Route::get('/signup',[AuthController::class,'signupForm'])->name('general.signup.form');
Route::post('/signup/send',[AuthController::class,'signup'])->name('general.signup.form.submit');


/* administrator routes */
Route::prefix('administrator')->name('administrator.')->group(function () {
    Route::get('/login',[AdminController::class,'loginForm'])->name('login.form');
    Route::post('/loginPost',[AdminController::class,'loginPost'])->name('login.form.submit');
});

Route::prefix('administrator')->middleware('admin')->name('administrator.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/logout','logout')->name('logout');
    });

    Route::prefix('students')->controller(StudentController::class)->name('students.')->group(function () {
        Route::get('/list', 'index')->name('list');
    });

    Route::prefix('subjects')->controller(SubjectController::class)->name('subjects.')->group(function () {
        Route::get('/list', 'index')->name('list');
    });
});


//Auth::routes();

Route::prefix('student')->name('student.')->group(function () {
    Route::controller(StudentDashboardController::class)->name('studentdashboard.')->group(function () {
        Route::get('/profile','index')->name('profile');
    }); 

    Route::post('/logout',[AuthController::class,'logout'])->name('general.logout');
});
