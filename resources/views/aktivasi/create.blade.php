@extends('layout.master')

@section('judul')
    Aktivasi Akun - Rekrutmen Mitra BPS Kota Gunungsitoli 2-24
@endsection

@section('page-title')
    Ajukan Aktivasi Akun
@endsection

@section('page-pretitle')
    Rekrutmen Mitra 2024
@endsection

@section('page-title-action')
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="/aktivasi" class="btn btn-secondary d-none d-sm-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 14l-4 -4l4 -4"></path>
                    <path d="M5 10h11a4 4 0 1 1 0 8h-1"></path>
                </svg>
                Kembali
            </a>
        </div>
    </div>
@endsection

@section('konten')
<form action="/aktivasi/store" class="card" method="POST">
    @csrf
    <div class="card-body">
        <div class="mb-3 row">
            <label class="col-3 col-form-label required">
                Nama
            </label>
            <div class="col">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-3 col-form-label required">
                email
            </label>
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda">
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <button class="btn btn-primary" type="submit">Kirim</button>
    </div>
</form>
@endsection