<body>
    <!-- ini navbar -->
    <div class="row my-5 pb-5">
        <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-tertiary py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url();?>dashboard"><strong>IT - Clinic</strong></a>
                </button>

                <div class="navbar-collapse" id="navbar_main">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">List User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Request History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url();?>dashboard/admin_verify_account">Verify User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#" id="" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell">
                                    <span class="badge badge-danger text-light"><?php echo $notify; ?></span>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">User Pending List</h5>
                                </div>
                                <div class="list-group">
                                    <?php foreach ($unverified_account as $rows) {
                                    ?>
                                        <a href="<?php echo site_url();?>dashboard/admin_verify_account" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="list-group-content">
                                                <div class="list-group-heading"><?php echo $rows->user; ?></div>
                                            </div>
                                        </a>
                                    <?php
                                    } ?>
                                </div>
                            </div>
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
            <h4 class="mx-auto">User Details :</h4>
        </div>

    </div>

    <div class="row py-5 mx-5">


        <div class="col-md-12">


            <div class="card w-50 shadow-lg mx-auto" style="width: 18rem;">
                <?php foreach ($unverified_account_details as $rows2) {
                ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo base_url(); ?>data/profile/<?php echo $rows2->image; ?>" class="card-img-top" alt="<?php echo base_url(); ?>assets/img/empty.png">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="card-body">
                        <h5 class="card-title">Name : <?php echo $rows2->fullname; ?></h5>
                        <p class="h6">Email : <?php echo $rows2->email; ?></p>
                        <p class="h6">Address : <?php echo $rows2->address; ?></p>
                        <p class="h6">Phone Number : <?php echo $rows2->phone; ?></p>
                        <p class="h6">Last Education : <?php echo $rows2->education; ?></p>
                        <br><br>
                        <center>
                            <a href="<?php echo site_url('dashboard/admin_verify_account'); ?>" class="btn btn-sm btn-info">Back</a>
                        </center>
                    </div>
                <?php
                }
                ?>
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

</body>

</html>