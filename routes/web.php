<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', [UserController::class, 'index']);

Route::get('/session/create', [SessionController::class, 'create']);

Route::get('/session/show', [SessionController::class, 'show']);

Route::get('/session/delete', [SessionController::class, 'delete']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return 'hallo word';
// });

// Route::get('user/{id}', function ($id) {
//     return 'user '.$id;
// });

// Route::get('posts/{post}/comment/{comment}', function ($postId, $comment) {
//     return 'posts '.$postId.' '.'comment '.$comment;
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/users', function () {
//     return 'tampilan pertama';
// });

// Route::any('/any', function () {
//     return 'tampilan kedua';
// });

// Route::get('/there', function () {
//     return 'berikut tampilan "there"!';
// });

// Route::redirect('/here', '/there');

// Route::redirect('/here', '/there', 301);

// Route::permanentRedirect('/here', '/there');

// Route::view('/welcome1', 'welcome');

// Route::view('/welcome2', 'view', ['name' => 'Kak Adit']);

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'john') {
//     return $name;
// });

// Route::get('pengguna/{name}', function ($name) {
//     return "Hello, $name!";
// })->where('name', '[A-Za-z]+');

// Route::get('pengguna/{id}', function ($id) {
//     return "User ID: $id";
// })->where('id', '[0-9]+');

// Route::get('pengguna/{id}/{name}', function ($id, $name) {
//     return "ID pengguna: $id, Nama: $name";
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// Route::get('userss/{id}', function ($id) {
//     return "Id user : $id";
// });

// Route::get('search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');

// Route::get('user/profile', function(){

// })->name('profile');

// Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');

// $url = route('profile');

// return redirect()->route('profile');

// Route::get('user/{id}/profile', function($id){

// })->name('profile');

// $url = route('profile', ['id' => 1]);

// Route::middleware(['first', 'second'])->group(function() {
//     Route::get('/', function() {

//     });
 
//     Route::get('user/profile', function(){

//     });
// });

// Route::namespace('Admin')->group(function(){
//     //
// });

// Route::domain('{account}.myapp.com')->group(function() {
//     Route::get('user/{id}', function($account, $id) {

//     });
// });

// Route::prefix('admin')->group(function() {
//     route::get('users', function() {

//     });
// });

// Route::prefix('admin')->group(function() {
//     route::get('users', function() {

//     })->name('users');
// });

