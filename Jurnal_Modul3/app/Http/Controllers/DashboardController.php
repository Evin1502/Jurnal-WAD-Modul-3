<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# 1. Import model User agar dapat digunakan di dalam controller.
use App\Models\User;


class DashboardController extends Controller
{

    public function index()
    {
        # 2. Ambil satu data mahasiswa dari model User menggunakan fungsi first().
        $mahasiswa = User::first();
        # 3. Tambahkan logika untuk menentukan ucapan salam
        $salam = match (true){
            $hours >= 5 && $hours < 12 => "Selamat Pagi",
            $hours >= 12 && $hours < 3 => "Selamat Siang",
            $hours >= 3 && $hours < 5 => "Selamat Sore",
            default => "Selamat Malam",
        };
        # 4. Buat variabel untuk menampilkan waktu akses dalam format H:i:s.
        $waktu = date('H');
        # 5. Buat variabel untuk memanggil method getTanggal() pastikan nomor 7 sudah dikerjakan terlebih dahulu.
        $tanggal = $this->getTanggal();
        # 6. Kirim data ke view dashboard menggunakan fungsi compact().
        $accesssTime = date("H:i:s");
        return view('dashboard', compact('mahasiswa', 'salam','waktu', 'tanggal', 'accsessTime'));

    }

    # 7. Buat method private getTanggal() untuk menghasilkan tanggal saat ini dalam format d-m-Y.
    private function getTanggal()
    {
        return date(d-m-Y);
    }    
}
