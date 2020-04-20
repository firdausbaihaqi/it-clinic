<body>
  <!-- ini navbar -->
  <div class="row my-5 pb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>dashboard"><strong>IT - Clinic</strong></a>
        </button>

        <div class="navbar-collapse" id="navbar_main">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>dashboard/customer_view_profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_add_request">Add Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url(); ?>dashboard/customer_view_history">Request History</a>
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

  <div class="row mx-5">
    <div class="col">
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

  <!-- table -->
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h3>List Request :</h3>
          <table class="table table-hover table-cards align-items-center" id="customer">
            <thead>
              <tr>
                <th></th>
                <th>Kode Order</th>
                <th>Keterangan</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Selesai</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($request as $rows) {
              ?>
                <tr>
                  <td>
                    <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="100px" height="100px" style="object-fit: cover">
                  </td>
                  <td>
                    <?php echo $rows->code_order; ?>
                  </td>
                  <td>
                    <?php echo $rows->detail; ?>
                  </td>
                  <td>
                    <?php echo $rows->date_order; ?>
                  </td>
                  <td>
                    <?php echo $rows->date_finish; ?>
                  </td>
                  <td>
                    <?php if ($rows->status == "in_queue" || $rows->status == "available") { ?>
                      <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_in_queue">Dalam Antrian</a>
                      <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_cancel_<?php echo $rows->id; ?>">Batal</a>
                    <?php } else if ($rows->status == "in_progress") { ?>
                      <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_in_progress">Sedang Diperbaiki</a>
                    <?php } else if ($rows->status == "finish" && $rows->shipment == "") { ?>
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_finish_<?php echo $rows->id; ?>">Siap Dikirim</a>
                    <?php } else if ($rows->shipment == "in_request") { ?>
                      <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_in_request">Sedang Dikirim</a>
                    <?php } else if ($rows->shipment == "in_delivery") { ?>
                      <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_in_delivery">Dalam Pengiriman</a>
                    <?php } else if ($rows->shipment == "delivered") { ?>
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_delivered_<?php echo $rows->id; ?>">Sudah Sampai</a>
                    <?php } ?>
                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>
                    <!-- modal -->
                    <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <div class="modal-title h6" id="modal_title_6">More details</div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="row">
                            <div class="col mt-3">
                              <div class="d-flex justify-content-center">
                                <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                              </div>
                            </div>
                          </div>
                          <div class="modal-body mt-4">
                            <p class="card-text h6">Kode Order : <?php echo $rows->code_order; ?></p>
                            <p class="card-text h6">Keterangan : </p>
                            <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="6" placeholder="<?php echo $rows->detail; ?>"></textarea><br>
                            <p class="card-text h6">Tanggal Order : <?php echo $rows->date_order; ?></p>
                            <p class="card-text h6">Tanggal Selesai : <?php echo $rows->date_finish; ?></p>
                            <p class="card-text h6">Biaya Servis : RP <?php echo $rows->price; ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal modal-danger fade" id="modal_cancel_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                              <h4 class="heading mt-4">Anda yakin ingin membatalkan order ?</h4>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo site_url('dashboard/customer_cancel_request' . "/" . $rows->id . "/" . $rows->customer . "/" . $rows->image); ?>" class="btn btn-sm btn-secondary">Ya</a>
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal modal-success fade" id="modal_finish_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                              <h4 class="heading mt-4">Apakah anda ingin barang dikirim sekarang?</h4>
                              <p>Perangkat telah selesai di servis </p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a class="btn btn-sm btn-secondary" href="<?php echo site_url(); ?>dashboard/customer_request_shipment/<?php echo $rows->id; ?>">Kirim Sekarang</a>
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal modal-success fade" id="modal_delivered_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Shipment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="fa fa-exclamation-circle fa-4x"></i>
                              <h4 class="heading mt-4">Perangkat anda sudah sampai</h4>
                              <p>Terimakasih telah menggunakan jasa kami :)</p>
                              <a href="<?php echo site_url(); ?>dashboard/customer_save_history/<?php echo $rows->id; ?>" class="btn btn-block btn-light">Simpan ke history</a>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal -->
                  </td>
                </tr>
              <?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
  <br><br><br>
  <!-- table -->

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
            <h4 class="heading mt-4">Perangkat anda masih diperbaiki, silahkan tunggu</h4>
            <p>
              Perangkat belum bisa diambil
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-warning fade" id="modal_in_request" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Shipment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-exclamation-circle fa-4x"></i>
            <h4 class="heading mt-4">Perangkat anda masih dalam pengiriman</h4>
            <p>
              Perangkat anda belum dikirim
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-primary fade" id="modal_in_delivery" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Shipment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="fa fa-exclamation-circle fa-4x"></i>
            <h4 class="heading mt-4">Perangkat anda sedang dikirm</h4>
            <p>
              Harap ditunggu, masih dalam perjalanan
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
  <footer class="pt-5 pb-3 footer footer-dark bg-tertiary">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="pr-lg-5">
            <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
            <p class="text-muted">IT-Clinic didesain dan di program untuk menjadi sebuah platform yang menghubungkan antara Customer dengan Teknisi,
              juga menjamin keamanan dan kepuasan Customer.</p>
          </div>
        </div>

        <!-- space kosong -->
        <div class="col-4"></div>
        <!-- space kosong -->

        <div class="col-2">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Navigation</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/customer_view_history">Request History</a></li>
            <li><a class="text-muted" href="<?php echo base_url(); ?>login/logout">Logout</a></li>
          </ul>
        </div>

        <div class="col-1 col-md">
          <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo site_url(); ?>home/about">About Us</a></li>
            <li><a class="text-muted" href="<?php echo site_url(); ?>">Home</a></li>
          </ul>
        </div>

      </div>
      <hr>

      <div class="d-flex align-items-center">
        <span class="text-muted">
          © 2020 <a href="<?php echo site_url(); ?>home/about" class="text-muted">IT-Clinic</a>
        </span>
      </div>

    </div>
  </footer>
  <!-- footer -->

  <!-- cdn js ojo diganti!! -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

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
  <script>
    $(document).ready(function() {
      $('#customer').DataTable();
    });
  </script>
</body>

</html>