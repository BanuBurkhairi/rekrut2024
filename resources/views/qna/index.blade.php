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
        <a href="/qna/tanya" class="btn btn-primary d-none d-sm-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            Tanya
        </a>
        <a href="/qna/tanya" class="btn btn-primary d-sm-none btn-icon">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
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
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($pertanyaan as $prt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $prt->tanya }}</td>
                                <td>{{ $prt->jawab }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection