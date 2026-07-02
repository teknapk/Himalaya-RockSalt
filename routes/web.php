<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
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


Route::get('/clear', function() {
    
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('clear-compiled');
    return 'DONE'; 
  });

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');



Route::get('/products', [ProductController::class, 'categorydetails'])->name('product');


Route::get('Product-Details/{id}', [ProductController::class, 'productdetails'])->name('Product-Details');
Route::get('Category-Details/{id}', [ProductController::class, 'categorydetails']);

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');


Route::get('/therapeutic', function () {
    return view('therapeutic');
})->name('therapeutic');

Route::get('/therapeutic/Naturallamps', function () {
    return view('Naturallamps');
})->name('Naturallamps');

Route::get('/therapeutic/Customizedlamps', function () {
    return view('Customizedlamps');
})->name('Customizedlamps');

Route::get('/therapeutic/miniusb', function () {
    return view('miniusb');
})->name('miniusb');

Route::get('/therapeutic/superheavylamps', function () {
    return view('superheavylamps');
})->name('superheavylamps');

Route::get('/tablesalt', function () {
    return view('tablesalt');
})->name('tablesalt');

Route::get('/tealight', function () {
    return view('tealight');
})->name('tealight');

Route::get('/kitchencook', function () {
    return view('kitchencook');
})->name('kitchencook');

Route::get('/spabath', function () {
    return view('Spabath');
})->name('spabath');

Route::get('/bodywear', function () {
    return view('bodywear');
})->name('bodywear');

Route::get('/Healthcare', function () {
    return view('Healthcare');
})->name('Healthcare');

Route::get('/animallicks', function () {
    return view('animallicks');
})->name('animallicks');

Route::get('/saltroom', function () {
    return view('saltroom');
})->name('saltroom');

// Route::get('/description', function () {
//     return view('description');
// })->name('description');

Route::get('description/{id}', [ProductController::class, 'description'])->name('description');

route::post('send-mail',[MailController::class,'mail'])->name('send-mail');