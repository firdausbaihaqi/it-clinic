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
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
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
        <div class="com-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>Akun Teknisi Baru :</h3>
                    <table class="table table-hover table-cards align-items-center" id="technician">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($unverified_account as $rows2) {
                                if ($rows2->status == 'technician-unverified') {
                            ?>
                                    <!-- iki pembates antar item -->
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="<?php echo base_url(); ?>data/profile/<?php echo $rows2->image; ?>" width="100px" height="100px" style="object-fit: cover">
                                        </td>
                                        <td>
                                            <h6><?php echo $rows2->user; ?></h6>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_detail_<?php echo $rows2->id; ?>">Detail</button>
                                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_accept_<?php echo $rows2->id; ?>">Accept</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_<?php echo $rows2->id; ?>">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- iki pembates antar item -->
                                    <!-- modal -->
                                    <div class="modal modal-light fade" id="modal_detail_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $this->load->model('admin_model');
                                                    $unverified_account_details = $this->admin_model->get_unverified_account_details($rows2->user, $rows2->status);
                                                    ?>
                                                    <?php foreach ($unverified_account_details as $rows_technician_detail) {
                                                    ?>
                                                        <div class="d-flex justify-content-center mb-5">
                                                            <img class="rounded-circle" src="<?php echo base_url(); ?>data/profile/<?php echo $rows_technician_detail->image; ?>" height="250px" width="250px" style="object-fit: cover">
                                                        </div>
                                                        <p class="h6">Name : <?php echo $rows_technician_detail->fullname; ?></p>
                                                        <p class="h6">Email : <?php echo $rows_technician_detail->email; ?></p>
                                                        <p class="h6">Address : <?php echo $rows_technician_detail->address; ?></p>
                                                        <p class="h6">Phone Number : <?php echo $rows_technician_detail->phone; ?></p>
                                                        <p class="h6">Last Education : <?php echo $rows_technician_detail->education; ?></p>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-success fade" id="modal_accept_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                                        <i class="fa fa-check-circle fa-4x"></i>
                                                        <h4 class="heading mt-4">Apa anda yakin akan memvalidasi akun ini ?</h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo site_url('dashboard/admin_verify_account_process' . "/" . $rows2->user . "/" . $rows2->status); ?>" class="btn btn-sm btn-light">Yakin</a>
                                                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-danger fade" id="modal_delete_<?php echo $rows2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                                        <i class="fa fa-check-circle fa-4x"></i>
                                                        <h4 class="heading mt-4">Apa anda yakin akan menghapus akun ini ?</h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo site_url('dashboard/admin_delete_account' . "/" . $rows2->user . "/" . $rows2->image); ?>" class="btn btn-sm btn-light">Yakin</a>
                                                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                            <?php
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>Akun Customer :</h3>
                    <table class="table table-hover table-cards align-items-center" id="customer">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($unverified_account as $rows3) {
                                if ($rows3->status == 'customer-unverified') {
                            ?>
                                    <!-- iki pembates antar item -->
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="<?php echo base_url(); ?>data/profile/<?php echo $rows3->image; ?>" width="100px" height="100px" style="object-fit: cover">
                                        </td>
                                        <td>
                                            <h6><?php echo $rows3->user; ?></h6>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_detail_<?php echo $rows3->id; ?>">Detail</button>
                                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_accept_<?php echo $rows3->id; ?>">Accept</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal_delete_<?php echo $rows3->id; ?>">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- iki pembates antar item -->
                                    <!-- modal -->
                                    <div class="modal modal-light fade" id="modal_detail_<?php echo $rows3->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $this->load->model('admin_model');
                                                    $unverified_account_details = $this->admin_model->get_unverified_account_details($rows3->user, $rows3->status);
                                                    ?>
                                                    <?php foreach ($unverified_account_details as $rows_customer_detail) {
                                                    ?>
                                                        <div class="d-flex justify-content-center mb-5">
                                                            <img class="rounded-circle" src="<?php echo base_url(); ?>data/profile/<?php echo $rows_customer_detail->image; ?>" height="250px" width="250px" style="object-fit: cover">
                                                        </div>
                                                        <p class="h6">Name : <?php echo $rows_customer_detail->fullname; ?></p>
                                                        <p class="h6">Email : <?php echo $rows_customer_detail->email; ?></p>
                                                        <p class="h6">Address : <?php echo $rows_customer_detail->address; ?></p>
                                                        <p class="h6">Phone Number : <?php echo $rows_customer_detail->phone; ?></p>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-success fade" id="modal_accept_<?php echo $rows3->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                                        <i class="fa fa-check-circle fa-4x"></i>
                                                        <h4 class="heading mt-4">Apa anda yakin akan memvalidasi akun ini ?</h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo site_url('dashboard/admin_verify_account_process' . "/" . $rows3->user . "/" . $rows2->status); ?>" class="btn btn-sm btn-light">Yakin</a>
                                                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-danger fade" id="modal_delete_<?php echo $rows3->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
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
                                                        <i class="fa fa-check-circle fa-4x"></i>
                                                        <h4 class="heading mt-4">Apa anda yakin akan menghapus akun ini ?</h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?php echo site_url('dashboard/admin_delete_account' . "/" . $rows3->user . "/" . $rows2->image); ?>" class="btn btn-sm btn-light">Yakin</a>
                                                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                            <?php
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>


    <!-- ini body -->

    <!-- footer -->
    <footer class="pt-5 pb-3 footer footer-dark bg-tertiary">
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

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    <script>
        $(document).ready(function() {
            $('#technician').DataTable();
            $('#customer').DataTable();
        });
    </script>

</body>

</html>