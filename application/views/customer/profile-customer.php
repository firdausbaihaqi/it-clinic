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
  <div class="container">
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

  <?php foreach ($profile as $rows) {
  ?>
    <main class="main">
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card shadow-lg bg-tertiary text-white">
                <div class="card-body">
                  <center>
                    <h1 class="text-white">Profile</h1>
                    <img class="rounded-circle" src="<?php echo base_url(); ?>data/profile/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                    <br><br>
                  </center>
                  <form class="form-primary" action="" method="POST">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" id="user" name="user" placeholder="Username" value="<?php echo $rows->user; ?>" readonly>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap" value="<?php echo $rows->fullname; ?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $rows->password; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $rows->email; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label> Alamat</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" value="<?php echo $rows->address; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" value="<?php echo $rows->phone; ?>" readonly>
                    </div>
                    <a class="btn btn-block btn-success" data-toggle="modal" data-target="#modal_edit_profile">Edit Profile</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- modal -->
    <div class="modal modal-tertiary fade" id="modal_edit_profile" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-primary" action="<?php echo site_url(); ?>dashboard/customer_edit_picture/<?php echo $rows->image; ?>" enctype="multipart/form-data" method="POST">
              <div class=" form-group">
                <label>Foto Profile</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
              </div>
              <button class="btn btn-block btn-sm btn-success" type="submit">Upload</button>
              <br><br>
            </form>
            <form class="form-primary" action="<?php echo site_url(); ?>dashboard/customer_edit_profile/<?php echo $rows->user; ?>" method="POST">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Username" value="<?php echo $rows->user; ?>">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap" value="<?php echo $rows->fullname; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $rows->password; ?>">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $rows->email; ?>">
              </div>
              <div class="form-group">
                <label> Alamat</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" value="<?php echo $rows->address; ?>">
              </div>
              <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" value="<?php echo $rows->phone; ?>">
              </div>
              <button class="btn btn-block btn-lg bg-white mt-4 text-primary" type="submit">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal -->
  <?php
  } ?>
  <br><br><br>

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