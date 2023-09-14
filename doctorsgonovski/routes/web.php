<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('main.index');


//Route::get('/index', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');;
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/blog-details', [BlogDetailsController::class, 'index'])->name('blog-details.index');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');

Route::get('blog-details/detail_1', [BlogDetailsController::class, 'showDetail1'])->name('detail_1');
Route::get('blog-details/detail_2', [BlogDetailsController::class, 'showDetail2'])->name('detail_2');
Route::get('blog-details/detail_3', [BlogDetailsController::class, 'showDetail3'])->name('detail_3');
Route::get('blog-details/detail_4', [BlogDetailsController::class, 'showDetail4'])->name('detail_4');


