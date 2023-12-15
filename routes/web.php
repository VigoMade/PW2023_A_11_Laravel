<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\registerAdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\AuthController;
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

Route::get('/dashboard', function () {
    return view('/Costumer/dashboard', [
        'movie' => [
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169414845830977_290x426.jpg',
                'judul' => 'SAW X',
                'sinopsis' => 'Mengejar sebuah pengobatan yang menjanjikan 
                dapat menyembuhkan kankernya, John Kramer (Tobin Bell) 
                menuju ke Meksiko untuk menjalani perawatan eksperimental, 
                hanya untuk mengetahui bahwa dia menjadi mangsa dari sebuah penipuan.
                Kini, para scammer menjadi mangsa di permainan baru milik Jigsaw.'
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169442926668402_287x421.jpg',
                'judul' => 'To Catch A Killer',
                'sinopsis' => 'Eleanor (Shailene Woodley) adalah sosok petugas polisi yang berbakat namun sering bermasalah.
                Kemampuannya ini membuat ia direkrut oleh kepala penyelidik FBI, Lammark (Ben Mendelsohn) untuk
                membantunya mengungkap sosok misterius yang meneror kota.'
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169417258680382_290x426.jpg',
                'judul' => 'It Lives Inside',
                'sinopsis' => 'Seorang remaja India-Amerika yang berjuang untuk identitas budayanya berselisih dengan sahabatnya. Dalam prosesnya, 
                tanpa disadari ia malah melepaskan entitas iblis kuno yang kuat yang mengancam dirinya dan orang-orang disekitarnya.'
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/16952093955719_290x426.jpg',
                'judul' => 'Killers Of Flower Moon',
                'sinopsis' => 'Pada pergantian abad ke-20, minyak membawa kekayaan bagi Bangsa Osage, 
                yang dalam sekejap menjadi salah satu orang terkaya di dunia. Kekayaan penduduk asli Amerika ini menarik perhatian para penyelundup kulit putih,
                 yang memanipulasi, memeras, dan mencuri uang Osage sebanyak yang mereka bisa sebelum melakukan pembunuhan.'
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169450343162224_287x421.jpg',
                'judul' => 'The Excorcist',
                'sinopsis' => "Sejak kematian istrinya 12 tahun lalu, Victor Fielding (Leslie Odom Jr.) membesarkan anaknya, Angela (Lidya Jewett) sendirian. 
                Tragedi dimulai saat Angela dan 
                temannya Katherine (Olivia O'Neill) hilang 3 hari di hutan. Pasca kejadian ini keduanya dirasuki oleh entitas setan misterius."
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169417034165149_290x426.jpg',
                'judul' => 'Indigo',
                'sinopsis' => 'ZORA (Amanda Manopo) memiliki seorang adik yaitu NINDA (Nicole Rossi) yang mengidap skizofrenia. Tapi kemudian seorang paranormal bernama SEKAR (Sara Wijayanto) menyatakan bahwa Ninda ternyata adalah seorang indigo,
                 pemilik indera keenam yang bisa melihat dunia lain dan saat ini nyawa Ninda terancam oleh sosok tak kasat mata yang terus mengganggunya. 
                 Untuk menyelamatkannya, bantuan Zora diperlukan.'
            ],
             [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169416151382710_290x426.jpg',
                'judul' => 'Petualangan Sherina 2',
                'sinopsis' => 'SHERINA (Sherina Munaf) dan SADAM (Derby Romero), dua teman kecil yang lama terpisah, bertemu kembali di Kalimantan untuk pelepasliaran orang utan. Reuni manis terhenti ketika anak orang utan bernama SAYU dicuri sekelompok orang.
'
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169382771567221_290x426.jpg',
                'judul' => 'The Creator',
                'sinopsis' => "Berkisah tentang perang di masa depan antara Artificial Iintelligence (AI) atau kecerdasan buatan dan manusia. Pertempuran keduanya membuat dunia menjadi hancur lebur."
            ],
            [
                'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169268860098910_290x426.jpg',
                'judul' => 'Expend4bles',
                'sinopsis' => 'Misi kelompok The Expendables kali ini akan berusaha mencegah perang dunia ke-3. 
                Mereka rela mempertaruhkan nyawa demi kesuksesan misi. Barney Ross (Sylvester Stallone), 
                Lee Christmas (Jason Statham) akan berhadapan dengan penjual senjata ilegal yang salah satunya dipimpin oleh Iko Uwais.'
            ],
        ]
    ]);
})->name('dashboard');

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

