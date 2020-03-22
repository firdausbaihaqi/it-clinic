  <body>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark bg-dark py-4 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><strong>IT - Clinic</strong></a>
      </div>
    </nav>
    <!-- akhir navbar -->

    <main class="main">
      <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('<?php echo base_url(); ?>assets/img/mountain.jpg'); object-fit: cover;">
        <span class="mask bg-primary alpha-6"></span>
        <div class="container d-flex align-items-center no-padding">
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card bg-primary text-white mt-5">
                  <div class="card-body">
                    <span class="clearfix"></span>
                    <img class="ml-5 pl-5" src="<?php echo base_url(); ?>assets/img/stetoscope.png" style="width: 175px">
                    <h4 class="heading h4 text-white text-center pt-4 pb-2">Halo :)<br>
                      silahkan masuk ke akun kamu</h4>
                    <?php
                    if ($this->session->flashdata('message') != '') {
                    ?>
                      <div class="alert alert-primary">
                        <?php echo $this->session->flashdata('message'); ?>
                      </div>
                    <?php
                    }
                    ?>
                    <form class="form-primary" action="<?php echo site_url(); ?>login/verify" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      </div>

                      <div class="text-center mt-4">
                        <p>Belum punya Akun? <a href="<?php echo site_url(); ?>register/register_customer" class="text-white"> <u>Daftar disini</u></a></p>
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
    <!-- cdn js ojo diganti!! -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="<?php base_url(); ?>assets/js/theme.js"></script>
  </body>

  </html>