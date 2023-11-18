@extends('layout.master')

@section('judul')
    Pengumuman Administrasi - Rekrutmen Mitra BPS Kota Gunungsitoli 2024
@endsection

@section('page-title')
    Daftar Nama yang Memiliki Kesalahan Administrasi - Tahap 2
@endsection

@section('page-pretitle')
    Pengumuman
@endsection

@section('page-title-action')
<div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
        <a href="/" class="btn btn-secondary d-none d-sm-inline-block">
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
    <div class="row row-cards">
        <div class="col-12">
            <form method="get" class="mb-3 row">
                <label class="col-auto col-form-label">Cari</label>
                <div class="col-auto">
                    <input type="text" 
                    name="search" 
                    value="{{ request()->get('search') }}" 
                    class="form-control" 
                    placeholder="Search..." 
                    aria-label="Search" 
                    aria-describedby="button-addon2">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-icon" id="button-addon2" aria-label="Button"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg></button>
                </div>
            </form>
            <div class="text-muted">Jika Status Belum Konfirmasi dan Nama anda tidak ada disini. Harap Menunggu Pengumuman Administrasi Tahap II</div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No</th>
                                <th>Nama</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($pengumuman as $peng)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peng->nama }}</td>
                                <td>{{ $peng->note }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection