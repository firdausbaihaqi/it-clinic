<body class="success-color">

    <div class="container-fluid">

        <div class="row vh-100 vw-100">
            <!-- start of col 1 SIDEBAR -->
            <div class="col-1 success-color vh-100">
                <!-- sidenav -->
                <div class="d-flex flex-column text-center">

                    <div class="pt-5">
                        <div class="btn p-2 btn-lg shadow-none">
                            <a href="<?php echo site_url(); ?>dashboard/technician" class="text-white-50">
                                <i class="fas fa-home fa-2x "></i>
                                <p>Home</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_profile" class="text-white">
                                <i class="fas fa-user fa-2x "></i>
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_accepted_request" class="text-white-50">
                                <i class="fas fa-receipt fa-2x "></i>
                                <p>Accepted Request</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_history" class="text-white-50 ">
                                <i class="fas fa-file-invoice-dollar fa-2x "></i>
                                <p>History</p>
                            </a>
                        </div>
                    </div>
                    <div class="pt-5 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>login/logout" class="text-white ">
                                <i class="fas fa-sign-out-alt fa-2x "></i>
                                <p>LogOut</p>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- SideNav-->

                <!-- end of col-1 -->
            </div>
            <!-- end of col-1 SIDEBAR-->
            <!-- start of col-9 -->
            <div class="col-9 vh-100 ">
                <article class="view jarallax" style="background-image: url( '<?php echo base_url(); ?>assets/new/bg-white-rounded.png'); background-repeat: no-repeat;
                 background-position: center; background-size: 120% 100%;">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="height: 100%;">
                            <?php foreach ($profile as $rows) { ?>
                                <!-- isi profil -->
                                <div class="card ">

                                    <h5 class="card-header success-color white-text text-center py-4">
                                        <strong>Profil</strong>
                                    </h5>

                                    <!--Card content-->
                                    <div class="card-body px-lg-5 pt-0">

                                        <!-- Form -->
                                        <form class="text-center" action="#">
                                            <center>
                                                <img class="my-3" src="<?php echo base_url(); ?>data/profile/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                                            </center>
                                            <div class="form-row">
                                                <div class="col">
                                                    <!--  Username -->
                                                    <div class="md-form">
                                                        <input type="text" id="materialRegisterFormFirstName" class="form-control" placeholder="<?php echo $rows->user; ?>" readonly>
                                                        <label for="materialRegisterFormFirstName">Username</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- Nama -->
                                                    <div class="md-form">
                                                        <input type="email" id="materialRegisterFormLastName" class="form-control" placeholder="<?php echo $rows->fullname; ?>" readonly>
                                                        <label for="materialRegisterFormLastName">Nama</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edukasi -->
                                            <div class="md-form mt-0">
                                                <input type="text" id="materialRegisterFormEducation" class="form-control" placeholder="<?php echo $rows->education; ?>" readonly>
                                                <label for="materialRegisterFormEducation">Pendidikan terakhir</label>
                                            </div>


                                            <!-- Telepon -->
                                            <div class="md-form">
                                                <input type="text" id="materialRegisterFormPhone" class="form-control" placeholder="<?php echo $rows->phone; ?>" readonly>
                                                <label for="materialRegisterFormPhone">Nomor Telepon</label>
                                            </div>


                                            <!-- Edit button -->



                                        </form>
                                        <!-- Form -->
                                        <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect" data-toggle="modal" data-target="#modalContactForm">
                                            Edit Profile
                                        </button>
                                    </div>
                                    <!-- modal -->
                                    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-notify modal-success" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center success-color">
                                                    <h4 class="modal-title text-white w-100">Edit Profile</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body mx-3">
                                                    <form class="form-primary" action="<?php echo site_url(); ?>dashboard/technician_edit_picture/<?php echo $rows->image; ?>" enctype="multipart/form-data" method="POST">
                                                        <div class=" form-group">
                                                            <label>Foto Profile</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                                                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-block btn-md btn-success" type="submit">Upload</button>
                                                        <br><br>
                                                    </form>
                                                    <form class="form-primary" action="<?php echo site_url(); ?>dashboard/technician_edit_profile/<?php echo $rows->user; ?>" method="POST">
                                                        <div class="md-form my-0">
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <div class="md-form">
                                                                        <input type="text" class="form-control" id="user" name="user" value="<?php echo $rows->user; ?>" required>
                                                                        <label for="materialRegisterFormFirstName">Username</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="md-form">
                                                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $rows->fullname; ?>" required>
                                                                        <label for="materialRegisterFormLastName">Nama</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="md-form">
                                                            <input type="password" id="password" name="password" class="form-control validate" value="<?php echo $rows->password; ?>" required>
                                                            <label data-error="wrong" data-success="ok" for="form30">Password</label>
                                                        </div>

                                                        <div class="md-form">
                                                            <input type="email" id="email" name="email" class="form-control validate" value="<?php echo $rows->email; ?>" required>
                                                            <label data-error="wrong" data-success="ok" for="form29">email</label>
                                                        </div>

                                                        <div class="md-form">
                                                            <input type="text" id="address" name="address" class="form-control validate" value="<?php echo $rows->address; ?>" required>
                                                            <label data-error="wrong" data-success="ok" for="form32">Alamat</label>
                                                        </div>

                                                        <div class="md-form">
                                                            <input type="text" id="phone" name="phone" class="form-control validate" value="<?php echo $rows->phone; ?>" required>
                                                            <label data-error="wrong" data-success="ok" for="form31">Nomor telepon</label>
                                                        </div>

                                                        <div class="md-form">
                                                            <span>Pendidikan terakhir</span>
                                                            <select class="form-control" id="education" name="education" required>
                                                                <option value="" disabled>Pilih jenjang pendidikan</option>
                                                                <option value="SMA/SMK">SMA/SMK</option>
                                                                <option value="D1/D2">D1/D2</option>
                                                                <option value="D3">D3</option>
                                                                <option value="S1">S1</option>
                                                            </select>
                                                        </div>

                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn btn-success" type="submit">Update </button>
                                                    <button class="btn btn-outline-success" data-dismiss="modal">Kembali</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                </div>
                                <!--  isi profil -->
                            <?php } ?>
                        </div>
                        <div class="col-md-2"></div>
                    </div>



                </article>
            </div>

            <!-- end of col-9 -->
            <div class="col-2 white ">
                <div class="row blue-gradient d-flex flex-column" style="height: 100%;">
                    <center>
                        <h4 class="text-white pt-5">put your Ads here</h4>
                    </center>
                </div>

            </div>




        </div>
    </div>
    </div>


    </div>


    <!-- jQuery -->
    <script type=" text/javascript " src="<?php echo base_url(); ?>assets/new/js/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/mdb.min.js "></script>
    <!-- Datatable Javascript -->
    <script src="<?php echo base_url(); ?>assets/new/js/addons/datatables.min.js" type="text/javascript"></script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript ">
        $(document).ready(function() {
            // SideNav Button Initialization
            $(".button-collapse ").sideNav({
                slim: true,
            });
        });

        $('#inputGroupFile02').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#customer').DataTable();
        });
    </script>

</body>

</html>