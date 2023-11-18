@extends('layout.master')

@section('judul')
    QnA - Tanya Jawab
@endsection

@section('page-title')
    Jawab Pertanyaan
@endsection

@section('page-pretitle')
    Rekrutmen Mitra 2024
@endsection

@section('page-title-action')
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="/admin/qna" class="btn btn-secondary d-none d-sm-inline-block">
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
<form action="/qna/update/{{ $jawab->id }}" class="card" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="mb-3 row">
            <label class="col-3 col-form-label">
                Nama
            </label>
            <div class="col">
                <input type="text" class="form-control" value="{{ $jawab->nama }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-3 col-form-label">
                Pertanyaan
            </label>
            <div class="col">
                <input type="text" class="form-control" value="{{ $jawab->tanya }}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-3 col-form-label required">
                Jawaban
            </label>
            <div class="col">
                <input type="text" class="form-control" value="{{ $jawab->jawab }}" name="jawab" placeholder="Berikan Jawaban Anda">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-3 col-form-label required">
                Status
            </label>
            <div class="col">
                <select name="status" class="form-select">
                    @if ($jawab->status == 1)
                        <option value="1" selected>Tampil</option>
                        <option value="2">Menunggu Jawaban</option>
                        <option value="3">Double Pertanyaan</option>
                    @elseif ($jawab->status == 2)
                        <option value="1" selected>Tampil</option>
                        <option value="2" selected>Menunggu Jawaban</option>
                        <option value="3">Double Pertanyaan</option>
                    @elseif ($jawab->status == 3)
                        <option value="1" selected>Tampil</option>
                        <option value="2" selected>Menunggu Jawaban</option>
                        <option value="3">Double Pertanyaan</option>
                    @endif
                </select>
                <small class="form-hint">Ganti Status agar tampil pada Mitra</small>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <button class="btn btn-primary" type="submit">Kirim</button>
    </div>
</form>
@endsection