<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Auth\RegisteredUserController;
// use Spatie\Permission\Traits\HasRoles;
use Maklad\Permission\Traits\HasRoles;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;

// use PHPUnit\TextUI\XmlConfiguration\GroupCollection;


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

    // PUBLIC / UNPROTECTED ROUTES
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');



Route::get('/page', function () {
    if (Auth::user()->hasRole('admin')){
        return view ('admin.index');
    } else if(Auth::user()->hasRole('registered')){
        return view('user.index');
    } else {
        return view ('auth.login');
    }
});

Route::prefix('')->middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [RegisteredUserController::class, 'store'])->name('admin.index');
    
});

Route::prefix('')->middleware(['auth', 'role:registered'])->group(function(){
    Route::get('/page', [UserController::class, 'index'])->name('user.index');
    Route::any('user/upload',[UploadController::class, 'upload'])->name('user.upload');
    Route::get('user/publish',[UploadController::class, 'published'])->name('user.publish');
    Route::post('upload/publish',[UploadController::class, 'publish'])->name('uploads.publish');
    Route::get('user/software',[UploadController::class, 'softwares'])->name('user.software');
    // Route::post('upload/software',[UploadController::class, 'software'])->name('uploads.software');
    Route::get('user/dataset',[UploadController::class, 'datasets'])->name('user.dataset');
    // Route::post('upload/dataset',[UploadController::class, 'dataset'])->name('uploads.dataset');
    Route::get('user/workflow',[UploadController::class, 'workflows'])->name('user.workflow');
    // Route::post('upload/webflow',[UploadController::class, 'webflow'])->name('uploads.webflow');
    Route::any('/user/upload_list',[UploadController::class, 'uploadlist'])->name('user.upload_list');
    Route::any('/upload/uploadshow/{id}',[UploadController::class, 'uploadshow'])->name('user.uploadshow');
    // Route::get('user/create_group',[UserController::class, 'create_group'])->name('group.create');

});

// Route::get('/layouts/admin', function(){
//    return view('layouts.admin');
// });


 //New Ones Created
    //User
    Route::get('user/profile', [UserController::class, 'show'])->name('user.view-profile');
    Route::get('user/edit_profile', [UserController::class, 'edit'])->name('user.edit-profile');
    Route::post('account-delete', [UserController::class, 'destroy'])->name('user.delete-account');

    // //Upload
    // Route::post('upload/publish',[UploadController::class, 'publish'])->name('uploads.publish');
    // Route::any('/user/upload_list',[UploadController::class, 'uploadlist'])->name('user.upload_list');
    // Route::any('/upload/uploadshow/{id}',[UploadController::class, 'uploadshow'])->name('user.uploadshow');
    // Route::get('user/create_group',[UserController::class, 'create_group'])->name('user.create_group');


    //Group
    Route::get('group/create', [GroupController::class, 'create_group'])->name('user.create_group');
    Route::post('group/create', [GroupController::class, 'create'])->name('group.create');
    // Route::get('user/groups', [GroupContoller::class, 'show'])->name('group.view_group');



require __DIR__.'/auth.php';
