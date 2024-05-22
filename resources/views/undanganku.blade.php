<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yanuar & Tria</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 
    <!-- Hitung Mundur -->
    <link rel="stylesheet" href="{{asset('asetundangan/hitungmundur/simplyCountdown.theme.default.css')}}"/>
    <script src="{{asset('asetundangan/hitungmundur/simplyCountdown.min.js')}}"></script>

    <!-- Icon bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('asetundangan/css/style.css')}}">

    </head>
  <body>
    <!-- Halaman Awal -->
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h4>Kepada Bapak/Ibu/Saudara/i, {{$nama}} Di {{$alamat}}</h4>
            <br>
            <p>Tunjukkan Qr Untuk Check In</p>
                <p>{{ $qrcode}}</p>
            
            <h1>Yanuar Ary Syahputra & Tria Mailan Karemoi</h1>
            <p>Akan melangsungkan resepsi pernikahan dalam:</p>
            <div class="simply-countdown"></div>
            <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()"> Lihat Undangan</a>
        </main>
    </section>

    <!-- Navbar Offcanvas -->
    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
  <div class="container">
    <a class="navbar-brand" href="#">Wedding</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Wedding</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="#home">Home</a>
        <a class="nav-link" href="#info">Info</a>
        <a class="nav-link" href="#story">Story</a>
        <a class="nav-link" href="#gallery">Gallery</a>
        <a class="nav-link" href="#gift">Gift</a>
      </div>
      </div>
    </div>
  </div>
