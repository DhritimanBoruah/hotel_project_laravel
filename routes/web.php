<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
    return view('home.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// AdminController
Route::get('/', [AdminController::class, 'home']);



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index']);
    Route::get('/create_room', [AdminController::class, 'create_room']);
    Route::post('/add_room', [AdminController::class, 'add_room']);
    Route::get('/view_room', [AdminController::class, 'view_room']);
    Route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);
    Route::get('/room_update/{id}', [AdminController::class, 'room_update']);
    Route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);
    Route::get('/bookings', [AdminController::class, 'bookings']);
    Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking']);
    Route::get('/approve_status/{id}', [AdminController::class, 'approve_status']);
    Route::get('/reject_status/{id}', [AdminController::class, 'reject_status']);
    Route::get('/add_gallery', [AdminController::class, 'add_gallery']);
    Route::post('/upload_image', [AdminController::class, 'upload_image']);
    Route::get('/delete__gal_img/{id}', [AdminController::class, 'delete__gal_img']);
    Route::get('/all_messages', [AdminController::class, 'all_messages']);
    Route::get('/send_mail/{id}', [AdminController::class, 'send_mail']);
    Route::post('/mail/{id}', [AdminController::class, 'mail']);
});



// HomeController

route::get('/room_details/{id}',[HomeController::class,'room_details']);
route::get('/about',[HomeController::class,'about']);
route::get('/room_page',[HomeController::class,'room_page']);
route::get('/gallery_page',[HomeController::class,'gallery_page']);
route::get('/contact_page',[HomeController::class,'contact_page']);
route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
route::post('/message',[HomeController::class,'message']);



