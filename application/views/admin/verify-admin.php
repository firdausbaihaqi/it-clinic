<body>
    <!-- ini navbar -->
    <div class="row my-5 pb-5">
        <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-tertiary py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./"><strong>IT - Clinic</strong></a>
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
                            <a class="nav-link" href="#">Verify User</a>
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
                                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
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
            <h3>Akun Teknisi Baru :</h3>
            <table class="table table-hover table-cards align-items-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unverified_account as $rows2) {
                        if ($rows2->status == 'technician-unverified') {
                    ?>

                            <!-- iki pembates antar item -->
                            <tr class="bg-white">
                                <th scope="row">
                                    <h6 class="h5 font-weight-normal mb-0"><?php echo $rows2->user; ?></h6>
                                </th>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal">Details</a>
                                    <a href="<?php echo site_url('dashboard/admin_verify_account_process' . "/" . $rows2->user . "/" . $rows2->status); ?>" class="btn btn-sm btn-success">Accept</a>
                                    <a href="<?php echo site_url('dashboard/admin_delete_account' . "/" . $rows2->user); ?>" class="btn btn-sm btn-danger">Decline</a>
                                </td>
                            </tr>
                            <tr class="table-divider"></tr>
                            <!-- iki pembates antar item -->
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-1"></div>

    </div>
    <div class="row">

        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3>Akun Customer Baru :</h3>
            <table class="table table-hover table-cards align-items-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unverified_account as $rows3) {
                        if ($rows3->status == 'customer-unverified') {
                    ?>

                            <!-- iki pembates antar item -->
                            <tr class="bg-white">
                                <th scope="row">
                                    <h6 class="h5 font-weight-normal mb-0"><?php echo $rows3->user; ?></h6>
                                </th>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal">Details</a>
                                    <a href="<?php echo site_url('dashboard/admin_verify_account_process' . "/" . $rows3->user . "/" . $rows3->status); ?>" class="btn btn-sm btn-success">Accept</a>
                                    <a href="<?php echo site_url('dashboard/admin_delete_account' . "/" . $rows3->user); ?>" class="btn btn-sm btn-danger">Decline</a>
                                </td>
                            </tr>
                            <tr class="table-divider"></tr>
                            <!-- iki pembates antar item -->
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-1"></div>

    </div>


    <!-- iya heeh delete aja, sama kayak kamu delete kenangan sama dia -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>