<body>
  <div style="background-image: url('assets/img/mountain.jpg');background-repeat: repeat-y;">

    <main class="main">
      <!-- <section class="bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/logo.jpg')"> -->
      <!-- <section class="slice slice-lg bg-tertiary bg-cover bg-size--contain" style="background-image: url('assets/img/logo.png'); background-position: center 10%;background-repeat: repeat-y;"> -->
      <span class="mask bg-tertiary alpha-7"></span>

      <!-- <span class="mask bg-tertiary alpha-1"></span> -->
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card bg-tertiary text-white mt-5">
                <div class="card-body">
                  <span class="clearfix"></span>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img class="ml-3" src="<?php echo base_url(); ?>assets/img/stetoscope.png" style="width: 150px"></div>
                    <div class="col-md-4"></div>
                  </div>
                  <h4 class="heading h5 text-white text-center pt-4 pb-2">Halo :D<br><br>
                    silahkan isi data-data berikut untuk melengkapi pendaftaran sebagai mitra IT-Clinic</h4>
                  <?php
                  if ($this->session->flashdata('message') != '') {
                  ?>
                    <div class="alert alert-primary">
                      <?php echo $this->session->flashdata('message'); ?>
                    </div>
                  <?php
                  }
                  ?>
                  <form class="form-tertiary" action="<?php echo site_url(); ?>register/register_technician_process" method="POST">
                    <div class="row">
                      <div class="col">
                        <label>Username</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                      </div>
                      <div class="col">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama lengkap" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class=" mt-3">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label class="">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label class=" mt-3">Alamat</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                      <label class="">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" required>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <select class="form-control" id="education" name="education" required>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="D1/D2">D1/D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                      </select>
                    </div>

                    <div class="mt-4 text-center">
                      <br>
                      <p><input type="checkbox" required> &nbsp Saya menerima <a href="#" class="text-white"> <u>Syarat & Ketentuan dari IT-Clinic</u></a> </p>
                    </div>
                    <button type="submit" class="btn btn-block btn-lg bg-white mt-4 text-tertiary">Daftar</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    </main>
  </div>

  <!-- cdn js -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="assets/js/theme.js"></script>
  <script src="assets/js/demo.js"></script>

</body>

</html>