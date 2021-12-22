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

    <div class="row mx-5">
        <div class="col">
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

    <!-- table -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>Shipment Request :</h3>
                    <table class="table table-hover table-cards align-items-center" id="shipment">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Kode Order</th>
                                <th>Customer</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($request as $rows) {
                            ?>
                                <tr>
                                    <td>
                                        <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="100px" height="100px" style="object-fit: cover">
                                    </td>
                                    <td>
                                        <?php echo $rows->code_order; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows->customer; ?>
                                    </td>
                                    <td>
                                        <?php $this->load->model('admin_model');
                                        $address = $this->admin_model->get_verified_account_details($rows->customer, 'customer');
                                        ?>
                                        <?php foreach ($address as $rows2) {
                                            echo $rows2->address;
                                        } ?>
                                    </td>
                                    <td>
                                        <?php if ($rows->shipment == "in_request") { ?>
                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_in_request_<?php echo $rows->id; ?>"> <i class="fas fa-truck"></i> Kirim Sekarang</a>
                                        <?php } else if ($rows->shipment == "in_delivery") { ?>
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_in_delivery_<?php echo $rows->id; ?>"> <i class="fas fa-truck"></i> Dalam Pengiriman</a>
                                        <?php } else if ($rows->shipment == "delivered") { ?>
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_delivered_<?php echo $rows->id; ?>"> <i class="fas fa-truck"></i> Sudah Sampai</a>
                                        <?php } ?>
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>
                                        <!-- modal -->
                                        <div class="modal modal-warning fade" id="modal_in_request_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="py-3 text-center">
                                                            <i class="fas fa-shipping-fast fa-4x"></i>
                                                            <h4 class="heading mt-4">lakukan pengiriman sekarang?</h4>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm btn-light" href="<?php echo site_url(); ?>dashboard/admin_process_shipment/<?php echo $rows->id; ?>/<?php echo $rows->shipment; ?>">Kirim</a>
                                                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal modal-primary fade" id="modal_in_delivery_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="py-3 text-center">
                                                            <i class="fas fa-shipping-fast fa-4x"></i>
                                                            <h4 class="heading mt-4">Pengiriman sudah sampai?</h4>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm btn-light" href="<?php echo site_url(); ?>dashboard/admin_process_shipment/<?php echo $rows->id; ?>/<?php echo $rows->shipment; ?>">Sudah</a>
                                                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal modal-success fade" id="modal_delivered_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="py-3 text-center">
                                                            <i class="fas fa-shipping-fast fa-4x"></i>
                                                            <h4 class="heading mt-4">Pengiriman telah sampai :)</h4>
                                                            <a href="<?php echo site_url(); ?>dashboard/admin_save_history/<?php echo $rows->id; ?>" class="btn btn-block btn-light">Simpan ke history</a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="modal-title h6" id="modal_title_6">More details</div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <div class="d-flex justify-content-center">
                                                                <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body mt-4">
                                                        <p class="card-text h6">Kode Order : <?php echo $rows->code_order; ?></p>
                                                        <p class="card-text h6">Customer : <?php echo $rows->customer; ?></p>
                                                        <p class="card-text h6">Teknisi : <?php echo $rows->technician; ?></p>
                                                        <p class="card-text h6">Keterangan : </p>
                                                        <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="6" placeholder="<?php echo $rows->detail; ?>"></textarea><br>
                                                        <p class="card-text h6">Tanggal Order : <?php echo $rows->date_order; ?></p>
                                                        <p class="card-text h6">Tanggal Selesai : <?php echo $rows->date_finish; ?></p>
                                                        <p class="card-text h6">Biaya Servis : RP <?php echo $rows->price; ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br><br><br>
    <!-- table -->

    <!-- footer -->
    <footer class="pt-5 pb-3 footer footer-dark bg-tertiary">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="pr-lg-5">
                        <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
                        <p>IT-Clinic didesain dan di program untuk menjadi sebuah platform yang menghubungkan antara Customer dengan Teknisi, juga menjamin keamanan dan kepuasan Customer.</p>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

    <script src="<?php base_url(); ?>assets/js/theme.js"></script>
    <script>
        $(document).ready(function() {
            $('#shipment').DataTable();
        });
    </script>
</body>

</html>