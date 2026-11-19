
@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('styles')
    .container {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        color: #1e3a8a;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #1e40af;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f1f5f9;
    }
@endsection

@section('content')

    <div class="container">
        <h1>DAFTAR MAHASISWA</h1>

        <table>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
            </tr>

            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['alamat'] }}</td>
                <td>{{ $mhs['gender'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
