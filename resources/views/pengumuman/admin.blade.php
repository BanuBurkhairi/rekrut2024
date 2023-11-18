@extends('layout.master')

@section('judul')
    Pengumuman Administrasi - Rekrutmen Mitra BPS Kota Gunungsitoli 2024
@endsection

@section('page-title')
    Daftar Nama yang Memiliki Kesalahan Administrasi
@endsection

@section('page-pretitle')
    Pengumuman
@endsection

@section('page-title-action')
<div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
        <a href="/admin" class="btn btn-secondary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 14l-4 -4l4 -4"></path>
                <path d="M5 10h11a4 4 0 1 1 0 8h-1"></path>
            </svg>
            Kembali
        </a>
        <form action="/pengumuman/delete/" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapusnya')">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                    Reset
                </button>
        </form>
    </div>
</div>
@endsection

@section('konten')
    
    <div class="row row-cards">
        <div class="col-4">
            <form action="/pengumuman/upload" method="post" class="btn-list flex-nowrap" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <button class="btn btn-primary" type="submit">Upload</button>
            </form>
        </div>
        <div class="col-12">
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
                            @foreach ($adpeng as $peng)
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