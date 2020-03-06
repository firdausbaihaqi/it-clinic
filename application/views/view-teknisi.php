<body>
  <!-- ini navbar -->
  <div class="row my-5 pb-5">
    <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-tertiary py-2 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./"><strong>IT - Clinic</strong></a>
        </button>

        <div class="navbar-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url(); ?>login/logout">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- akhir navbar -->

  <!-- ini body -->

  <h4 class="text-center">List Job :</h4>

  <div class="row py-5 px-5 mx-5">

    <div class="col-md-3 mx-3">
      <div class="card" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ganti CPU Fan</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">komputer tiba-tiba cepat panas</p><br>
          <center><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_5">Ambil Job</a></center>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-5 depth-5">
      <div class="card" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Motherboard mati</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">Ketumpahan air.</p><br>
          <center><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modall">Ambil Job</a></center>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-5">
      <div class="card" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">keyboard rusak</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">pernah terbanting</p><br>
          <center><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modall">Ambil Job</a></center>
        </div>
      </div>
    </div>
  </div>

  <!-- modal -->
  

  <div class="modal modal-tertiary fade" id="modall" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_6"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-check-circle fa-4x"></i>
            <br>
            <h4 class="heading mt-4">Selamat Mengerjakan :)</h4>
            <h4 class="heading mt-4">Kode : AX63ND1</h4>
            <p>
              berikan kode ini kepada admin di pusat perbaikan
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><a href="sign-in.html">Kembali</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->

  <!-- ini body -->


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
            <li><a class="text-muted" href="index.html">Home</a></li>
            <li><a class="text-muted" href="sign-in.html">Sign-In</a></li>
            <li><a class="text-muted" href="register-user.html">Register User</a></li>
            <li><a class="text-muted" href="register-teknisi.html">Register Teknisi</a></li>
          </ul>
        </div>
        <div class="col-1 col-md">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="about.html">About Us</a></li>
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