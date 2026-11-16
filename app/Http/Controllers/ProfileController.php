<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Page 1: Welcome Page (Data dikirim via variabel, bukan hardcode di HTML)
    public function index()
    {
        $data = [
            'nama'      => 'Vito Riano Hans',
            'panggilan' => 'Hans.',
            'jurusan'   => 'Informatika — INSTIKI',
            'tagline'   => 'Suka foto, masak, fashion dan bermusik.'
        ];

        return view('welcome', $data);
    }

    // Page 2: Describe Diri Sendiri (Menyediakan array untuk fungsi looping)
    public function about()
    {
        $bio = 'Mahasiswa Informatika yang berfokus pada pengembangan web, rekayasa basis data, serta produksi audio dan visual.';

        $keahlian = [
            [
                'kategori'  => 'Music',
                'deskripsi' => 'Singer, Piano atau keyboard',
                'tingkat'   => 'Utama'
            ],
            [
                'kategori'  => 'Fotografi',
                'deskripsi' => 'Hanya hobi foto dengan smarthphone',
                'tingkat'   => 'Hobby'
            ],
            [
                'kategori'  => 'Fashion',
                'deskripsi' => 'Suka fashion niche dan clean style',
                'tingkat'   => 'Hobby'
            ],
            [
                'kategori'  => 'Web Development',
                'deskripsi' => 'PHP, Laravel, MySQL, HTML/CSS, Bootstrap, jQuery',
                'tingkat'   => 'Menengah'
            ]
        ];

        return view('about', compact('bio', 'keahlian'));
    }

    // Page 3: Galeri Foto
    public function gallery()
    {
        // Simpan file foto Anda di folder public/images/
        $galeri = [
            [
                'judul'     => 'Eksplorasi Alam Bali',
                'kategori'  => 'Outdoor & Hiking',
                'file'      => 'images/foto1.jpg',
                'deskripsi' => 'Dokumentasi perjalanan luar ruang dengan color grading natural.'
            ],
            [
                'judul'     => 'Setup Pengembangan Perangkat Lunak',
                'kategori'  => 'Workspace',
                'file'      => 'images/foto2.jpg',
                'deskripsi' => 'Lingkungan kerja harian untuk pengembangan aplikasi web.'
            ],
            [
                'judul'     => 'Sesi Produksi Audio',
                'kategori'  => 'Music & Sound',
                'file'      => 'images/foto3.jpg',
                'deskripsi' => 'Pengaturan mixing dan rekaman instrumen.'
            ]
        ];

        return view('gallery', compact('galeri'));
    }
}