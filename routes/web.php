<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DatasetsController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\SoftwaresController;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkflowsController;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maklad\Permission\Traits\HasRoles;
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

    // PUBLIC UNPROTECTED ROUTES
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');



//For all my test
Route::get('/test_form', [UploadController::class, 'test']);
Route::post('/upload',[UploadController::class, 'test_upload']);
Route::post('/uploading',[UploadController::class, 'test_upload'])->name('uploader');

Route::get('/form2', function () {
    return view('form2');
});
Route::post('/form3', function (Request $request) {
    dd($request);
});
Route::get('/create-test-user-form', [ TestUserController::class , 'create_test_users']);
Route::post('/create-test-user', [ TestUserController::class , 'store_test_users']);


    // ANYTHING THAT CONSIGN AUTHETICATED ADMIN ONLY
Route::prefix('')->middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [RegisteredUserController::class, 'store'])->name('admin.index');

    Route::get('/admin-dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
});


    // ANYTHING THAT CONSIGN AUTHENTICATED REGISTERED USER
Route::prefix('')->middleware([ 'auth','role:registered user'])->group(function(){

    //New Ones Created
    //User Dashaboard
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    //User
    Route::get('user/profile', [UserController::class, 'show'])->name('user.view');
    Route::get('user/edit_profile', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/account-delete', [UserController::class, 'destroy'])->name('user.delete');

    //Search Result from landing page
    Route::get('/search-results', [UserController::class, 'search_result']);

    // UPLOAD
    Route::get('/user/uploads',[UploadController::class, 'index'])->name('user.upload-list');
    Route::get('/upload',[UploadController::class, 'create'])->name('upload.create');
    Route::get('/upload/software',[UploadController::class, 'create_software'])->name('upload.create.software');
    Route::get('/upload/publication',[UploadController::class, 'create_publication'])->name('upload.create.publication');
    Route::get('/upload/dataset',[UploadController::class, 'create_dataset'])->name('upload.create.dataset');
    Route::get('/upload/workflow',[UploadController::class, 'create_workflow'])->name('upload.create.workflow');
    Route::post('/upload-store',[UploadController::class, 'store'])->name('upload.store');
    Route::get('/uploads/{id}',[UploadController::class, 'show'])->name('user.show.single');

    //Submit comment
    Route::post('/uploads/{id}/comment', [ CommentController::class, 'store'] );
    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.show');



    //Group Setting
    Route::get('/create_group', [GroupController::class, 'create'])->name('group.create');
    Route::get('/groups', [GroupController::class, 'index'])->name('group.index');
    // Route::get('user/groups', [GroupContoller::class, 'show'])->name('group.view_group');
});








require __DIR__.'/auth.php';
