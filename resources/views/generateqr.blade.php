<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generate QrCode Tamu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('baackend/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset ('Template/css/generate.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Beranda</a>
        </li>
        </ul>        
      <ul>
        <li class="nav-item">        
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-door-open"></i>                            
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        </ul>
    </div>
  </div>
</nav>
<!-- GENERATE QR -->
  <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
<div class="container">    
    <div class="card">
    <div class="card-header text-center">
        <img src="{{ asset('Template/images/slider-img.png') }}" width="35%" alt="">
        <h5 class="mt-3">Generate QR-Code Tamu</h5>
      </div>
    <div class="card-body">
  <form action="{{ route('qr') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="idtamu">ID Tamu</label>
      <input type="text" class="form-control" id="idtamu" placeholder="Buat ID Tamu" name="idtamu">
    </div>
    <div class="mb-3">
      <label for="nama">Nama Tamu</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat Tamu</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
    </div>
    
    <button type="submit" class="btn btn-primary" >BUAT QR-CODE</button>
  </form>
</div>
</div>
</body>
</html>
