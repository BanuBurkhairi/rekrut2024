@extends('layout.master')

@section('judul')
    QnA - Tanya Jawab
@endsection

@section('page-title')
    Daftar Pertanyaan dan Jawaban
@endsection

@section('page-pretitle')
    Menu Tanya Jawab
@endsection

@section('page-title-action')
<div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
        <a href="/admin" class="btn btn-primary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            Beranda
        </a>
        <a href="/admin" class="btn btn-primary d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
        </a>
    </div>
</div>
@endsection

@section('konten')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Status</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($damin as $prt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $prt->tanya }}</td>
                                <td>{{ $prt->jawab }}</td>
                                <td>
                                    @if ($prt->status == 1)
                                        Tampil
                                    @elseif ($prt->status == 2)
                                        Menunggu Jawaban 
                                    @elseif ($prt->status == 3)
                                        Double Pertanyaan  
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="/qna/jawab/{{ $prt->id }}" class="btn">Jawab</a>
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