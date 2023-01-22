<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\GroupContoller;
// use Spatie\Permission\Traits\HasRoles;
use Maklad\Permission\Traits\HasRoles;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use PHPUnit\TextUI\XmlConfiguration\GroupCollection;

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

// Pubic Routes
Route::get('/', function () {
    return view('layout');
});





// Protected Routes
Route::get('/page', function () {
    return view('user.index');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('')->middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [RegisteredUserController::class, 'store'])->name('admin.index');

});

Route::prefix('')->middleware(['auth', 'role:registered'])->group(function(){
    Route::any('user/upload',[UserController::class, 'upload'])->name('user.upload');
    Route::get('user/publish',[UserController::class, 'published'])->name('user.publish');

    Route::get('user/software',[UserController::class, 'softwares'])->name('user.software');
    // Route::post('upload/software',[UploadController::class, 'software'])->name('uploads.software');
    Route::get('user/dataset',[UserController::class, 'datasets'])->name('user.dataset');
    // Route::post('upload/dataset',[UploadController::class, 'dataset'])->name('uploads.dataset');
    Route::get('user/workflow',[UserController::class, 'workflows'])->name('user.workflow');
    // Route::post('upload/webflow',[UploadController::class, 'webflow'])->name('uploads.webflow');


    //New Ones Created
    //User
    Route::get('user/profile', [UserController::class, 'show'])->name('user-view-profile');
    Route::get('user/edit_profile', [UserController::class, 'edit'])->name('user-edit-profile');
    Route::get('account-delete/', [UserController::class, 'destroy'])->name('user-delete-account');

    //Upload
    Route::post('upload/publish',[UploadController::class, 'publish'])->name('uploads.publish');
    Route::any('/user/upload_list',[UploadController::class, 'uploadlist'])->name('user.upload_list');
    Route::any('/upload/uploadshow/{id}',[UploadController::class, 'uploadshow'])->name('user.uploadshow');


    //Group
    Route::get('user/create_group', [GroupContoller::class, 'create'])->name('group.create-group');
    Route::get('user/groups', [GroupContoller::class, 'index'])->name('group.view-group');

});

// Route::get('/layouts/admin', function(){
//    return view('layouts.admin');
// });

require __DIR__.'/auth.php';
