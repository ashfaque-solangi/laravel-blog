<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceProviderController;

//Own Directory and Class
Use App\Service\Random\RandomCode;

//Use Own directory in Controller
use App\Http\Controllers\OwnNamespaceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [GeneralController::class, 'home'])->name('home');
// Route::get('/viewBlog', [GeneralController::class, 'viewBlog'])->name('viewBlog');
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::resource('post', PostController::class);

Route::get("/custom-service-provider", [ServiceProviderController::class, 'customServiceProvider']);

Route::get("/random-code", function(){
    // return "random-code";
    $random = new RandomCode;
    return $random->randomCodeUsage();
});

Route::get('random-code-controller', [OwnNamespaceController::class, 'ownNamespaceMethod']);


