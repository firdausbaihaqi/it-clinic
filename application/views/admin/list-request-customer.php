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
            <h4>List customer request :</h4>
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
        <?php foreach ($request as $rows2) { ?>
            <div class="col-md-4 my-3">
                <div class="card shadow-lg" style="width: 20rem;">
                    <img src="<?php echo base_url(); ?>data/order/<?php echo $rows2->image; ?>" class="card-img-top" height="200px" style="object-fit: cover">
                    <div class="card-body">
                        <p class="h6">Kode Order :</p>
                        <p class="card-text"><?php echo $rows2->code_order; ?></p>
                        <p class="h6">Keterangan :</p>
                        <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="3" style="resize: none" 
                        placeholder="<?php echo $rows2->detail; ?>"></textarea>

                        <br><br>
                        <center>
                            <?php if ($rows2->status == "in_queue") { ?>
                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_approve_<?php echo $rows2->id; ?>">Approve</a>
                            <?php } else if ($rows2->status == "avaiable") { ?>
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_approved">Approved</a>
                            <?php } ?>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_cancel_<?php echo $rows2->id; ?>">Tolak</a>
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows2->id; ?>">Details</a>
                        </center>
                    </div>
                </div>
                <!-- modal -->
                <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                        <img class="rounded my-3" src="<?php echo base_url(); ?>data/order/<?php echo $rows2->image; ?>" height="250px" style="object-fit: cover">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="modal-body">
                                <p class="card-text h6">Kode Order : <?php echo $rows2->code_order; ?></p><br>
                                <p class="h6">Keterangan :</p>
                                <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="5" style="resize: none" 
                                placeholder="<?php echo $rows2->detail; ?>"></textarea>
                                <br>
                                <p class="card-text h6">Customer : <?php echo $rows2->customer; ?></p>
                                <p class="card-text h6">Cost : RP <?php echo $rows2->price; ?></p><br>
                                <p class="card-text h6">Tanggal Order : <?php echo $rows2->date_order; ?></p>
                                <p class="card-text h6">Tanggal Selesai : <?php echo $rows2->date_finish; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-warning fade" id="modal_approve_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Approve Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="fas fa-exclamation-triangle fa-4x"></i>
                                    <h4 class="heading mt-4">Anda yakin ingin me-approve order ?</h4>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo site_url('dashboard/admin_approve_request' . "/" . $rows2->id . "/" . $rows2->customer); ?>" class="btn btn-sm btn-secondary">Ya</a>
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-danger fade" id="modal_cancel_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tolak Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="fas fa-exclamation-triangle fa-4x"></i>
                                    <h4 class="heading mt-4">Anda yakin ingin menolak order ?</h4>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo site_url('dashboard/admin_cancel_request' . "/" . $rows2->id . "/" . $rows2->customer . "/" . $rows2->image); ?>" class="btn btn-sm btn-secondary">Ya</a>
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
    <div class="modal modal-primary fade" id="modal_approved" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                        <h4 class="heading mt-4">Anda sudah mengapprove request order ini</h4>
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