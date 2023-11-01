<?php

use App\Http\Controllers\SiswaController;
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

// $data = [
//     [
//         'nama' => 'alfin kamil',
//         'nim' => 89839893,
//         'tetala' => 'Pamekasan',
//         'kelas' => 'Kelas-A',
//         'alamat' => 'Sana Tengah',
//         'umur' => '20'
//     ],
//     [
//         'nama' => 'alfin kamil',
//         'nim' => 89839893,
//         'tetala' => 'Pamekasan',
//         'kelas' => 'Kelas-A',
//         'alamat' => 'Sana Tengah',
//         'umur' => '20'
//     ],
// ];
Route::get('/', function () {
    return view('welcome');
});

Route::get('tambah/{nilai}', function ($nilai) {
    return $nilai;
});

Route::get('/contoh', function () {
    $data = [
        'nama' => 'alfin kamil',
        'email' => 'alfinkamil@gmail.com'
    ];

    return view('contoh', $data);
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
