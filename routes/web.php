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


Route::get('/page', function () {
    if (Auth::user()->hasRole('admin')){
        return view ('admin.index');
    } else if(Auth::user()->hasRole('registered')){
        return view('user.index');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('')->middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [RegisteredUserController::class, 'store'])->name('admin.index');
    
});

Route::prefix('')->middleware(['auth', 'role:registered'])->group(function(){
    Route::any('user/upload',[UserController::class, 'upload'])->name('user.upload');
    Route::get('user/publish',[UserController::class, 'published'])->name('user.publish');
    Route::post('upload/publish',[UploadController::class, 'publish'])->name('uploads.publish');
    Route::get('user/software',[UserController::class, 'softwares'])->name('user.software');
    // Route::post('upload/software',[UploadController::class, 'software'])->name('uploads.software');
    Route::get('user/dataset',[UserController::class, 'datasets'])->name('user.dataset');
    // Route::post('upload/dataset',[UploadController::class, 'dataset'])->name('uploads.dataset');
    Route::get('user/workflow',[UserController::class, 'workflows'])->name('user.workflow');
    // Route::post('upload/webflow',[UploadController::class, 'webflow'])->name('uploads.webflow');
    Route::any('/user/upload_list',[UploadController::class, 'uploadlist'])->name('user.upload_list');
    Route::any('/upload/uploadshow/{id}',[UploadController::class, 'uploadshow'])->name('user.uploadshow');

});

// Route::get('/layouts/admin', function(){
//    return view('layouts.admin');
// });

require __DIR__.'/auth.php';
