<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function profile($nama = "Indriazan Alkautsar", $npm = "2317051074", $kelas = "D"){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,    
            ];
        return view('profile', $data);
    }
}