<?php

// this listens to any db query and dumps them
// DB::listen(function ($query) { var_dump($query->sql, $query->bindings); });

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
    return view('auth.login');
});

Route::middleware('auth')->group(function() {
    Route::get('/chats', [App\Http\Controllers\ChatsController::class, 'index'])->name('home');
    Route::post('/chats', [App\Http\Controllers\ChatsController::class, 'store']);

    Route::post('/chats/{chat}/like', [App\Http\Controllers\ChatLikesController::class, 'store']);
    Route::delete('/chats/{chat}/like', [App\Http\Controllers\ChatLikesController::class, 'destroy']);
    
    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowsController::class, 'store'])->name('follow');
    
    Route::get('/profiles/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'update'])->middleware('can:edit,user');
    Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');



    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index']);
});


Auth::routes();
