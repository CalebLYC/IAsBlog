<?php

use App\Http\Controllers\CitationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MyContentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Citation;
use App\Models\History;
use App\Models\Post;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/developper', function () {
    return view('developper');
})->middleware('auth');

Route::get('/myContents', [MyContentsController::class, 'index'])->name('myContents')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resources([
    'posts' => PostController::class,
    'histories' => HistoryController::class,
    'citations' => CitationController::class,
]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/posts/like/', [Post::class, "like"]);
Route::post('/posts/dislike/', [Post::class, "dislike"]);
Route::post('/histories/like/', [History::class, "like"]);
Route::post('/histories/dislike/', [History::class, "dislike"]);
Route::post('/citations/like/', [Citation::class, "like"]);
Route::post('/citations/dislike/', [Citation::class, "dislike"]);


require __DIR__.'/auth.php';
