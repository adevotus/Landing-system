<?php

use App\Http\Controllers\AdminController\BlogController;
use App\Http\Controllers\AdminController\ClientController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\User\AcademicQualificationController;
use App\Http\Controllers\User\ComputerLiterancyController;
use App\Http\Controllers\User\LanguageProficiencyController;
use App\Http\Controllers\User\OnlineCourseController;
use App\Http\Controllers\User\OtherAttachimentController;
use App\Http\Controllers\User\PersonalDetailsController;
use App\Http\Controllers\User\ProfessionalQualificationController;
use App\Http\Controllers\User\RefereesController;
use App\Http\Controllers\User\TrainingAndWorkshopController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WorkingExperienceController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\FeedbackController;
use App\Http\Controllers\AdminController\PublicationsController;
use App\Http\Controllers\AdminController\StaffController as StaffController;

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
Auth::routes();


Route::middleware(['auth', 'isAdministrator'])->group(function () {
    Route::get('/admin_home', [DashboardController::class, 'dashboard'])->name('admin_home');


    //profile
    Route::get('/admin_profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/admin_profile/update', [ProfileController::class, 'updateProfile'])->name('update_user');
    Route::post('/admin_profile/password', [ProfileController::class, 'updatePassword'])->name('update_password');


    //staff router
    Route::get('/parent', [StaffController::class, 'staff'])->name('gsa_staffs');
    Route::get('/create_parent', [StaffController::class, 'create_staffs'])->name('create_staff');
    Route::post('/parent', [StaffController::class, 'store'])->name('staff_registration');
    Route::delete('/parent/{id}', [StaffController::class, 'destroy'])->name('staff_delete');
    Route::get('/parent/{id}/edit', [StaffController::class, 'edit'])->name('staff_edit');
    Route::put('/parent/{id}', [StaffController::class, 'update'])->name('staff_update');


    //publications
    Route::get('/schools', [PublicationsController::class, 'publications'])->name('publications');
    Route::post('/schools', [PublicationsController::class, 'store'])->name('post_publications');
    Route::delete('/schools/{id}', [PublicationsController::class, 'destory'])->name('publications_delete');
    Route::get('/schools/{id}/edit', [PublicationsController::class, 'edit'])->name('publications_edit');
    Route::put('schools/{id}', [PublicationsController::class, 'update'])->name('publications_update');

    //client
    Route::get('/client', [ClientController::class, 'client'])->name('client');
    Route::post('/client', [ClientController::class, 'store'])->name('client_post');
    Route::delete('/client/{id}', [ClientController::class, 'destory'])->name('client_delete');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client_edit');
    Route::put('/client/{id}', [ClientController::class, 'update'])->name('client_update');


    //blog
    Route::get('/gsaafrica/blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('/gsaafrrica/create_blog', [BlogController::class, 'create_blog'])->name('create_blog');
    Route::post('/gsaafrica/blog', [BlogController::class, 'store'])->name('blog_post');
    Route::delete('/gsaafrica/blog/{id}', [BlogController::class, 'destroy'])->name('blog_delete');
    Route::put('/gsaafrica/blog_update/{id}', [BlogController::class, 'update'])->name('blog_update');
    Route::put('/gsaafrica/blog/{id}', [BlogController::class, 'IndividualBlog'])->name('IndividualBlog');


    //feedback
    Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('feedback');
    Route::delete('/feedback/{id}',[FeedbackController::class,'destory'])->name('feedback_delete');
});











