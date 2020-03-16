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
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/customer_add_request">Add Request</a>
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

    <div>

        <div class="row">
            <h4 class="mx-auto">Add request :</h4>
        </div>

    </div>

    <div class="row py-5 mx-5">


        <div class="col-md-12">


            <div class="card w-50 shadow-lg mx-auto" style="width: 18rem;">
                <img src="<?php echo base_url(); ?>assets/img/perbaikan1.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <form class="form-primary" action="<?php echo site_url(); ?>dashboard/customer_add_request_process" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class=" form-group col-sm-12">
                                <label>Foto Perangkat</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label>Tanggal Pemesanan</label>
                                <input type="date" class="form-control" name="date_order" id="date_order" value="<?php echo date('Y-m-d');?>" readonly>
                            </div>

                            <div class=" form-group col-sm-12">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="detail" id="detail" cols="75" rows="10" placeholder="tulis keluhan anda disini..."></textarea>
                            </div>
                        </div>

                        <button class="btn btn-block btn-lg bg-success mt-4 text-light" type="submit">Daftar</button>
                    </form>
                </div>
            </div>



        </div>

    </div>



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