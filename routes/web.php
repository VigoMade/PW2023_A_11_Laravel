<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\registerAdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\AuthController;
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



Route::get('/userControl', function () {
    $isi = [
        [
            'no' => '1',
            'nama' => 'dodi',
            'noInvoice' => '1231',
            'pemesanan' => 'Ticket',
            'subTotal' => '50000',
        ],
        [
            'no' => '2',
            'nama' => 'dada',
            'noInvoice' => '1232',
            'pemesanan' => 'Ticket',
            'subTotal' => '100000',

        ],
        [
            'no' => '3',
            'noInvoice' => '1233',
            'nama' => 'dedi',
            'pemesanan' => 'Ticket',
            'subTotal' => '150000',

        ],
        [
            'no' => '4',
            'noInvoice' => '1231',
            'nama' => 'dodo',
            'pemesanan' => 'Ticket',
            'subTotal' => '20000',

        ],
        [
            'no' => '5',
            'noInvoice' => '1231',
            'nama' => 'doda',
            'pemesanan' => 'Ticket',
            'subTotal' => '50000',

        ],
        [
            'no' => '6',
            'noInvoice' => '1235',
            'nama' => 'doda', // Define a default value for 'user'
            'pemesanan' => 'Ticket',
            'subTotal' => '30000',
        ],
    ];

    $perPage = 3;
    $currentPage = request()->get('page', 1);

    $chunkedData = array_chunk($isi, $perPage);
    $paginator = new LengthAwarePaginator(
        $chunkedData[$currentPage - 1],
        count($isi),
        $perPage,
        $currentPage,
        ['path' => route('userControl')]
    );

    return view('Admin/userControl', ['isi' => $paginator]);
})->name('userControl');

Route::get('/transaksi1', function () {
    return view('transaksi1');
});

Route::get('/transaksi2', function () {
    return view('transaksi2');
});
<<<<<<< HEAD
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/profile', function () {
    return view('Costumer/profile');
});


Route::get('/form', function () {
    return view('Admin/formDaftarFilm');
});
=======

//login

Route::get('login', [AuthController::class, 'index'])->name('login_view');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('throttle:2,1');

Route::get('register', [AuthController::class, 'register_view'])->name('register_view');
Route::post('register', [AuthController::class, 'register'])->name('register')->middleware('throttle:2,1');



Route::get('home', [AuthController::class, 'home'])->name('home');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/profile', function () {
    return view('Costumer/profile');
});
>>>>>>> 4d48d9c26d185bbe1eeaaa773e82a26c08aafdbf





<<<<<<< HEAD
    $chunkedData = array_chunk($isi, $perPage);
    $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
        $chunkedData[$currentPage - 1],
        count($isi),
        $perPage,
        $currentPage,
        ['path' => route('daftar')]
    );

    return view('Admin.daftarFilm', ['isi' => $paginator]);
})->name('daftar');
=======
Route::resource('/Admin', MovieController::class);
>>>>>>> 4d48d9c26d185bbe1eeaaa773e82a26c08aafdbf
