<?php


use Illuminate\Support\Facades\Route;
use App\Http\controllers\LoginController;
use App\Http\controllers\RegisterController;
use App\Http\controllers\DashboardController;
use App\Http\Controllers\BookController;

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
//     return view('register');
// });
Route::get('/',[RegisterController::class,'view_register'])->name('view-register');
Route::get('/login',[LoginController::class,'view_login'])->name('view-login');
Route::post('/register_process',[RegisterController::class,'register_process'])->name('register-process');
Route::post('/login_process',[LoginController::class,'login_process'])->name('login-process');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('user',[DashboardController::class,'user'])->name('user');
Route::get('employee-form',[DashboardController::class,'view_employeeform'])->name('view-employeeform');
Route::post('addemployee',[DashboardController::class,'addemployee'])->name('addemployee');
Route::get('employee-edit/{id}',[DashboardController::class,'employee_edit'])->name('employee_edit');
Route::get('delete/{id}',[DashboardController::class,'delete'])->name('delete');
Route::post('update-employee/{id}',[DashboardController::class,'update_employee'])->name('update-employee');

Route::get('list-book',[BookController::class,'list_book'])->name('list-book');
Route::get('viewform-book',[BookController::class,'viewform_book'])->name('viewform-book');
Route::post('add-book',[BookController::class,'add_book'])->name('add-book');
Route::get('delete/{id}',[BookController::class,'delete'])->name('delete');
Route::get('book-edit/{id}',[BookController::class,'book_edit'])->name('book-edit');
Route::post('update-book/{id}',[BookController::class,'update_book'])->name('update-book');

