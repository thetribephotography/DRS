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
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

//EMAIL VERFICATION
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{_id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/page');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');





// LOGIN/AUTH
Route::get('/page', function () {
    if (Auth::user()->hasRole('admin')){
        return view ('admin.index');
    } else if(Auth::user()->hasRole('registered')){
        return view('user.index');
    } else {
        return view ('auth.login');
    }
}); 

    // PUBLIC / UNPROTECTED ROUTES
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');

//Search Result from landing page
    Route::get('/search-results', [UserController::class, 'search_result']);


// ADMIN ROUTES
Route::prefix('')->middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [RegisteredUserController::class, 'store'])->name('admin.index');
    
});


// USER ROUTES
Route::prefix('')->middleware(['auth', 'role:registered', 'verified'])->group(function(){
    //  User
    Route::get('/page', [UserController::class, 'index'])->name('user.index');
    Route::get('user/profile', [UserController::class, 'show'])->name('user.view-profile');
    Route::get('user/edit_profile', [UserController::class, 'edit'])->name('user.edit-profile');
    Route::post('account-delete', [UserController::class, 'destroy'])->name('user.delete-account');
    


    //  UPLOAD
    Route::any('user/upload',[UploadController::class, 'upload'])->name('user.upload');
    Route::get('user/publish',[UploadController::class, 'published'])->name('user.publish');
    Route::post('upload/publish',[UploadController::class, 'publish'])->name('uploads.publish');
    Route::get('user/software',[UploadController::class, 'softwares'])->name('user.software');
    // Route::post('upload/software',[UploadController::class, 'software'])->name('uploads.software');
    Route::get('user/dataset',[UploadController::class, 'datasets'])->name('user.dataset');
    // Route::post('upload/dataset',[UploadController::class, 'dataset'])->name('uploads.dataset');
    Route::get('user/workflow',[UploadController::class, 'workflows'])->name('user.workflow');
    // Route::post('upload/webflow',[UploadController::class, 'webflow'])->name('uploads.webflow');
    Route::any('/upload/upload_list',[UploadController::class, 'uploadlist'])->name('upload.upload_list');
    Route::any('/upload/uploadshow/{_id}',[UploadController::class, 'uploadshow'])->name('upload.upload_show');
    Route::any('/upload/show_one/{_id}',[UploadController::class, 'uploadshow'])->name('upload.show_one');
    // Route::get('user/create_group',[UserController::class, 'create_group'])->name('group.create');


    //  Group
    Route::get('group/create', [GroupController::class, 'create_group'])->name('user.create_group');
    Route::post('group/create', [GroupController::class, 'create'])->name('group.create');
    Route::get('group/show', [GroupController::class, 'show'])->name('group.show_all');
    Route::get('group/show_one/{_id}', [GroupController::class, 'show_one'])->name('group.show_one');
    Route::post('group/leave/{_id}', [GroupController::class, 'leave'])->name('group.leave');

    //Comments
    Route::post('/uploads/{id}/comment', [ CommentController::class, 'store'])->name('upload.comment');
    Route::post('/uploads/delete{_id}', [ CommentController::class, 'destroy'])->name('comment.delete');

    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.show');



    //Group Setting
    Route::get('/create_group', [GroupController::class, 'create'])->name('group.create');
    Route::get('/groups', [GroupController::class, 'index'])->name('group.index');
    // Route::get('user/groups', [GroupContoller::class, 'show'])->name('group.view_group');

});

    // Route::get('user/groups', [GroupContoller::class, 'show'])->name('group.view_group');



require __DIR__.'/auth.php';
