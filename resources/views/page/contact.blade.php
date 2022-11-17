@extends('layout')

@section('title', 'Content Page')

@section('content')
    <h1>Contact Page</h1>
    @for ($i = 0; $i < 10; $i++)
            Nomor {{ $i }} <br>
    @endfor

    <br>
    
   @foreach ($data as $dataSiswa)
    No :{{ $loop -> iteration}} - {{$dataSiswa->nama_lengkap}} <br>
   @endforeach


@endsection