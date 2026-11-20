
@extends('layouts.app')

@section('title', 'Kalkulator Luas Segitiga')

@section('styles')
    .container {
        max-width: 450px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        color: #1e40af;
    }

    label {
        display: block;
        margin-top: 18px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-top: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    button {
        width: 100%;
        padding: 13px;
        margin-top: 25px;
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background: #1d4ed8;
    }

    .hasil {
        margin-top: 25px;
        padding: 15px;
        background: #dcfce7;
        border-radius: 8px;
        color: #166534;
        text-align: center;
    }

    .error {
        color: red;
        font-size: 14px;
    }

    .kembali {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #2563eb;
        text-decoration: none;
    }
@endsection

@section('content')
    <div class="container">
        <h1>Kalkulator Luas Segitiga</h1>

        <form action="{{ url('/kalkulator/segitiga') }}" method="POST">
            @csrf

            <label>Alas Segitiga</label>
            <input type="number" name="alas" step="any"
                   value="{{ old('alas') }}" placeholder="Masukkan alas" required>

            <label>Tinggi Segitiga</label>
            <input type="number" name="tinggi" step="any"
                   value="{{ old('tinggi') }}" placeholder="Masukkan tinggi" required>

            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <button type="submit">Hitung Luas</button>
        </form>

        @if ($luas !== null)
            <div class="hasil">
                <h3>Hasil Perhitungan</h3>
                <p>Luas Segitiga = {{ $luas }}</p>
                <p>Rumus: ½ × alas × tinggi</p>
            </div>
        @endif

        <a href="{{ url('/daftar/mahasiswa') }}" class="kembali">
            Kembali ke Daftar Mahasiswa
        </a>
    </div>
@endsection
