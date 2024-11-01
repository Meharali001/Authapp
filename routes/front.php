<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('front.index')->middleware('auth');
// });


Route::get('/', [FrontController::class, 'index'])->name('index')->middleware('auth');
Route::prefix('front')->group(function () {


Route::get('/about-us', [FrontController::class, 'aboutus'])->name('aboutus')->middleware('auth');
Route::get('/main', [FrontController::class, 'main'])->name('main')->middleware('auth');
Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('testimonials')->middleware('auth');
Route::get('/ContectUs', [FrontController::class, 'ContectUs'])->name('ContectUs')->middleware('auth');
Route::get('/services', [FrontController::class, 'services'])->name('services')->middleware('auth');




Route::prefix('auth')->group(function () {
    Route::get('/Login', [UserController::class, 'ViewLogin'])->name('UserViewLogin')->middleware('guest');
    Route::get('/Register', [UserController::class, 'ViewRegister'])->name('UserViewRegister')->middleware('guest');
    Route::get('/data', [UserController::class, 'ViewData'])->name('UserViewData')->middleware('auth');
    Route::post('/Register', [UserController::class, 'CreateRegister'])->name('UserCreateRegister');
    Route::post('/Login', [UserController::class, 'LoginMatch'])->name('UserLoginMatch');
    Route::post('/logout', [UserController::class, 'logout'])->name('Userlogout')->middleware('auth');
    Route::post('/forgetpassword', [UserController::class, 'forgetpassword'])->name('forgetpassword');
});
});




//  Route::prefix('Admin')->group(function () {
    
//    route::get('Login',[ AdminController::class, 'ViewLogin'])->name('AdminViewLogin');
   
//    route::get('Register',[ AdminController::class, 'ViewRegister'])->name('AdminViewRegister');

//    // Protect this route with the isadmin middleware
//    route::get('data',[ AdminController::class, 'ViewData'])->name('AdminViewData');
   
//    route::post('Register',[AdminController::class,'CreateRegister'])->name('AdminCreateRegister');
   
//    route::post('Login',[ AdminController::class, 'LoginMatch'])->name('AdminLoginMatch');
   
//    route::post('logout', [AdminController::class, 'logout'])->name('Adminlogout');
// });
