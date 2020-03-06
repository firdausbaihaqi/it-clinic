<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign In</title>
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="assets/css/demo.css">

</head>

<body>
  <div style="background-image: url('assets/img/mountain.jpg');background-repeat: repeat-y;">

    <main class="main">
      <!-- <section class="bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/mountain.jpg');background-repeat: repeat-y;"> -->
      <span class="mask bg-primary alpha-6"></span>
      <div class="container d-flex align-items-center no-padding">
        <div class="col">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="card bg-primary text-white mt-5">
                <div class="card-body">
                  <span class="clearfix"></span>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><img class="ml-3" src="assets/img/stetoscope.png" style="width: 150px"></div>
                    <div class="col-md-4"></div>
                  </div>
                  <h4 class="heading h5 text-white text-center pt-4 pb-2">Hai :D<br>
                    silahkan isi data-data berikut untuk mendaftar sebagai User</h4>
                  <p class="text-center">atau klik <a href="register-teknisi.html" class="text-white"> <u>Disini</u></a> untuk mendaftar sebagai Teknisi </p>
                  <form class="form-primary">
                    <div class="form-group">
                      <label> Username</label>
                      <input type="email" class="form-control" id="input_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label> Alamat</label>
                      <input type="email" class="form-control" id="input_email" placeholder="alamat">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" id="input_password" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="col">
                        <label>Ketik Ulang Password</label>
                        <input type="password" class="form-control" placeholder="Re-Type Password">
                      </div>
                    </div>

                    <div class="mt-4 text-center">

                      <p><input type="checkbox">&nbsp Saya menerima <a href="#" class="text-white"> <u>Syarat & Ketentuan dari IT-Clinic</u></a> </p>
                    </div>
                    <!-- <button class="btn btn-block btn-lg bg-white mt-4 text-primary" data-toggle="modal" data-target="#modal_1">Daftar</button> -->
                    <p class="btn btn-block btn-lg bg-white mt-4 text-primary" data-toggle="modal" data-target="#modal_1">Daftar</button>

                      <!-- modal -->
                      <div class="modal modal-fluid fade mt-3" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div class="row justify-content-center">
                                <div class="col-lg-12 text-center py-4">
                                  <div class="row mt-2">
                                    <!-- free -->
                                    <div class="col-md-6">
                                      <div class="card card-pricing text-center px-3 mb-4">
                                        <div class="card-header py-4">
                                          <h4 class="mb-4">Paket Regular</h4>
                                          <h1 class="display-4 text-center" style="color: gray">Gratis</h1>
                                          <br>
                                        </div>
                                        <div class="card-body">
                                          <ul class="list-unstyled mb-4">
                                            <br><br>
                                            <li>Iklan</li>
                                            <li>Jam Layanan 08.00 - 20.00</li>
                                            <li>Chatbot</li>
                                            <br><br>
                                          </ul>
                                          <button type="button" class="btn btn-secondary mb-3" style="border: 1px solid gray"><span > <a href="confirmation-user.html" class="style="color: gray">Regular</a></span></button>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- premium -->
                                    <div class="col-md-6">
                                      <div class="card card-pricing popular text-center px-3 mb-4 z-depth-3">
                                        <div class="card-header py-4">
                                          <h4 class="mb-4">Paket Premium</h4>
                                          <h1 class="display-4 text-primary text-center">RP 49.999</h1>
                                          <span class="h6 text-muted">per bulan</span>
                                        </div>
                                        <div class="card-body">
                                          <ul class="list-unstyled mb-4">
                                            <li>Tanpa Iklan</li>
                                            <li>Pesanan Prioritas</li>
                                            <li>Layanan 24/7 dalam seminggu</li>
                                            <li>Konsultasi Gratis</li>
                                            <li>Potongan Harga sampai dengan 10% untuk semua perbaikan</li>
                                          </ul>
                                          <button type="button" class="btn btn-primary mb-3"><a href="confirmation-user.html" class="text-white">Premium</a></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

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