@extends('layout.app')

@section('title', '1822250042')

<!-- Header -->
@section('header')
<h4 class="font-weight-bold my-3 text-white text-center">Data Mahasiswa</h4>
@endsection
<!-- Header -->

<!-- Sidebar -->
@section('sidebar')
@parent
@endsection
<!-- Sidebar -->

@section('picture')
<img src="http://www.webcoderskull.com/img/team4.png" class="img-fluid my-auto">
@endsection

@section('content')
<form>
    <div class="form-group row">
        <label class="col-3 col-form-label">Program Studi</label>
        <div class="col-9">
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : {{$studi}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">NPM</label>
        <div class="col-9">
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : {{$npm}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Nama</label>
        <div class="col-9">
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : {{$nama}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Tempat Lahir</label>
        <div class="col-9">
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : {{$t}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Tanggal Lahir</label>
        <div class="col-9">
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : {{$tl}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Jenis Kelamin</label>
        <div class="col-9">
            @if($jk == "P")
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : Perempuan">
            @elseif($jk == "L")
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : Laki-Laki">
            @else
            <input readonly class="bg-warning font-weight-bold form-control-plaintext" value=" : Tidak Diketahui">
            @endif
        </div>
    </div>
</form>
@endsection
