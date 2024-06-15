<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Mail\CantactanosMailable;
use Illuminate\Support\Facades\Mail;
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
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get("contactanos", function(){
//     Mail::to("salomongomez987@gmail.com")
//     ->send(new CantactanosMailable);
//     return "Mensaje enviado";
// })->name("contactanos");

Route::post('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');





