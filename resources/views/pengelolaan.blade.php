@extends('layouts.app')

@section('title', 'Pengelolaan Tanaman')

@section('content')
    <h2 style="margin-bottom: 10px;">Daftar Tanaman</h2>
    <p>Pengelola saat ini: <strong>{{ $username }}</strong></p>
    
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tanaman</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plants as $index => $plant)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $plant['nama'] }}</td>
                    <td>{{ $plant['kategori'] }}</td>
                    <td><span style="background: #e5e7eb; padding: 4px 8px; border-radius: 4px; font-size: 0.85rem;">{{ $plant['status'] }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection