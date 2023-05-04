<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/search', [SearchController::class, 'search']);
Route::get('/user', [UserController::class, 'show']);
// Route::get('/login', [AuthController::class, 'showLoginForm']);
// Route::post('/login', [AuthController::class, 'login']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post_id}', [PostController::class, 'show']);
Route::get('/posts/{post_id}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post_id}', [PostController::class, 'update']);
Route::delete('/posts/{post_id}', [PostController::class, 'destroy']);

Route::get('/groups', [GroupController::class, 'index']);
Route::get('/groups/create', [GroupController::class, 'create']);
Route::post('/groups', [GroupController::class, 'store']);
Route::get('/groups/{group_id}', [GroupController::class, 'show']);
Route::get('/groups/{group_id}/edit', [GroupController::class, 'edit']);
Route::put('/groups/{group_id}', [GroupController::class, 'update']);
Route::delete('/groups/{group_id}', [GroupController::class, 'destroy']);

Route::get('/mypage', [UserController::class, 'mypage']);

require __DIR__.'/auth.php';
