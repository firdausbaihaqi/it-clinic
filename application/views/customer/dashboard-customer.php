<body>
  <!-- ini navbar -->
  <div class="row my-5 pb-5">
    <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-primary py-2 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>dashboard"><strong>IT - Clinic</strong></a>
        </button>

        <div class="navbar-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_add_request">Add Request</a>
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
          <div class="input-group-append">
            <a class="btn btn-outline-primary" href="#" style="padding: 7px 20px; font-size: 12px;">
              Search
            </a>
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
          <a class="btn dropdown-item" href="">dalam antrian</a>
          <a class="btn dropdown-item" href="#">tanggal pemesanan</a>
        </div>
      </div>


    </div>
  </div><br><br><br>

  <div class="row mx-5">
    <div class="col md-12">
      <?php
      if ($this->session->flashdata('message') != '') {
      ?>
        <div class="alert alert-primary">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <div class="row py-5 px-5 mx-5">
    <?php foreach ($request as $rows) { ?>
      <div class="col-md-4 my-3">
        <div class="card shadow-lg" style="width: 20rem;">
          <img src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" class="card-img-top" alt="" height="200px" style="object-fit: cover">
          <div class="card-body">
            <p class="h6">Kode Order :</p>
            <p class="card-text"><?php echo $rows->code_order; ?></p>
            <p class="h6">Keterangan :</p>
            <p class="card-text"><?php echo $rows->detail; ?></p><br><br>

            <center>
              <?php if ($rows->status == "in_queue") { ?>
                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_in_queue">Dalam Antrian</a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_batal_<?php echo $rows->id; ?>">Batal</a>
              <?php } else if ($rows->status == "in_progress") { ?>
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_in_progress">Sedang Diperbaiki</a>
              <?php } ?>
              <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>
            </center>
          </div>
        </div>
        <!-- modal -->
        <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal_title_6">More details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <img class="rounded" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" alt="<?php echo base_url(); ?>assets/img/empty.png" height="250px" style="object-fit: cover">
                  </div>
                </div>
              </div>
              <br><br>
              <div class="modal-body">
                <p class="h6">Kode Order :</p>
                <p class="card-text"><?php echo $rows->code_order; ?></p>
                <p class="h6">Keterangan :</p>
                <p class="card-text"><?php echo $rows->detail; ?></p>
                <p class="card-text h6">Customer : <?php echo $rows->customer; ?></p>
                <p class="card-text h6">Cost : RP <?php echo $rows->price; ?></p><br>
                <p class="card-text h6">Tanggal Order : <?php echo $rows->date_order; ?></p>
                <p class="card-text h6">Tanggal Selesai : <?php echo $rows->date_finish; ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal modal-danger fade" id="modal_batal_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Batal Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="py-3 text-center">
                  <i class="fas fa-exclamation-triangle fa-4x"></i>
                  <p>
                    Anda yakin ingin membatalkan order ?
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="<?php echo site_url('dashboard/customer_cancel_request' . "/" . $rows->id . "/" . $rows->customer . "/" . $rows->image); ?>" class="btn btn-sm btn-secondary">Ya</a>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
    <?php
    } ?>
  </div>

  <!-- modal -->
  <div class="modal modal-light fade" id="modal_add_request" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url(); ?>dashboard/customer_add_request_process" enctype="multipart/form-data" method="POST">
            <div class=" form-group">
              <label>Foto Perangkat</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
            </div>

            <div class="form-group">
              <label>Tanggal Pemesanan</label>
              <input type="date" class="form-control" name="date_order" id="date_order" value="<?php echo date('Y-m-d'); ?>" readonly>
            </div>

            <div class=" form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="detail" id="detail" cols="75" rows="10" placeholder="tulis keluhan anda disini..."></textarea>
            </div>
            <button class="btn btn-sm btn-success btn-block " type="submit">Request</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-success fade" id="modal_finish" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Status</h5>
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
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-primary fade" id="modal_in_progress" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Status</h5>
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
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-warning fade" id="modal_in_queue" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-exclamation-circle fa-4x"></i>
            <h4 class="heading mt-4">Perangkat anda masih dalam antrian</h4>
            <p>
              Perangkat anda belum diproses
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
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
            <p>IT-Clinic didesain dan di program untuk memenuhi tugas Design Interface dan juga Pemrograman
              Web Lanjut.</p>
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
          © 2019 <a href="<?php echo site_url(); ?>home/about" class="footer-link" target="_blank">IT-Clinic</a>
        </span>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- cdn js ojo diganti!! -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="<?php base_url(); ?>assets/js/theme.js"></script>
  <script>
    $('#inputGroupFile02').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(cleanFileName);
    })
  </script>
</body>

</html>