<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scan QR Code</title>
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
    <a class="navbar-brand">Scan QR Code</a>
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
<div class="container">
  <div class="row pt-5">
    <div class="col-md-5 mx-auto">
      <div id="reader" width="600px"></div>
    </div>
  </div>
</div>

</body>
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>
        <script>
                    function onScanSuccess(decodedText, decodedResult) {
                    // handle the scanned code as you like, for example:
                    console.log(`Code matched = ${decodedText}`, decodedResult);
                  }

                  function onScanFailure(error) {
                    // handle scan failure, usually better to ignore and keep scanning.
                    // for example:
                    //console.warn(`Code scan error = ${error}`);
                  }

                  let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader",
                    { fps: 10, qrbox: {width: 250, height: 250} },
                    /* verbose= */ false);
                  html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        </script>

</html>