//login

Route::get('login',[AuthController::class,'index'])->name('login_view');
Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

Route::get('register',[AuthController::class,'register_view'])->name('register_view');
Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');



Route::get('home',[AuthController::class,'home'])->name('home');
Route::get('logout',[AuthController::class,'logout'])->name('logout');


Route::get('/profile', function () {
    return view('Costumer/profile');
});



Route::get('/form', function () {
    return view('Admin/formDaftarFilm');
});



Route::get('/daftar', function () {
    $isi = [
        [
            'no' => '1',
            'nama' => 'SAW X',
            'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/169414845830977_290x426.jpg',
            'genre' => 'Horror',
            'JamTayang' => '12.00',
            'harga' => '50000',
            'JamAkhir' => '23.00',
            'TanggalTayang' => '21-Jan-2023',
            'TanggalAkhir' => '21-Feb-2023',
            'Sinopsis' => 'Mengejar sebuah pengobatan yang menjanjikan dapat 
            menyembuhkan kankernya, John Kramer (Tobin Bell) menuju ke Meksiko 
            untuk menjalani perawatan eksperimental, hanya untuk mengetahui bahwa dia menjadi
             mangsa dari sebuah penipuan. Kini, para scammer menjadi mangsa di permainan baru milik Jigsaw.'
        ],
        [
            'no' => '2',
            'nama' => 'To Catch A Killer',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169442926668402_287x421.jpg',
            'genre' => 'Action',
            'harga' => '60000',
            'JamTayang' => '15.00',
            'JamAkhir' => '21.00',
            'TanggalTayang' => '22-Mei-2023',
            'TanggalAkhir' => '23-Jun-2023',
            'Sinopsis' => 'Eleanor (Shailene Woodley) adalah sosok petugas polisi yang berbakat namun sering bermasalah.'
        ],
        [
            'no' => '3',
            'nama' => 'It Lives Inside',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169417258680382_290x426.jpg',
            'genre' => 'Horror',
            'harga' => '70000',
            'JamTayang' => '18.00',
            'JamAkhir' => '23.00',
            'TanggalTayang' => '10-Mar-2023',
            'TanggalAkhir' => '11-Apr-2023',
            'Sinopsis' => 'Seorang remaja India-Amerika yang berjuang untuk identitas 
            budayanya berselisih dengan sahabatnya. Dalam prosesnya, tanpa disadari ia malah melepaskan 
            entitas iblis kuno yang kuat yang mengancam dirinya dan orang-orang disekitarnya.'
        ],
        [
            'no' => '4',
            'nama' => 'Killers Of Flower moon',
            'gambar' => 'https://media.21cineplex.com/webcontent/gallery/pictures/16952093955719_290x426.jpg',
            'genre' => 'Action,Romance',
            'harga' => '80000',
            'JamTayang' => '12.00',
            'JamAkhir' => '18.00',
            'TanggalTayang' => '23-Des-2023',
            'TanggalAkhir' => '23-Jan-2024',
            'Sinopsis' => 'Pada pergantian abad ke-20, minyak membawa kekayaan bagi Bangsa Osage, 
                yang dalam sekejap menjadi salah satu orang terkaya di dunia. 
                Kekayaan penduduk asli Amerika ini menarik perhatian para penyelundup kulit putih,
                yang memanipulasi, memeras, dan mencuri uang Osage sebanyak yang mereka bisa sebelum melakukan pembunuhan.'
        ],
        [
            'no' => '5',
            'nama' => 'The Exorcist',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169450343162224_287x421.jpg',
            'genre' => 'Horror',
            'harga' => '25000',
            'JamTayang' => '17.00',
            'JamAkhir' => '24.00',
            'TanggalTayang' => '24-Jul-2023',
            'TanggalAkhir' => '25-Agus-2023',
            'Sinopsis' => "Sejak kematian istrinya 12 tahun lalu,
             Victor Fielding (Leslie Odom Jr.) 
            membesarkan anaknya, Angela (Lidya Jewett) sendirian. Tragedi dimulai saat Angela dan 
            temannya Katherine (Olivia O'Neill) hilang 3 hari di hutan."
        ],
        [
            'no' => '6',
            'nama' => 'Indigo',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169417034165149_290x426.jpg',
            'genre' => 'Horror',
            'harga' => '3000',
            'JamTayang' => '17.00',
            'JamAkhir' => '23.00',
            'TanggalTayang' => '24-Okt-2023',
            'TanggalAkhir' => '24-Nov-2023',
            'Sinopsis' => 'ZORA (Amanda Manopo) memiliki seorang
             adik yaitu NINDA (Nicole Rossi)
             yang mengidap skizofrenia. Tapi
             kemudian seorang paranormal bernama SEKAR (Sara Wijayanto)
              menyatakan bahwa Ninda ternyata adalah seorang indigo,'
        ],
        [
            'no' => '7',
            'nama' => 'Petualangan Sherina 2',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169416151382710_290x426.jpg',
            'genre' => 'Slice of Life',
            'harga' => '20000',
            'JamTayang' => '11.00',
            'JamAkhir' => '21.00',
            'TanggalTayang' => '01-Nov-2023',
            'TanggalAkhir' => '01-Des-2023',
            'Sinopsis' => 'SHERINA (Sherina Munaf) dan SADAM (Derby Romero), 
            dua teman kecil yang lama terpisah, bertemu kembali di Kalimantan untuk
             pelepasliaran orang utan. Reuni manis terhenti ketika anak orang utan bernama SAYU dicuri sekelompok orang.'
        ],
        [
            'no' => '8',
            'nama' => 'The Creator',
            'gambar' =>
                'https://media.21cineplex.com/webcontent/gallery/pictures/169382771567221_290x426.jpg',
            'genre' => 'Sci-fi',
            'harga' => '70000',
            'JamTayang' => '11.00',
            'JamAkhir' => '20.00',
            'TanggalTayang' => '21-Jan-2023',
            'TanggalAkhir' => '07-Feb-2023',
            'Sinopsis' => "Berkisah tentang perang di masa depan antara 
            Artificial Iintelligence (AI) atau kecerdasan buatan dan manusia. 
            Pertempuran keduanya membuat dunia menjadi hancur lebur."
        ],

        [
            'no' => '9',
            'nama' => 'Expend4bles',
            'gambar'
            => 'https://media.21cineplex.com/webcontent/gallery/pictures/169414845830977_290x426.jpg',
            'genre' => 'Action',
            'harga' => '25000',
            'JamTayang' => '13.00',
            'JamAkhir' => '23.00',
            'TanggalTayang' => '07-Feb-2023',
            'TanggalAkhir' => '07-Apr-2023',
            'Sinopsis' => 'Misi kelompok The Expendables kali ini akan berusaha mencegah perang dunia ke-3.
                Mereka rela mempertaruhkan nyawa demi kesuksesan misi. Barney Ross (Sylvester Stallone),
                Lee Christmas (Jason Statham) akan berhadapan 
                dengan penjual senjata ilegal yang salah satunya dipimpin oleh Iko Uwais.'
        ]
    ];
    $perPage = 3;
    $currentPage = request()->get('page', 1);

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
