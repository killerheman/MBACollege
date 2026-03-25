<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AqarController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

//About Us
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('visionMission');
Route::get('/principal-message', [HomeController::class, 'principalMessage'])->name('principalMessage');
Route::get('/succession-list-principals', [HomeController::class, 'successionPrincipals'])->name('successionPrincipals');
Route::get('/succession-list-heads', [HomeController::class, 'successionHeads'])->name('successionHeads');

//Administration
Route::get('/administrative-functionaries', [HomeController::class, 'administrativeFunctionaries'])->name('administrativeFunctionaries');
Route::get('/office-staff-non-teaching', [HomeController::class, 'nonTeaching'])->name('nonTeaching');

//Academic Programmes
Route::get('/courses-offered', [HomeController::class, 'coursesOffered'])->name('coursesOffered');

//Research
Route::get('/research', [HomeController::class, 'research'])->name('research');

//Scholarships
Route::get('/scholarships', [HomeController::class, 'scholarships'])->name('scholarships');

//Amenities
Route::get('/infrastructure', [HomeController::class, 'infrastructure'])->name('infrastructure');
Route::get('/ro-water', [HomeController::class, 'roWater'])->name('roWater');
Route::get('/24x7-survelliance', [HomeController::class, 'survelliance'])->name('survelliance');
Route::get('/computer-labs', [HomeController::class, 'computerLabs'])->name('computerLabs');
Route::get('/hostels', [HomeController::class, 'hostels'])->name('hostels');
Route::get('/library', [HomeController::class, 'library'])->name('library');
Route::get('/physical-education', [HomeController::class, 'physicalEducation'])->name('physicalEducation');

//Examination
Route::get('/examinations', [HomeController::class, 'examinations'])->name('examinations');

//Alumni
Route::get('/alumni', [HomeController::class, 'alumni'])->name('alumni');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');











// Backend Routes
Route::get('/admin', [LoginController::class, 'index'])->name('admin');
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('/user', UserController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/permission', PermissionController::class);
    Route::get('/role-has-permission', [PermissionController::class, 'rolePermission'])->name('rolePermission');
    Route::post('/fetch-permission', [PermissionController::class, 'fetchPermission'])->name('fetchPermission');
    Route::post('/assign-permission', [PermissionController::class, 'assignPermission'])->name('assignPermission');
    Route::resource('/notice', NoticeController::class);
    Route::resource('/event', EventController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/aqar', AqarController::class);
    Route::resource('/criteria', CriteriaController::class);
    Route::resource('/banner', BannerController::class);
});



Route::get('/optimize', function () {
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
});
