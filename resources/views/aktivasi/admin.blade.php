@extends('layout.master')

@section('judul')
    Aktivasi Akun Sobat - Panitia Rekrutmen Mitra BPS Kota Gunungsitoli 2024
@endsection

@section('page-title')
    Daftar Pengajuan Aktivasi Akun
@endsection

@section('page-pretitle')
    Menu Aktivasi Akun
@endsection

@section('page-title-action')

@endsection

@section('konten')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No</th>
                                <th>Nama</th>
                                <th>Status Aktivasi</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($ademin as $akt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $akt->nama }}</td>
                                <td>{{ $akt->ket }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <form action="/aktivasi/update/{{ $akt->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                                @if ($akt->ket == 'Sudah Aktif')
                                                <button class="btn btn-secondary disabled">Done</button>
                                                @else
                                                <button class="btn btn-success" type="submit">Aktivasi</button>
                                                @endif
                                        </form>
                                        <form action="/aktivasi/delete/{{ $akt->id }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapusnya')">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-danger btn-icon" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection