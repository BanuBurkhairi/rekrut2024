<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Panitia Rekrutmen Mitra 2024 - Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('dist/img/sobat.png') }}">
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/demo.min.css?1684106062') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('dist/img/logo1278.png') }}" height="36" alt=""></a>
        </div>
        <h2 class="h2 text-center mb-3">Panitia Rekrutmen Mitra BPS Kota Gunungsitoli Tahun 2024</h2>
        <a href="/admin/qna" class="card card-link card-sm d-block">
            <img src="{{ asset('dist/img/qna.png') }}" alt="QnA" class="card-img-top" height="100px">
            <div class="card-body text-center">
                <div class="card-title mb-1">QnA Rekrutmen</div>
                <div class="text-muted">Silahkan Jawab Pertanyaan Disini</div>
            </div>
        </a>
        <br>
        <a href="/admin/pengumuman" class="card card-link card-sm d-block">
            <img src="{{ asset('dist/img/adm.jpg') }}" alt="QnA" class="card-img-top" height="100px">
            <div class="card-body text-center">
                <div class="card-title mb-1">Pengumuman Administrasi</div>
                <div class="text-muted">Silahkan Upload Daftar Pengumuman disini</div>
            </div>
        </a>
        <br>
        <a href="/admin/aktivasi" class="card card-link card-sm d-block">
            <img src="{{ asset('dist/img/active.jpg') }}" alt="QnA" class="card-img-top" height="100px">
            <div class="card-body text-center">
                <div class="card-title mb-1">Aktivasi Akun</div>
                <div class="text-muted">Silahkan Kontrol Aktivasi Akun Disini</div>
            </div>
        </a>
        <div class="empty-action text-center">
          <a href="/logout" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
            Logout
          </a>
        </div>
        
        <div class="text-center text-muted mt-3">
            Dibuat dengan <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" stroke-width="0" fill="currentColor" /></svg> oleh <a href="https://gunungsitolikota.bps.go.id">BPS Kota Gunungsitoli</a> 
        </div>
        <div class="text-center text-muted">
            Copyright &copy 2023
        </div>
      </div>
      
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js?1684106062')}}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js?1684106062')}}" defer></script>
  </body>
</html>