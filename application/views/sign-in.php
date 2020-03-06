  <body>
    <main class="main">
      <section class="py-xl bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/img/mountain.jpg')">
        <span class="mask bg-primary alpha-6"></span>
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card bg-primary text-white">
                  <div class="card-body">
                    <span class="clearfix"></span>
                    <img class="ml-5 pl-5" src="assets/img/stetoscope.png" style="width: 175px">
                    <h4 class="heading h4 text-white text-center pt-4 pb-2">Halo :)<br>
                      silahkan masuk ke akun kamu</h4>
                    <form class="form-primary was-validates" action="<?php echo site_url() ;?>login/verify" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" id="user" name="user" placeholder="Your email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      </div>

                      <div class="text-center mt-4">
                        <p>Belum punya Akun? <a href="register-user.html" class="text-white"> <u>Daftar disini</u></a> </p>

                      </div>
                      <button type="submit" class="btn btn-block btn-lg bg-white mt-4 text-primary ">Masuk</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Theme JS -->

  </body>

  </html>