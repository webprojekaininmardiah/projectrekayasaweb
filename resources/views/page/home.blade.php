@extends('layouts.app')

@section('title','home')

@section('content')
<div class="container flex-grow-1">
    <div class="row">
        <div class="col-md-12">
            <h2 class="display-5 text-primary mt5">Selamat Datang</h2>
            <p class="text-muted">Ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
            <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Detail</a>
        </div>
    </div>
 
 @endsection   