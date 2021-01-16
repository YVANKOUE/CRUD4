<?php

use App\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:management-users')->group(function(){
Route::resource('users' , 'UsersController');
});

Route::get('/admin/home', function(){     
    $users = User::all();
        return view('admin.home', [
            'users' => $users
        ]);
});
