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

Route::get('/services', [SiteController::class, 'service'])->name('services');
Route::get('/taxes',[SiteController::class,'taxes'])->name('taxes');
Route::get('/advisory',[SiteController::class,'advisory'])->name('advisory');
Route::get('/auditor',[SiteController::class,'auditor'])->name('auditor');
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
    Route::get('/gsa_staffs', [StaffController::class, 'staff'])->name('gsa_staffs');
    Route::get('/create_staffs', [StaffController::class, 'create_staffs'])->name('create_staff');
    Route::post('/gsa_staffs', [StaffController::class, 'store'])->name('staff_registration');
    Route::delete('/gsa_staffs/{id}', [StaffController::class, 'destroy'])->name('staff_delete');
    Route::get('/gsa_staffs/{id}/edit', [StaffController::class, 'edit'])->name('staff_edit');
    Route::put('gsa_staffs/{id}', [StaffController::class, 'update'])->name('staff_update');


    //publications
    Route::get('/publications', [PublicationsController::class, 'publications'])->name('publications');
    Route::post('/publications', [PublicationsController::class, 'store'])->name('post_publications');
    Route::delete('/publications/{id}', [PublicationsController::class, 'destory'])->name('publications_delete');
    Route::get('/publications/{id}/edit', [PublicationsController::class, 'edit'])->name('publications_edit');
    Route::put('publications/{id}', [PublicationsController::class, 'update'])->name('publications_update');

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
});










//Users middleware
Route::middleware(['auth', 'isUser'])->group(function () {
    //Dashboard
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    //Personal Details
    Route::get('/personaldetails', [PersonalDetailsController::class, 'index'])->name('personaldetails');
    Route::post('/personaldetails/add_personaldetails', [PersonalDetailsController::class, 'store'])->name('add_personaldetails');
    Route::get('/personaldetails/delete_personaldetails/{id}', [PersonalDetailsController::class, 'destroy'])->name('delete_personaldetails');
    Route::put('/personaldetails/update_personaldetails/{id}', [PersonalDetailsController::class, 'update'])->name('update_personaldetails');


    //profile
    Route::get('/userProfile', [PersonalDetailsController::class, 'userProfile'])->name('user_profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update_password');

    //Academic Qualifications
    Route::get('/academicqualifications', [AcademicQualificationController::class, 'index'])->name('academicqualifications');
    Route::get('/academicqualifications/add_academicqualifications', [AcademicQualificationController::class, 'create'])->name('add_academicqualifications');
    Route::post('/academicqualifications/store_academicqualifications', [AcademicQualificationController::class, 'store'])->name('store_academicqualifications');
    Route::get('/academicqualifications/delete_academicqualifications/{id}', [AcademicQualificationController::class, 'destroy'])->name('delete_academicqualifications');
    Route::put('/academicqualifications/update_academicqualifications/{id}', [AcademicQualificationController::class, 'update'])->name('update_academicqualifications');
    //Route::get('dropdown', [AcademicQualificationDropdownController::class, 'index']);
    Route::post('/fetcheducationcategory', [AcademicQualificationController::class, 'fetch_education_category']);
    Route::post('/fetcheducationname', [AcademicQualificationController::class, 'fetch_education_name']);

    //Computer Literancy
    Route::get('/computerliterancy', [ComputerLiterancyController::class, 'index'])->name('computerliterancy');
    Route::post('/computerliterancy/add_computerliterancy', [ComputerLiterancyController::class, 'store'])->name('add_computerliterancy');
    Route::get('/computerliterancy/delete_computerliterancy/{id}', [ComputerLiterancyController::class, 'destroy'])->name('delete_computerliterancy');
    Route::put('/computerliterancy/update_computerliterancy/{id}', [ComputerLiterancyController::class, 'update'])->name('update_computerliterancy');

    //Language Proficiency
    Route::get('/languageproficiency', [LanguageProficiencyController::class, 'index'])->name('languageproficiency');
    Route::post('/languageproficiency/add_languageproficiency', [LanguageProficiencyController::class, 'store'])->name('add_languageproficiency');
    Route::get('/languageproficiency/delete_languageproficiency/{id}', [LanguageProficiencyController::class, 'destroy'])->name('delete_languageproficiency');
    Route::put('/languageproficiency/update_languageproficiency/{id}', [LanguageProficiencyController::class, 'update'])->name('update_languageproficiency');

    //Online Course
    Route::get('/onlinecourse', [OnlineCourseController::class, 'index'])->name('onlinecourse');
    Route::post('/onlinecourse/add_onlinecourse', [OnlineCourseController::class, 'store'])->name('add_onlinecourse');
    Route::get('/onlinecourse/delete_onlinecourse/{id}', [OnlineCourseController::class, 'destroy'])->name('delete_onlinecourse');
    Route::put('/onlinecourse/update_onlinecourse/{id}', [OnlineCourseController::class, 'update'])->name('update_onlinecourse');

    //Other Attachiments
    Route::get('/otherattachiment', [OtherAttachimentController::class, 'index'])->name('otherattachiment');
    Route::post('/otherattachiment/add_otherattachiment', [OtherAttachimentController::class, 'store'])->name('add_otherattachiment');
    Route::get('/otherattachiment/delete_otherattachiment/{id}', [OtherAttachimentController::class, 'destroy'])->name('delete_otherattachiment');
    Route::put('/otherattachiment/update_otherattachiment/{id}', [OtherAttachimentController::class, 'update'])->name('update_otherattachiment');

    //Professional Qualification
    Route::get('/professionalqualification', [ProfessionalQualificationController::class, 'index'])->name('professionalqualification');
    Route::post('/professionalqualification/add_professionalqualification', [ProfessionalQualificationController::class, 'store'])->name('add_professionalqualification');
    Route::get('/professionalqualification/delete_professionalqualification/{id}', [ProfessionalQualificationController::class, 'destroy'])->name('delete_professionalqualification');
    Route::put('/professionalqualification/update_professionalqualification/{id}', [ProfessionalQualificationController::class, 'update'])->name('update_professionalqualification');

    //Referees
    Route::get('/referees', [RefereesController::class, 'index'])->name('referees');
    Route::post('/referees/add_referees', [RefereesController::class, 'store'])->name('add_referees');
    Route::get('/referees/delete_referees/{id}', [RefereesController::class, 'destroy'])->name('delete_referees');
    Route::put('/referees/update_referees/{id}', [RefereesController::class, 'update'])->name('update_referees');

    //Training And Workshop
    Route::get('/trainingandworkshop', [TrainingAndWorkshopController::class, 'index'])->name('trainingandworkshop');
    Route::post('/trainingandworkshop/add_trainingandworkshop', [TrainingAndWorkshopController::class, 'store'])->name('add_trainingandworkshop');
    Route::get('/trainingandworkshop/delete_trainingandworkshop/{id}', [TrainingAndWorkshopController::class, 'destroy'])->name('delete_trainingandworkshop');
    Route::put('/trainingandworkshop/update_trainingandworkshop/{id}', [TrainingAndWorkshopController::class, 'update'])->name('update_trainingandworkshop');

    //Working Experiences
    Route::get('/workingexperience', [WorkingExperienceController::class, 'index'])->name('workingexperience');
    Route::post('/workingexperience/add_workingexperience', [WorkingExperienceController::class, 'store'])->name('add_workingexperience');
    Route::get('/workingexperience/delete_workingexperience/{id}', [WorkingExperienceController::class, 'destroy'])->name('delete_workingexperience');
    Route::put('/workingexperience/update_workingexperience/{id}', [WorkingExperienceController::class, 'update'])->name('update_workingexperience');
});
