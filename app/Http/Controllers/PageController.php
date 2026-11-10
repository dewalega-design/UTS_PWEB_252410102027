<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        // Menangkap data username dari form login
        $username = $request->input('username');
        
        // Meneruskan data username ke route dashboard
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        
        // Data Array Dinamis untuk syarat UTS (wajib pakai @foreach nanti)
        $plants = [
            ['id' => 1, 'nama' => 'Monstera Deliciosa', 'kategori' => 'Indoor', 'status' => 'Sehat'],
            ['id' => 2, 'nama' => 'Kaktus Mini', 'kategori' => 'Indoor', 'status' => 'Perlu Disiram'],
            ['id' => 3, 'nama' => 'Bonsai Beringin', 'kategori' => 'Outdoor', 'status' => 'Perlu Pupuk'],
        ];

        return view('pengelolaan', compact('username', 'plants'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        
        // Data profil mahasiswa
        $mahasiswa = [
            'nama_lengkap' => 'Liga Perkasa Dewa',
            'nim' => '252410102027',
            'prodi' => 'Teknologi Informasi'
        ];

        return view('profile', compact('username', 'mahasiswa'));
    }
}