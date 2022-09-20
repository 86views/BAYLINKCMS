<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AdminUsersController;


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
    return view('welcome');
});

Route::get('/admin', function(){
    
    return view('admin.index');
});


Route::resources([
    
     'admin/photos' => PhotoController::class,
    '/admin/users' => AdminUsersController::class,
]);






