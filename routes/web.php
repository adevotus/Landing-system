<?php

use App\Http\Controllers\AdminController\BookController;
use App\Http\Controllers\AdminController\ClientController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\FeedbackController;
use App\Http\Controllers\AdminController\SchoolsController;
use App\Http\Controllers\AdminController\ParentController as ParentController;

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\SiteController\SiteController;
use GuzzleHttp\Psr7\UploadedFile;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about_us', [SiteController::class, 'about'])->name('about_us');
Route::get('/contact_us', [SiteController::class, 'contact'])->name('contact_us');
Route::post('/contact_us', [SiteController::class, 'SendMessage'])->name('sendMessage');
Route::get('/publiSite',[SiteController::class,'publiSite'])->name('publiSite');

Route::get('/blogs', [SiteController::class, 'blogSite'])->name('blogSite');
Route::get('/blogs/{id}',[SiteController::class,'singleBlog'])->name('singleBlog');
Route::get('/site/managemet', [SiteController::class, 'siteManagement'])->name('site_management');
Route::post('/parent',[SiteController::class, 'ParentRegistration'])->name('parentRegistration');
Route::post('/school',[SiteController::class, 'SchoolRegistration'])->name('schoolRegistration');

Auth::routes();


Route::middleware(['auth', 'isAdministrator'])->group(function () {
    Route::get('/admin_home', [DashboardController::class, 'dashboard'])->name('admin_home');


    //profile
    Route::get('/admin_profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/admin_profile/update', [ProfileController::class, 'updateProfile'])->name('update_user');
    Route::post('/admin_profile/password', [ProfileController::class, 'updatePassword'])->name('update_password');


    //parent router
    Route::get('/parent', [ParentController::class, 'parent'])->name('parent');
    Route::get('/create_parent', [ParentController::class, 'create_parent'])->name('create_parent');
    Route::post('/parent', [ParentController::class, 'store'])->name('parent_registration');
    Route::delete('/parent/{id}', [ParentController::class, 'destroy'])->name('parent_delete');
    Route::get('/parent/{id}/edit', [ParentController::class, 'edit'])->name('parent_edit');
    Route::put('/parent/{id}', [ParentController::class, 'update'])->name('parent_update');


    //school router
    Route::get('/schools', [SchoolsController::class, 'school'])->name('schools');
    Route::post('/schools', [SchoolsController::class, 'store'])->name('post_school');
    Route::delete('/schools/{id}', [SchoolsController::class, 'destory'])->name('school_delete');
    Route::get('/schools/{id}/edit', [SchoolsController::class, 'edit'])->name('school_edit');
    Route::put('schools/{id}', [SchoolsController::class, 'update'])->name('school_update');

    //client
    Route::get('/client', [ClientController::class, 'client'])->name('client');
    Route::post('/client', [ClientController::class, 'store'])->name('client_post');
    Route::delete('/client/{id}', [ClientController::class, 'destory'])->name('client_delete');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client_edit');
    Route::put('/client/{id}', [ClientController::class, 'update'])->name('client_update');


    //blog
    Route::get('/book', [BookController::class, 'book'])->name('book');
    Route::get('/create_book', [BookController::class, 'create_book'])->name('create_book');
    Route::post('/book', [BookController::class, 'store'])->name('book_post');
    Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book_delete');
    Route::put('/book_update/{id}', [BookController::class, 'update'])->name('book_update');
    Route::put('/book/{id}', [BookController::class, 'IndividualBlog'])->name('IndividualBlog');


    //feedback
    Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('feedback');
    Route::delete('/feedback/{id}',[FeedbackController::class,'destory'])->name('feedback_delete');
});