</nav>

    <!--Home-->
    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Acara Pernikahan</h2>
                    <h3>Yang insya Allah akan diselenggarakan pada 28 Desember 2024 di Kemiling, Bandar Lampung.</h3>
                    <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir pada acara pernikahan kami.</p>
                </div>
            </div>

        <div class="row couple">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-8 text-end">
                        <h3>Yanuar Ary Syahputra</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat reprehenderit rem facere necessitatibus perferendis eveniet enim, cupiditate deleniti! Est atque quam ipsum ad, perspiciatis sapiente aliquam doloremque dicta soluta eius!</p>
                        <p>Putra dari Bpk. Lorem <br> dan Ibu Ipsum</p>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('asetundangan/img/mempelai2.png')}}" alt="Yanuar" class="img-responsive rounded-circle">
                    </div>
                </div>
            </div>

            <span class="heart"><i class="bi bi-heart-fill"></i></span>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset('asetundangan/img/mempelai1.png')}}" alt="Yanuar" class="img-responsive rounded-circle">
                    </div>
                    <div class="col-8">
                        <h3>Tria Mailan Karemoi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat reprehenderit rem facere necessitatibus perferendis eveniet enim, cupiditate deleniti! Est atque quam ipsum ad, perspiciatis sapiente aliquam doloremque dicta soluta eius!</p>
                        <p>Putra dari Bpk. Sutan <br> dan Ibu Erna</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--Info-->
    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Informasi Acara</h2>
                    <p class="alamat"> Alamat: Hotel Grand Mercure. <br>Pelita, Engal, Kota Bandar Lampung, Lampung 35213</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496.499965056263!2d105.2576745!3d-5.4170098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbf85ff660bd%3A0x82ddd556a29c05c6!2sGrand%20Mercure%20Lampung!5e0!3m2!1sen!2sid!4v1713374708716!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://maps.app.goo.gl/y4R1zZCWjTszVm7q9" target="_blank" class="btn btn-light btn-sm my-4">Klik untuk lihat Maps</a>
                    <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Apabila tiba di tujuan namun tidak ada
                        tanda-tanda sedang dilangsungkan pernikahan, bisa jadi Anda salah jadwal, atau mungkin salah tempat.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">Akad Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - 10.00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 28 Desember 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">Saat acara akad diharapkan untuk kondusif.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Resepsi</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00 - Selesai</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 28 Desember 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">Saat acara akad diharapkan untuk kondusif.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Story-->
    <section id="story" class="story">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Bagaimana Kami Bisa Bertemu</span>
                    <h2>Cerita Kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nemo suscipit sit blanditiis sequi ratione corporis labore praesentium! Quis sapiente magni optio tempore dolores voluptates repudiandae reiciendis ratione totam facere?</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" style="background-image: url('/asetundangan/img/mempelai1.png');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <h3>Pertama Berkenalan</h3>
                                <span>2 Desember 2022</span>
                            </div>
                            <div class="div timeline-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quia soluta saepe necessitatibus dicta laboriosam.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-image: url('/asetundangan/img/mempelai1.png');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <h3>Mulai Dekat</h3>
                                <span>11 Desember 2022</span>
                            </div>
                            <div class="div timeline-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quia soluta saepe necessitatibus dicta laboriosam.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image" style="background-image: url('/asetundangan/img/mempelai1.png');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <h3>Berpacaran</h3>
                                <span>8 January 2023</span>
                            </div>
                            <div class="div timeline-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quia soluta saepe necessitatibus dicta laboriosam.
                                </p>
                            </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-image: url('/asetundangan/img/mempelai1.png');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <h3>Menikah</h3>
                                <span>28 Desember 2024</span>
                            </div>
                            <div class="div timeline-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quia soluta saepe necessitatibus dicta laboriosam.
                                </p>
                            </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!--Gallery-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Memmory Kami</span>
                    <h2>Gallery Foto Kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet accusamus pariatur, molestias quos quod porro. Vitae, quod officia.</p>
                </div>
            </div>

            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col mt-3">
                    <a href="{{asset('img/gallery/1.jpg')}}" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="{{asset('asetundangan/img/gallery/thumbnail/1.jpg')}}" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/300/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="https://picsum.photos/id/300/400/400" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/301/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="https://picsum.photos/id/301/400/400" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/302/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="https://picsum.photos/id/302/400/400" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/306/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="https://picsum.photos/id/306/400/400" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/304/1200/768" data-toggle="lightbox" data-caption="This describes the image" data-gallery="mygallery">
                        <img src="https://picsum.photos/id/304/400/400" alt="Yanuar" class="img-fluid w-100 rounded">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Gift-->
    <section id="gift" class="gift">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Ungkapan Terima Kasih</span>
                    <h2>Kirim Amplop</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sit aperiam nobis provident eum iste?</p>
                </div>
            </div>
            <div class="row justify-content-center text-center">
            <div class="col-md-6">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Bank BRI</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-wallet2 d-block"></i>
                                    <span>No Rek. 12345678</span>
                                    <span>An. Yanuar Ary Syahputra</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">Terima Kasih Amplopnya Semoga Menjadi Berkah Bagi Kita Semua.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Bank BCA</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-wallet2 d-block"></i>
                                    <span>No Rek. 12345678</span>
                                    <span>An. Yanuar Ary Syahputra</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">Terima Kasih Amplopnya Semoga Menjadi Berkah Bagi Kita Semua.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class='block'>&copy; 2024 Yanuar Wedding. All Rights Reserved.</small>
                    <small class='block'>Design By <a href="https://instagram.com/yanuararysyahputra">@yanuararysyahputra</a>.</small>
                    <ul class="mt-3">
                        <li><a href="https://instagram.com/yanuararysyahputra"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://youtube.com/yanuarary"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="https://tiktok.com/@arykann"><i class="bi bi-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--Audio-->
    <div id="audio-container">
        <audio id="song" autoplay loop>
            <source src="{{asset('asetundangan/audio/komang.m4a')}}" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper" style="display: none;">
            <i class="bi bi-disc"></i>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <!-- JS Hitung Mundur -->
    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 12, // required
            day: 28, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
        });
    </script>

    <!-- JS Hamburger -->
    <script>
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');

        offcanvas.addEventListener('show.bs.offcanvas', function() {
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function() {
            stickyTop.style.overflow = 'hidden';
        });
    </script>

        <!--DisableScrl-->
        <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;


        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function () {
                window.scrollTo(scrollTop, scrollLeft);
            }
            
            rootElement.style.scrollBehavior = 'auto';
        }
        
        function enableScroll(){
            window.onscroll = function () {}
            rootElement.style.scrollBehavior = 'smooth';

            playAudio();
        }

        function playAudio(){
            
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if (isPlaying) {
                song.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
            } else {
                song.play();
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }

        disableScroll();
    </script>



</body>
</html>
