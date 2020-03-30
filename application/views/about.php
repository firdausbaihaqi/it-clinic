<body>
  <!-- ini navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><strong>IT - Clinic</strong></a>
      </button>
      <div class="navbar-collapse" id="navbar_main">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link bg-white text-dark" href="<?php echo site_url(); ?>login" >Sign In</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>register/register_technician">Looking for a Job?</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>home/about">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  
  <main class="main">
    <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('<?php echo base_url(); ?>assets/img/fixing.jpg')">
      <span class="mask bg-tertiary alpha-7"></span>
      <div class="spotlight-holder py-lg pt-lg-xl">
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
            <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
              <div class="col-lg-7">
                <div class="text-center mt-5">
                  <h1 class="heading h1 text-white">
                    IT - Clinic
                  </h1>
                  <p class="lead lh-180 text-white mt-3">
                    IT - Clinic merupakan sebuah platform yang bertujuan untuk menghubungkan customer yang memiliki kerusakan pada komputer nya dengan teknisi yang ada di berbagai tempat. IT - Clinic juga bertujuan untuk memberi jaminan kepuasan pelanggan karena semua proses di belakang IT - Clinic dikerjakan oleh orang-orang professional dalam bidang nya.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice-lg">
      <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
          <div class="col-lg-6 order-lg-2 ml-lg-auto">
            <div class="block block-image">
              <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid img-center">
            </div>
          </div>
          <div class="col-lg-5 order-lg-1">
            <div class="row-wrapper">
              <div class="row">
                <div class="col">
                  <div class="d-flex align-items-start">
                    <div class="icon-text">
                      <h3 class="heading h4">Jaminan Kepuasan</h3>
                      <p>
                        It-Clinic menjembatani antara User dengan Teknisi, disini posisi kami adalah sebagai 
                        <b>Quality Assurance</b>
                        untuk memastikan kepuasan customer dan juga sebagai penyedia lapangan kerja bagi teknisi.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="d-flex align-items-start">

                    <div class="icon-text">
                      <h3 class="heading h4">Terpercaya</h3>
                      <p>
                        Tidak perlu kawatir lagi terhadap penipuan yang biasa terjadi di servis-servis konvensional, karena setiap perbaikan dan penentuan harga di manage oleh team Profesional kami yang bersertifikat.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="d-flex align-items-start">
                    <div class="icon-text">
                      <h3 class="heading h4">Bersertifikasi</h3>
                      <p>
                        Teknisi yang diterima untuk melakukan interview disini akan dibekali dengan Program Latihan Khusus demi menjamin kualitas hasil kerja.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

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
        <span class="">
          © 2019 <a href="<?php echo site_url(); ?>home/about" class="footer-link">IT-Clinic</a>
        </span>
      </div>
    </div>
  </footer>
  <!-- footer -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>

</html>