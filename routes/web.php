<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\LoginActivityController;
use App\Http\Controllers\User\UploadDataController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UpdatePasswordController;
use App\Http\Controllers\User\WarningZoneController;
use App\Models\Post;

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
    $posts = Post::latest()->get();  
    return view('welcome',compact('posts'));
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => true,
    'reset'    => true,   // for resetting passwords
    'confirm'  => true,  // for additional password confirmations
    'verify'   => true,  // for email verification
]);
// Old existing route group for administrators - we don't touch it
Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.', 
    'namespace' => 'Admin', 
    'middleware' => ['auth','admin','role:Super-Admin','verified']
], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
    Route::delete('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});


// Our NEW group - for front-end users
Route::group([
    'prefix' => 'user', 
    'as' => 'user.', 
    'namespace' => 'User', 
    'middleware' => ['auth','verified']
], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Warnign Zone 
    Route::get('warningzone', [WarningZoneController::class, 'index'])->name('warningzone.index')->middleware('password.confirm');
    Route::get('posts', [UploadDataController::class, 'index'])->name('posts.index');
    Route::post('posts', [UploadDataController::class, 'store'])->name('posts.store');
    Route::resource('posts', UploadDataController::class);
    // Setting Routes
    if (file_exists(app_path('Http/Controllers/User/SettingController.php'))) {
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    }
    // Update Password Routes
    if (file_exists(app_path('Http/Controllers/User/UpdatePasswordController.php'))) {
        Route::get('password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [UpdatePasswordController::class, 'update'])->name('password.update');
    }
    // Login Activity
    if (file_exists(app_path('Http/Controllers/User/LoginActivityController.php'))) {
        Route::get('loginactivity', [LoginActivityController::class, 'index'])->name('loginactivity.index');
    }
    // Profile Routes
    if (file_exists(app_path('Http/Controllers/User/ProfileController.php'))) {
       Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
       Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
       Route::post('profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
});
