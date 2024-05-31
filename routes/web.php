<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;

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

Route::get('index', [FrontendController::class,'index']);

Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/postregister',[UserController::class,'postregister']);

Route::get('/login',[UserController::class,'beranda'])->name('login');
Route::post('/postlogin',[UserController::class,'postlogin']);

Route::get('about', [FrontendController::class,'about']);
Route::get('event', [FrontendController::class,'event']);
Route::get('schedule', [FrontendController::class,'schedule']);
Route::get('gallery', [FrontendController::class,'gallery']);
Route::get('pricing_plan', [FrontendController::class,'pricing_plan']);
Route::get('faqs', [FrontendController::class,'faqs']);
Route::get('sponsors', [FrontendController::class,'sponsors']);
Route::get('contact', [FrontendController::class,'contact']);
Route::get('order', [FrontendController::class,'order']);


// Route::get('index1', [UserController::class,'index1']);
// Route::get('about1', [UserController::class,'about1']);
// Route::get('event1', [UserController::class,'event1']);
// Route::get('schedule1', [UserController::class,'schedule1']);
// Route::get('gallery1', [UserController::class,'gallery1']);
// Route::get('pricing_plan1', [UserController::class,'pricing_plan1']);
// Route::get('faqs1', [UserController::class,'faqs1']);
// Route::get('sponsors1', [UserController::class,'sponsors1']);
// Route::get('contact1', [UserController::class,'contact1']);

Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/postlogin', [UserController::class,'postlogin'])->name('postlogin');

Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/postregister', [UserController::class,'postregister'])->name('postregister');


// Route::get('ticket', [TicketController::class,'ticket'])->name('ticket');
// Route::post('ticket/{id}/update',[TicketController::class,'update']);


// Route::get('createticket', [TicketController::class,'createticket']);
// Route::post('postcreateticket', [TicketController::class,'postcreateticket'])->name('postcreateticket');


