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
                  <form class="form-tertiary">
                    <div class="row">
                      <div class="col">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="col">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control" placeholder="Last name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class=" mt-3">Alamat</label>
                      <input type="text" class="form-control" id="input_password" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Terakhir</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>SMA/SMK</option>
                        <option>D1/D2</option>
                        <option>D3</option>
                        <option>S1</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="">Email</label>
                      <input type="text" class="form-control" id="input_password" placeholder="Email">
                    </div>
                    <div class="mt-4 text-center">
                      <br>
                      <p><input type="checkbox"> &nbsp Saya menerima <a href="#" class="text-white"> <u>Syarat & Ketentuan dari IT-Clinic</u></a> </p>
                    </div>
                    <p type="submit" class="btn btn-block btn-lg bg-white mt-4 text-tertiary" data-toggle="modal" data-target="#modal_5">Daftar</p>

                    <!-- modal -->
                    <div class="modal modal-tertiary fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modal_title_6">Konfirmasi Pendaftaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="fa fa-check-circle fa-4x"></i>
                              <h4 class="heading mt-4">Satu langkah lagi :)</h4>
                              <p>
                                silahkan periksa email anda untuk jadwal interview dan informasi lebih lanjut.
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