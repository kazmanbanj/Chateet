<?php

// this listens to any db query and dumps them
// DB::listen(function ($query) { var_dump($query->sql, $query->bindings); });

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ChatLikesController;
use App\Http\Controllers\NotificationsController;

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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function() {
    Route::get('/chats', [ChatsController::class, 'index'])->name('home');
    Route::post('/chats', [ChatsController::class, 'store']);

    Route::post('/chats/{chat}/like', [ChatLikesController::class, 'store']);
    Route::delete('/chats/{chat}/like', [ChatLikesController::class, 'destroy']);
    
    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');
    
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])->middleware('can:edit,user');
    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');



    Route::get('/explore', [ExploreController::class, 'index']);


    Route::get('notifications', [NotificationsController::class, 'index']);
    Route::post('/mark-as-read', [NotificationsController::class, 'markNotification'])->name('markNotification');
    Route::get('ReadNotification/{id}',[NotificationsController::class, 'ReadNotification'])->name('ReadNotification');
});

Auth::routes();
