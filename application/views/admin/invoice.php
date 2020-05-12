<body>
    <!-- ini navbar -->
    <div class="row my-5 pb-5">
        <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-tertiary py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>dashboard"><strong>IT - Clinic</strong></a>
                </button>
                <div class="navbar-collapse" id="navbar_main">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_shipment">Request Pengiriman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_history">Request History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_account">List User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_verify_account">Verify User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#" id="" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell">
                                    <span class="badge badge-danger text-light"><?php echo ($notify_account_number + $notify_shipment_number); ?></span>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">User Pending List</h5>
                                </div>
                                <div class="list-group">
                                    <?php foreach ($unverified_account as $rows) {
                                    ?>
                                        <a href="<?php echo site_url(); ?>dashboard/admin_verify_account" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="list-group-content">
                                                <div class="list-group-heading"><?php echo $rows->user; ?></div>
                                            </div>
                                        </a>
                                    <?php
                                    } ?>
                                </div>
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">Request Pengiriman List</h5>
                                </div>
                                <div class="list-group">
                                    <?php foreach ($notify_shipment_list as $rows) {
                                    ?>
                                        <a href="<?php echo site_url(); ?>dashboard/admin_view_shipment" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="list-group-content">
                                                <div class="list-group-heading"><?php echo $rows->code_order . " - " . $rows->customer ?></div>
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

    <!-- invoice  -->
    <div class="container">
        <div class="row vh-100" id="section-to-print">
            <div class="row h-25 w-100 ">
                <div class="col-md-4  ">
                    <img src="
                <?php echo base_url(); ?>assets/img/stetoscope-logo.png">
                </div>
                <div class="col-md-8 text-right ">
                    <p class="d-flex flex-column ">
                        <h5>Jalan Sukarno Hatta No. 12</h5>
                        <h6>Karangbesuki, Malang</h6>
                        <h6>441214</h6>
                        <h6>Jawa Timur</h6>
                    </p>
                </div>
            </div>
            <div class="row h-25 w-100  ">
                <div class="col-md-3   ">
                    <div class="ml-4">
                        <p>
                            <?php foreach ($customer as $rows) { ?>
                                <h6 class="text-primary">Atas Nama</h6>
                                <h6><?php echo $rows->fullname; ?></h6>
                                <h6><?php echo $rows->address; ?></h6>
                                <h6><?php echo $rows->phone; ?></h6>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3  ">
                    <div class="ml-4">
                        <p>
                            <?php foreach ($request as $rows) { ?>
                                <h6 class="text-primary">Tanggal Selesai : </h6>
                                <h6><?php echo $rows->date_finish; ?></h6>
                                <h6 class="text-primary">Garansi Sampai :</h6>
                                <h6>
                                    <?php
                                    $date = $rows->date_finish;
                                    $date = strtotime($date);
                                    $date = strtotime("+7 day", $date);
                                    echo date('Y-m-d', $date);;
                                    ?>
                                </h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3  ">
                    <div class="ml-4">
                        <p>
                            <h6 class="text-primary">Nomer Pesanan : </h6>
                            <h6><?php echo $rows->code_order; ?></h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3   text-right">
                    <p>
                        <h6 class="text-primary">Total Biaya : </h6>
                        <h1>RP <?php echo $rows->price; ?></h1>
                    </p>
                </div>
                <hr class="bg-primary" style="width: 100%; height: 2px;" />
            </div>
            <div class="row h-25 w-100  ">

                <div class="col-md-3 ">
                    <div class="ml-4">
                        <p>
                            <h6 class="text-primary">Keterangan : </h6>
                            <h6><?php echo $rows->detail; ?></h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3  ">
                    <div class="ml-4">
                        <p>
                            <h6 class="text-primary">Harga Satuan </h6>
                            <h6>RP <?php echo $rows->price; ?></h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3  ">
                    <div class="ml-4">
                        <p>
                            <h6 class="text-primary">Jumlah </h6>
                            <h6>1</h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3  ">
                    <div class="text-right">
                        <p>
                            <h6 class="text-primary">Biaya </h6>
                            <h6>RP <?php echo $rows->price; ?></h6>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row h-25 w-100  ">

                <div class="col-md-6 w-100 "> </div>
                <div class="col-md-3 h-50 border">
                    <div class="ml-4">
                        <p>
                            <h6 class="text-primary">TTD Customer </h6>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 h-50 border">
                    <div class="text-right">
                        <p>
                            <h6 class="text-primary">TTD Admin </h6>
                        </p>
                    </div>
                </div>
            <?php } ?>
            </div>

        </div>
    </div>

    <div class="row p-5">
        <button class="btn btn-block btn-primary" onclick="window.print()">Print Invoice</button>
    </div>
    <!-- invoice  -->
    <!-- footer -->
    <footer class="pt-5 mt-5 pb-3 footer footer-dark bg-tertiary">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="pr-lg-5">
                        <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
                        <p>IT-Clinic didesain dan di program untuk menjadi sebuah platform yang menghubungkan antara Customer dengan Teknisi,
                            juga menjamin keamanan dan kepuasan Customer.</p>
                    </div>
                </div>

                <!-- space kosong -->
                <div class="col-4"></div>
                <!-- space kosong -->

                <div class="col-2">
                    <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Navigation</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="<?php echo base_url(); ?>dashboard">List Request</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_view_history">Request History</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_view_account">List User</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_verify_account">Verify User</a></li>
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

    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>

</html>