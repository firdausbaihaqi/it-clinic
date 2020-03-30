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
                            <a class="nav-link" href="#">List Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Request History</a>
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
                                        <a href="<?php echo site_url(); ?>dashboard/admin_verify_account" class="list-group-item list-group-item-action d-flex align-items-center">
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

    <div class="row px-5 mx-5">
        <div class="col-md-6">
            <h4>List technician request :</h4>
        </div>
        <div class="col-md-6 d-flex flex-row-reverse">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control border border-tertiary" placeholder="kode pemesanan">
                    <div class="input-group-append">
                        <a class="btn btn-outline-tertiary" href="#" style="padding: 7px 20px; font-size: 12px;">
                            Search</a>
                    </div>
                </div>
            </form>
            <div class="dropdown pr-2">
                <button class="btn btn-sm btn-outline-tertiary dropdown-toggle" type="button" data-toggle="dropdown">
                    Sort by..
                </button>
                <div class="dropdown-menu">
                    <a class="btn dropdown-item" href="list-request-technician.html">status (approved)</a>
                    <a class="btn dropdown-item" href="#">status (not approved)</a>
                    <a class="btn dropdown-item" href="#">tanggal pemesanan</a>
                </div>
            </div>
        </div>
    </div><br><br><br>

    <div class="row mx-5">
        <div class="col md-12">
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

    <div class="row py-5 px-5 mx-5">
        <?php foreach ($request as $rows) { ?>
            <div class="col-md-4 my-3">
                <div class="card shadow-lg" style="width: 20rem;">
                    <img src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" class="card-img-top" height="200px" style="object-fit: cover">
                    <div class="card-body">
                        <p class="h6">Kode Order :</p>
                        <p class="card-text"><?php echo $rows->code_order; ?></p>
                        <p class="h6">Keterangan :</p>
                        <p class="card-text"><?php echo $rows->detail; ?></p><br><br>
                        <center>
                            <?php if ($rows->status == "in_progress") { ?>
                                <a href="#" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#modal_in_progress">Sedang Diperbaiki</a>
                            <?php } else if ($rows->status == "finish") { ?>
                                <a href="#" class="btn btn-sm btn-success mt-1" data-toggle="modal" data-target="#modal_finish">Selesai</a>
                            <?php } ?>
                            <a href="#" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#modal_update_<?php echo $rows->id; ?>">Update</a>
                            <a href="#" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>
                        </center>
                    </div>
                </div>
                <!-- modal -->
                <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_title_6">More details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <img class="rounded" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" height="250px" style="object-fit: cover">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="modal-body">
                                <p class="card-text h6">Kode Order : <?php echo $rows->code_order; ?></p><br>
                                <p class="h6">Keterangan : <?php echo $rows->detail; ?></p><br>
                                <p class="card-text h6">Customer : <?php echo $rows->customer; ?></p>
                                <p class="card-text h6">Technician : <?php echo $rows->technician; ?></p>
                                <p class="card-text h6">Cost : RP <?php echo $rows->price; ?></p><br>
                                <p class="card-text h6">Tanggal Order : <?php echo $rows->date_order; ?></p>
                                <p class="card-text h6">Tanggal Selesai : <?php echo $rows->date_finish; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-primary fade" id="modal_update_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <img class="rounded" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" height="250px" style="object-fit: cover">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="modal-body">
                                <form action="<?php echo site_url('dashboard/admin_update_request' . "/" . $rows->id);?>" method="POST">

                                    <div class="form-group">
                                        <label>Kode Order</label>
                                        <input type="text" class="form-control" name="code_order" id="code_order" value="<?php echo $rows->code_order; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Customer</label>
                                        <input type="text" class="form-control" name="customer" id="customer" value="<?php echo $rows->customer; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Technician</label>
                                        <input type="text" class="form-control" name="technician" id="technician" value="<?php echo $rows->technician; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Pemesanan</label>
                                        <input type="date" class="form-control" name="date_order" id="date_order" value="<?php echo $rows->date_order; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" class="form-control" name="date_finish" id="date_finish" value="<?php echo date('Y-m-d'); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Harga (Dalam Rupiah)</label>
                                        <input type="number" class="form-control" name="price" id="price" value="<?php echo $rows->price; ?>">
                                    </div>

                                    <div class=" form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="detail" id="detail" cols="75" rows="10" placeholder="tulis keluhan anda disini..."><?php echo $rows->detail; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" name="status" id="status">
                                            <option selected value="<?php echo $rows->status; ?>">Pilih Status</option>
                                            <option value="in_progress">Sedang Diperbaiki</option>
                                            <option value="finish">Selesai</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm btn-success btn-block " type="submit">Update</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </div>
        <?php
        } ?>
    </div>

    <!--modal-->
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
                        <h4 class="heading mt-4">Request order masih sedang dikerjakan</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-success fade" id="modal_finish" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                        <h4 class="heading mt-4">Request order sudah selesai</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!--modal-->
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

    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>

</html>