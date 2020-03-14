<body>
  <!-- ini navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./"><strong>IT - Clinic</strong></a>
      </button>

      <div class="navbar-collapse" id="navbar_main">
        <ul class="navbar-nav ml-auto">
          <!-- shortcut - complete -->
          <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown">Shortcut</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="homepage.html">Homepage</a>
                  <a class="dropdown-item" href="about.html">About us</a>
                  <a class="dropdown-item" href="sign-in.html">Sign in</a>
                  <a class="dropdown-item" href="contact.html">Contact</a>
                </div>
              </li> -->
          <!-- shortcut -->
          <li class="nav-item">
            <a href="<?php site_url(); ?>login" class="btn btn-sm bg-white">Sign In</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>register/register_technician">Looking for a Job?</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- ini body atas -->
  <section class="bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/home.jpg')">
    <span class="mask bg-primary alpha-7"></span>
    <div class="py-lg pt-lg-xl">
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row cols-xs-space align-items-center text-center justify-content-center">
            <div class="col-7">
              <div class="text-center">
                <img src="assets/img/stetoscope.png" style="width: 300px" class="alpha-8">
                <h2 class="heading display-4 font-weight-400 text-white mt-2">
                  <span class="font-weight-500">IT</span> - Clinic
                </h2>
                <p class="lead text-white font-weight-350">
                  Perbaiki komputer anda dimanapun, kapanpun.
                  <br><button class="pesan btn btn-sm bg-white mt-2 text-primary">Pesan Sekarang</button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-lighter border-top border-bottom" id="scrollToSection">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <a href="#" class="btn btn-danger btn-icon-only btn-zoom--hover rounded-circle">
          <i class="fa fa-heart"></i>
        </a>
        <span class="heading h4 ml-3 mb-0">For Users, By Users</span>
      </div>
    </div>
  </section>
  <!-- ini body atas -->



  <!-- deskripsi singkat  -->
  <section class="slice slice-lg" data-delimiter="1">
    <div class="container">
      <div class="row cols-xs-space cols-sm-space align-items-center">
        <div class="col-md-6">
          <img src="assets/img/fixing.jpg" class="img-center img-fluid rounded z-depth-5">
        </div>
        <div class="col-md-6 col-lg-5 ml-lg-auto ">
          <div class="pr-md-4">
            <h3 class="heading h3">
              Membuka Lapangan Kerja
            </h3>
            <p class="lead text-gray mt-4">IT-Clinic menyediakan pekerjaan bagi teknisi-teknisi dengan kemampuan yang mumpuni tapi belum mendapatkan pekerjaan, semua perbaikan dilakukan oleh teknisi-teknisi ini dengan pengawasan dari team Professional kami.
            </p>
            <a href="register-teknisi" target="_blank" class="btn btn-sm btn-primary">Ayo Daftar Sekarang!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- deskripsi singkat -->

  <!-- body tengah -->
  <section class="slice slice-lg" data-delimiter="1">
    <div class="container">
      <div class="mb-md text-center">
        <h3 class="heading h3">Diawasi oleh team Professional</h3>
        <div class="fluid-paragraph text-center mt-4">
          <p class="lead lh-180">dengan menggunakan layanan kami, anda tidak perlu kawatir lagi terhadap penipuan yang biasa terjadi di servis-servis konvensional, karena setiap perbaikan dan penentuan harga di manage oleh team Profesional kami yang bersertifikat.</p>
        </div>
      </div>
      <div class="row cols-xs-space cols-sm-space cols-md-space">
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/rizal.png" class="card-img-top" style="height: 400px;width:350px;">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Rizal Elsa</span>
                <small class="text-muted">Founder and CEO IT-Clinic</small>
              </h3>
              <p class="mt-2">Teknisi profesional ber sertifikasi kompeten dan juga Founder dari IT-Clinic</p>
              <a href="instagram.com/" target="_blank" class="btn btn-sm btn-primary">View on Instagram</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/andry.png" class="card-img-top" style="height: 400px;width:350px;">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Andry Dwi</span>
                <small class="text-muted">Front-End and Back-End Programmer of IT-Clinic</small>
              </h3>
              <p class="mt-2">Mahasiswa dari Polinema dengan multi talenta</p>
              <a href="instagram.com/" target="_blank" class="btn btn-sm btn-primary">View on Instagram</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/me.png" class="card-img-top" style="height: 400px;width:350px;">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Kiki Effendi</span>
                <small class="text-muted">Freelancer</small>
              </h3>
              <br>
              <p class="mt-2">Pegawai Magang</p>
              <a href="instagram.com/" target="_blank" class="btn btn-sm btn-primary">View on Instagram</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- body tengah -->

  <!-- body bawah -->
  <section class="slice slice-lg bg-tertiary" id="scroll_pesan_sekarang" style="background-image: url('assets/img/crew.jpg'); background-position: center 10%;">
    <span class="mask bg-primary alpha-7"></span>
    <div class="container text-center">
      <div class="row cols-xs-space cols-sm-space cols-md-space">
        <div class="col-12">
          <h2 class="heading text-white h1 strong-600">
            Daftar sekarang juga dan nikmati semua layanan kami
          </h2>
          <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
              <p class="lead text-white">
                Daftar sekarang juga dan mulai gunakan layanan kami kapanpun, tersedia juga paket premium dan dapatkan akses khusus yang tidak dimiliki user regular dengan harga yang bersahabat.
              </p>
              <div class="btn-container mt-5">
                <a href="register-user.php" class="btn btn-lg bg-white px-4">
                  Daftar Gratis Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- body nbawah -->

  <!-- footer -->
  <footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="pr-lg-5">
            <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
            <p>IT-Clinic didesain dan di program untuk memenuhi tugas Design Interface dan juga Pemrograman Web Lanjut.</p>
          </div>
        </div>
        <!-- space kosong -->
        <div class="col-5"></div>
        <!-- space kosong -->
        <div class="col-1 col-md">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Shortcut</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="index.php">Home</a></li>
            <li><a class="text-muted" href="sign-in.php">Sign-In</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>register/register_user">Register User</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>register/register_user">Register Teknisi</a></li>
            <li><a class="text-muted" href="view-user.php">User View</a></li>
            <li><a class="text-muted" href="view-teknisi.php">Teknisi View</a></li>

          </ul>
        </div>
        <div class="col-1 col-md">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="about.php">About Us</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="d-flex align-items-center">
        <span class="">
          © 2019 <a href="#" class="footer-link" target="_blank">IT-Clinic</a>
        </span>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- cdn js ojo diganti!! -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(".pesan").click(function() {
      $('html,body').animate({
          scrollTop: $("#scroll_pesan_sekarang").offset().top
        },
        'slow');
    });
  </script>
</body>

</html>