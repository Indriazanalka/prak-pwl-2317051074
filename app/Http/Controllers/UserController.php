<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // Halaman list user
    public function index()
    {
        $users = $this->userModel->getUser();

        $data = [
            'title' => 'Daftar User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    // Form create user
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->nama,
            'nim' => $request->npm,       // mapping dari form field "npm" ke kolom "nim"
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('user.index');
    }
}
