<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginActivityController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UpdatePasswordController;
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
// Admin Routes
Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.', 
    'namespace' => 'Admin', 
    'middleware' => ['auth','admin','role:Super-Admin','verified']
], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
    // Post Controller
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::resource('posts', PostController::class);
});

// User Route
Route::group([
    'prefix' => 'user', 
    'as' => 'user.', 
    'namespace' => 'User', 
    'middleware' => ['auth']
], function () {
    // Route::get('/user/home', [UserHomePageController::class, 'index'])->name('home');
    //Edit Profile
    if (file_exists(app_path('Http/Controllers/User/ProfileController.php'))) {
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile/destroy', [ProfileController::class, 'destroy'])
        ->name('profile.destroy')
        ->middleware('password.confirm');
    }
    // Setting Routes
    if (file_exists(app_path('Http/Controllers/User/SettingController.php'))) {
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    }
    // Update Password Routes
    if (file_exists(app_path('Http/Controllers/User/UpdatePasswordController.php'))) {
        Route::get('password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [UpdatePasswordController::class, 'update'])->name('password.update');
    }
});

// Delete Account
Route::group([
    'prefix' => 'user', 
    'as' => 'user.', 
    'namespace' => 'User', 
    'middleware' => ['auth','password.confirm']
], function () {
    
    if (file_exists(app_path('Http/Controllers/User/ProfileController.php'))) {
        Route::delete('profile/destroy', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
    }
});



