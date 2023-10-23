<?php

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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/admin', function () {
    return view('/Admin/indexPageAdmin');
});

Route::get('/loginAdmin', function () {
    return view('/Admin/loginAdmin');
});


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
            ],  [
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
});


Route::get('/transaksi1', function(){
    return view('transaksi1');
});


