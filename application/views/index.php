<body>

  <!-- ini navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4 fixed-top">
    <div class="container">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase" href="<?php echo base_url(); ?>"><strong>IT - Clinic</strong></a>
        </li>
      </ul>
      <div class="navbar-collapse" id="navbar_main">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link bg-white text-dark" href="<?php echo site_url(); ?>login">Sign In</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="<?php echo site_url(); ?>register/register_technician">Looking for a Job?</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(); ?>home/about">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- ini body atas -->
  <section class="bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('<?php echo base_url(); ?>assets/img/home.jpg')">
    <span class="mask bg-primary alpha-7"></span>
    <div class="py-lg pt-lg-xl">
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row cols-xs-space align-items-center text-center justify-content-center">
            <div class="col-7">
              <div class="text-center">
                <img src="<?php echo base_url(); ?>assets/img/stetoscope.png" style="width: 300px">
                <h2 class="heading display-4 font-weight-400 text-white mt-2">
                  <span class="font-weight-500">IT</span> - Clinic
                </h2>
                <p class="lead text-white font-weight-350">
                  Perbaiki komputer anda dimanapun, kapanpun.
                  <br><button class="pesan btn btn-sm mt-3 bg-white text-dark">Pesan Sekarang</button>
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
        <button class="btn btn-danger btn-icon-only rounded-circle">
          <i class="fa fa-heart"></i>
        </button>
        <span class="heading h4 ml-3">For Users, By Users</span>
      </div>
    </div>
  </section>
  <!-- ini body atas -->

  <!-- deskripsi singkat  -->
  <section class="slice slice-lg" data-delimiter="1">
    <div class="container">
      <div class="row cols-xs-space cols-sm-space align-items-center">
        <div class="col-md-6 col-lg-5 ml-lg-auto">
          <div class="pr-md-4">
            <h3 class="heading h3">
              Semua jenis kerusakan komputer anda akan di periksa oleh tenaga profesional kami
            </h3>
            <p class="lead text-gray mt-4">dengan menggunakan layanan kami,
              anda tidak perlu kawatir lagi terhadap penipuan yang sering terjadi di layanan servis konvensional.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/img/perbaikan1.jpg" class="img-center img-fluid rounded z-depth-3" style="width: 440px">
        </div>
      </div>
    </div>
  </section>


  <section class="slice slice-lg" data-delimiter="1">
    <div class="container">
      <div class="row cols-xs-space cols-sm-space align-items-center">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>assets/img/fixing.jpg" class="img-center img-fluid rounded z-depth-5">
        </div>
        <div class="col-md-6 col-lg-5 ml-lg-auto ">
          <div class="pr-md-4">
            <h3 class="heading h3">
              Program Mitra IT-Clinic
            </h3>
            <p class="lead text-gray mt-4">Program ini menyediakan pekerjaan bagi teknisi dengan kemampuan mumpuni yang telah melalui tes kompetensi
              dari kami, semua perbaikan hardware dilakukan oleh teknisi-teknisi ini dengan pengawasan dari team Professional kami. <br> Untuk mendaftar silahkan gunakan link berikut.
            </p>
            <a href="<?php echo site_url(); ?>register/register_technician" class="btn btn-sm btn-primary">Ayo Daftar Sekarang!</a>
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
          <p class="lead lh-180">dengan menggunakan layanan kami, anda tidak perlu kawatir lagi terhadap penipuan yang biasa terjadi di servis-servis konvensional,
            karena setiap perbaikan dan penentuan harga di manage oleh team Profesional kami yang terpercaya.</p>
        </div>
      </div>
      <div class="row cols-xs-space cols-sm-space cols-md-space">
        <div class="col-lg-4">
          <div class="card" style="border:none">
            <img src="<?php echo base_url(); ?>assets/img/rizal.png" class="avatar avatar-lg mx-auto" style="height: 250px;width:250px; ">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Rizal Elsa</span>
                <small class="text-muted">Founder and CEO IT-Clinic</small>
              </h3>
              <p class="mt-4">Teknisi profesional ber sertifikasi kompeten dan juga Founder dari IT-Clinic</p>
              <a href="https://github.com/RizalEF" target="_blank" class="mt-2 btn btn-sm btn-primary">View on Github
                <i class="fab fa-gitbuh"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="border:none">
            <img src="<?php echo base_url(); ?>assets/img/andry.png" class="avatar avatar-lg mx-auto" style="height: 250px;width:240px;">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Andry Dwi</span>
                <small class="text-muted">Senior Programmer of IT-Clinic</small>
              </h3>
              <p class="mt-4">Backend Programmer IT-Clinic, alumni Polinema dengan pengalaman bertahun-tahun di bidang Programming</p>
              <a href="https://github.com/andrydwis" target="_blank" class="mt-2 btn btn-sm btn-primary">View on Github
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="border:none">
            <img src="<?php echo base_url(); ?>assets/img/me.png" class="avatar avatar-lg mx-auto" style="height: 250px;width:250px;">
            <div class="card-body text-center">
              <h3 class="heading h5 mb-1">
                <span class="d-block">Kiki Effendi</span>
                <small class="text-muted">Front-End Programmer of IT-Clinic</small>
              </h3>
              <br>
              <p>Pegawai yang sedang dalam masa Internship di IT-Clinic</p>
              <a href="https://www.linkedin.com/in/kiki-e-027187a1/" target="_blank" class="mt-2 btn btn-sm btn-primary">View on Linked
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- body tengah -->

  <!-- body bawah -->
  <section class="slice slice-lg bg-tertiary" id="scroll_pesan_sekarang" style="background-image: url('<?php echo base_url(); ?>assets/img/crew.jpg'); background-position: center 10%;">
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
                Daftar sekarang juga dan mulai gunakan layanan kami kapanpun,
                bagi teknisi yang ingin mengikuti program mitra IT-Clinic juga bisa mendaftar melalui link berikut.
              </p>
              <div class="btn-container mt-5">
                <a href="<?php echo site_url(); ?>register/register_customer" class="btn btn-lg bg-white px-4">
                  Daftar Gratis Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- body bawah -->

  <!-- footer -->
  <footer class="pt-5 pb-3 footer footer-dark bg-tertiary">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="pr-lg-5">
            <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
            <p>IT-Clinic didesain dan di program untuk menjadi sebuah platform yang menghubungkan antara Customer dengan Teknisi,
              juga menjamin keamanan dan kepuasan Customer.</p>
          </div>
        </div>

        <!-- space kosong -->
        <div class="col-4"></div>
        <!-- space kosong -->

        <div class="col-2">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Navigation</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url(); ?>">Home</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>login">Sign-In</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>register/register_customer">Register Customer</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>register/register_technician">Register Teknisi</a></li>
          </ul>
        </div>

        <div class="col-1 col-md">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo site_url(); ?>home/about">About Us</a></li>
          </ul>
        </div>

      </div>
      <hr>

      <div class="d-flex align-items-center">
        <span>
          © 2020 <a href="<?php echo site_url(); ?>home/about" class="footer-link">IT-Clinic</a>
        </span>
      </div>

    </div>
  </footer>
  <!-- footer -->

  <!-- cdn js ojo diganti!! -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
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