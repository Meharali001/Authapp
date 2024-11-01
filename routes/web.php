<?php

// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
 
// Route::prefix('User')->group(function () {

//     route::get('Login',[ UserController::class, 'ViewLogin'])->name('UserViewLogin');
 
//  // show login 
 
//     route::get('Register',[ UserController::class, 'ViewRegister'])->name('UserViewRegister');
 
//  // show data
 
//     route::get('data',[ UserController::class, 'ViewData'])->name('UserViewData');
 
//  // register data
 
//     route::post('Register',[UserController::class,'CreateRegister'])->name('UserCreateRegister');
 
//  // attemtp login
 
//     route::post('Login',[ UserController::class, 'LoginMatch'])->name('UserLoginMatch');
 
//  // Route for logging out
 
//     Route::post('logout', [UserController::class, 'logout'])->name('Userlogout');
//  });



//  Route::prefix('Admin')->group(function () {
    
//    route::get('Login',[ AdminController::class, 'ViewLogin'])->name('AdminViewLogin');
   
//    route::get('Register',[ AdminController::class, 'ViewRegister'])->name('AdminViewRegister');

//    // Protect this route with the isadmin middleware
//    route::get('data',[ AdminController::class, 'ViewData'])->name('AdminViewData');
   
//    route::post('Register',[AdminController::class,'CreateRegister'])->name('AdminCreateRegister');
   
//    route::post('Login',[ AdminController::class, 'LoginMatch'])->name('AdminLoginMatch');
   
//    route::post('logout', [AdminController::class, 'logout'])->name('Adminlogout');
// });
