@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <h2>Profil Pengguna</h2>
    
    <div class="card">
        <h3 style="color: var(--primary); margin-bottom: 15px;">Informasi Mahasiswa</h3>
        <p style="margin-bottom: 10px;"><strong>Nama:</strong> {{ $mahasiswa['nama_lengkap'] }}</p>
        <p style="margin-bottom: 10px;"><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
        <p style="margin-bottom: 10px;"><strong>Program Studi:</strong> {{ $mahasiswa['prodi'] }}</p>
        <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">
        <p>Login sebagai: <strong>{{ $username }}</strong></p>
    </div>
@endsection