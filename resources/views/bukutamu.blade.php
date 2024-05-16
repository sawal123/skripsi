<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buku Tamu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
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
<!-- PAGE NOT FOUND -->

                <div class="img-box text-center mt-3">

                    <img src="{{ asset('asetkomen/img/404.jpg') }}" width="35%" alt="">
                    <h1>SORRY WERE BACK</h1>
                </div>
</div>
</div>
</body>
</html>
