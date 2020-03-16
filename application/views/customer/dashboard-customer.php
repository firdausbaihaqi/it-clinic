<body>
  <!-- ini navbar -->
  <div class="row my-5 pb-5">
    <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-primary py-2 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url();?>dashboard"><strong>IT - Clinic</strong></a>
        </button>

        <div class="navbar-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url();?>dashboard/customer_add_request">Add Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Request History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>login/logout">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- akhir navbar -->


  <!-- ini body -->



  <div class="row px-5 mx-5">

    <div class="col-md-6">
      <h4>List request :</h4>
    </div>

    <div class="col-md-6 d-flex flex-row-reverse">

      <form class="form-inline">
        <div class="input-group">
          <input type="text" class="form-control border border-primary" placeholder="kode pemesanan">
          <div class="input-group-prepend">
            <a class="btn btn-outline-primary" href="#" style="padding: 7px 20px; font-size: 12px;">
              Search</a>
          </div>
        </div>
      </form>


      <div class="dropdown pr-2">
        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">
          Sort by..
        </button>
        <div class="dropdown-menu">
          <a class="btn dropdown-item" href="#">bisa diambil</a>
          <a class="btn dropdown-item" href="#">dalam proses</a>
          <a class="btn dropdown-item" href="list-request-technician.html">dalam antrian</a>
          <a class="btn dropdown-item" href="#">tanggal pemesanan</a>
        </div>
      </div>


    </div>
  </div><br><br><br>

  <div class="row py-5 px-5 mx-5">

    <div class="col-md-3 mx-3">
      <div class="card shadow-lg" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ganti CPU Fan</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">komputer tiba-tiba cepat panas</p><br><br>

          <center>
            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_dalam_antrian">Dalam
              Antrian</a>
            <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_more_detail">more
              details</a>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-5 depth-5">
      <div class="card shadow-lg" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Motherboard mati</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">Ketumpahan air.</p><br><br>
          <center>
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modall">Dalam Proses</a>
            <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_more_detail">more
              details</a>

          </center>
        </div>
      </div>
    </div>

    <div class="col-md-3 mx-5">
      <div class="card shadow-lg" style="width: 18rem;">
        <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">keyboard rusak</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">pernah terbanting</p><br><br>
          <center>
            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_5">Bisa Diambil</a>
            <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal_more_detail">more
              details</a>
          </center>
        </div>
      </div>
    </div>
  </div>








  <!-- modal -->
  <div class="modal modal-success fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_6">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-check-circle fa-4x"></i>
            <h4 class="heading mt-4">Komputer anda telah selesai diperbaiki :)</h4>
            <p>
              komputer sudah bisa diambil
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><a
              href="sign-in.html">Kembali</a></button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-primary fade" id="modall" tabindex="-1" role="dialog" aria-labelledby="modall"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_6">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-exclamation-circle fa-4x"></i>
            <h4 class="heading mt-4">Komputer anda masih diperbaiki, silahkan tunggu</h4>
            <p>
              komputer belum bisa diambil
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><a
              href="sign-in.html">Kembali</a></button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-warning fade" id="modal_dalam_antrian" tabindex="-1" role="dialog" aria-labelledby="modall"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_6">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-exclamation-circle fa-4x"></i>
            <h4 class="heading mt-4">Komputer anda masih diperbaiki, silahkan tunggu</h4>
            <p>
              komputer belum bisa diambil
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><a
              href="sign-in.html">Kembali</a></button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-secondary fade" id="modal_more_detail" tabindex="-1" role="dialog" aria-labelledby="modall"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title_6">More details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="row">
          <div class="col-sm-12 mt-5">
            <div class="d-flex justify-content-center">
              <object data="empty.png" type="image/png">
                <img src="assets/img/perbaikan1.jpg" class="card-img-top" alt="...">
              </object>
            </div>
          </div>
        </div>
        <br><br>
        <div class="modal-body">
          <h5 class="card-title">Ganti CPU Fan</h5>
          <p class="h6">Keterangan :</p>
          <p class="card-text">komputer tiba-tiba cepat panas</p>
          <p class="card-text h6">Customer : </p>
          <p class="card-text h6">Cost : RP </p><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><a
              href="sign-in.html">Kembali</a></button>
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
            <p>IT-Clinic didesain dan di program untuk memenuhi tugas Design Interface dan juga Pemrograman Web Lanjut.
            </p>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    $(".pesan").click(function () {
      $('html,body').animate({
        scrollTop: $("#scroll_pesan_sekarang").offset().top
      },
        'slow');
    });
  </script>
</body>

</html>