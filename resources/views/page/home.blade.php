@extends('layout')

@section('title', 'Home Page')

@section('content')
    <h2>Selamat Datang, {{ $name}}. 
    Kamu Sebagai, {{$role}}.</h2>
@endsection
