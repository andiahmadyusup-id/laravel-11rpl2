@extends('layout')

@section('title', 'About Page')

@section('content')
    <h2>About</h2>
    <p>
        <strong>Berikut Fasilitas Jika Kamu Login Sebagai:</strong>
        @if($role == "admin")
            <ul>
                <li>Admin bisa CRUD Barang</li>
            </ul>

        @elseif($role == "teller")
            <ul>
                <li>Teller bisa unduh laporan</li>
            </ul>

        @else
            <ul>
                <li>Kamu aneh, role diketahui</li>
            </ul>

        @endif
    </p>
@endsection