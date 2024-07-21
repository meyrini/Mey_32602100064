<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profile()
    {
        return view('home');  // Mengarahkan ke home karena halaman ini menggabungkan konten profile dan skills
    }

    public function skills()
    {
        return view('home');  // Mengarahkan ke home karena halaman ini menggabungkan konten profile dan skills
    }
}
