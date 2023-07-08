<?php

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
})->name('welcome');

// Route::get('/test', function () {
//     return view('welcome');
// });

// Route::get('/newbooking', [
//     App\Http\Controllers\User\BookingController::class, 'index'
// ]);

// Route::post('/newbooking/submit', [
//     App\Http\Controllers\User\BookingController::class, 'submit'
// ]);

// grouping the above routes
Route::group(['prefix' => '/app','as'=>'app.','middleware'=>['auth']], function(){

    // user dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

    // user history


    // user profile

    

    // Route::get('/', [
    //     App\Http\Controllers\User\BookingController::class, 'dashboard'
    // ])->name('dashboard');

    Route::group(['prefix' => '/admin','as'=>'admin.','middleware'=>[]], function(){

        Route::get('/dashboard', [
            App\Http\Controllers\Admin\DashboardController::class, 'dashboard'
        ])->name('dashboard');

        /*
        Route::get('/'); // list all users
        Route::get('/{user}'); // view specific users
        Route::get('/{user}/edit'); // edit user
        Route::post('/{user}/edit'); // submit edit user
        Route::get('/{user}/delete'); // delete user
        */

        // simplify above to resource

        Route::resource('user','App\Http\Controllers\Admin\UserController');



        // Route::get('/', [
        //     App\Http\Controllers\User\BookingController::class, 'index'
        // ])->name('index');

        // Route::get('/submit', [
        //     App\Http\Controllers\User\BookingController::class, 'submit'
        // ])->name('submit');
        
        // Route::get('/view', [
        //     App\Http\Controllers\User\BookingController::class, 'submit'
        // ])->name('view');

    });

});

Auth::routes();


