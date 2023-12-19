<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerAdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\managemenUserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\tampilFilmController;

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

Route::get('/homePage', function () {
    return view('homePage');
});

Route::get('/seatBioskop', function () {
    return view('seatBioskop');
});

Route::get('/', function () {
    return view('homePage');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('/Costumer', tampilFilmController::class);

//profile
Route::resource('/CostumerProfile', ProfileController::class);

Route::get('/admin', function () {
    $isi = [
        [
            'no' => '1',
            'noInvoice' => '1231',
            'pemesanan' => 'Ticket',
            'subTotal' => '50000',
            'status' => 'Selesai'
        ],
        [
            'no' => '2',
            'noInvoice' => '1232',
            'pemesanan' => 'Ticket',
            'subTotal' => '100000',
            'status' => 'Proses'
        ],
        [
            'no' => '3',
            'noInvoice' => '1233',
            'pemesanan' => 'Ticket',
            'subTotal' => '150000',
            'status' => 'Proses'
        ],
        [
            'no' => '4',
            'noInvoice' => '1231',
            'pemesanan' => 'Ticket',
            'subTotal' => '20000',
            'status' => 'Selesai'
        ],
        [
            'no' => '5',
            'noInvoice' => '1231',
            'pemesanan' => 'Ticket',
            'subTotal' => '50000',
            'status' => 'Proses'
        ]
    ];

    $perPage = 3;
    $currentPage = request()->get('page', 1);

    $chunkedData = array_chunk($isi, $perPage);
    $paginator = new LengthAwarePaginator(
        $chunkedData[$currentPage - 1],
        count($isi),
        $perPage,
        $currentPage,
        ['path' => route('admin')]
    );

    return view('Admin/indexPageAdmin', ['isi' => $paginator]);
})->name('admin');

//loginAdmin
Route::get('/loginAdmin', [LoginAdminController::class, 'login'])->name('loginAdmin');
Route::post('/actionLogin', [LoginAdminController::class, 'actionLogin'])->name('actionLogin');

//registerAdmin
Route::get('/registerAdmin', [registerAdminController::class, 'register'])->name('registerAdmin');
Route::post('/register/action', [registerAdminController::class, 'actionRegister'])->name('actionRegister');
Route::get('/register/verify/{verify_key}', [registerAdminController::class, 'verify'])->name('verify');

//logoutAdmin
Route::get('/logoutAdmin', [LoginAdminController::class, 'actionLogout'])->name('logoutAdmin');

//userControl
Route::resource('/UserControl', managemenUserController::class);

Route::get('/transaksi1', function () {
    return view('transaksi1');
});

Route::get('/transaksi2', function () {
    return view('transaksi2');
});

//login

Route::get('login', [AuthController::class, 'index'])->name('login_view');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('throttle:2,1');

Route::get('register', [AuthController::class, 'register_view'])->name('register_view');
Route::post('register', [AuthController::class, 'register'])->name('register')->middleware('throttle:2,1');


Route::get('home', [AuthController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




//movie
Route::resource('/Admin', MovieController::class);
Route::get('/transaksi1/{movie}', [MovieController::class, 'show_transaksi'])->name('show_transaksi');
