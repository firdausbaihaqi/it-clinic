<!-- iki dihapus, load header sng anyar -->
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TEST</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">


    <style>
        .row {
            padding: 0px;
            margin: 0px;
        }

        .col-9,
        .col-2 {
            padding: 0px;
            margin: 0px;
        }

        body {
            padding: 0px;
            margin: 0px;
        }

        .container-fluid {
            height: 100vh;
            padding: 0px;
            margin: 0px;
            background-size: cover;
        }
    </style>

    <!-- iki dihapus, load header sng anyar -->
</head>

<body class="deep-purple accent-2">

    <div class="container-fluid">

        <div class="row vh-100 vw-100">
            <!-- start of col 1 SIDEBAR -->
            <div class="col-1 deep-purple accent-2 vh-100">
                <!-- sidenav -->
                <div class="d-flex flex-column text-center">

                    <div class="pt-5">
                        <div class="btn p-2 btn-lg shadow-none">
                            <a href="<?php echo site_url(); ?>dashboard/customer" class="text-white-50 ">
                                <i class="fas fa-home fa-2x "></i>
                                <p>Home</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_profile" class="text-white">
                                <i class="fas fa-user fa-2x "></i>
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_request" class="text-white-50 ">
                                <i class="fas fa-receipt fa-2x "></i>
                                <p>Request</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_history" class="text-white-50 ">
                                <i class="fas fa-file-invoice-dollar fa-2x "></i>
                                <p>History</p>
                            </a>
                        </div>
                    </div>
                    <div class="pt-5 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>login/logout " class="text-white ">
                                <i class="fas fa-sign-out-alt fa-2x "></i>
                                <p>LogOut</p>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- SideNav-->

                <!-- Sidebar navigation -->
                <div id="slide-out " class="side-nav expand fixed ">
                    <ul class="custom-scrollbar ">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper waves-light ">
                                <a href="# "><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png " class="img-fluid flex-center "></a>
                            </div>
                        </li>
                        <!--/. Logo -->
                        <!--Social-->
                        <li>
                            <ul class="social ">
                                <li><a href="# " class="icons-sm fb-ic "><i class="fab fa-facebook-f "> </i></a></li>
                                <li><a href="# " class="icons-sm pin-ic "><i class="fab fa-pinterest "> </i></a></li>
                                <li><a href="# " class="icons-sm gplus-ic "><i class="fab fa-google-plus-g "> </i></a></li>
                                <li><a href="# " class="icons-sm tw-ic "><i class="fab fa-twitter "> </i></a></li>
                            </ul>
                        </li>
                        <!--/Social-->
                        <!--Search Form-->
                        <li>
                            <form class="search-form " role="search ">
                                <div class="form-group md-form mt-0 pt-1 waves-light ">
                                    <input type="text " class="form-control " placeholder="Search ">
                                </div>
                            </form>
                        </li>
                        <!--/.Search Form-->
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion ">
                                <li><a class="collapsible-header waves-effect arrow-r "><i class="fas fa-chevron-right "></i> Submit
                                        blog<i class="fas fa-angle-down rotate-icon "></i></a>
                                    <div class="collapsible-body ">
                                        <ul>
                                            <li><a href="# " class="waves-effect ">Submit listing</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Registration form</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="collapsible-header waves-effect arrow-r "><i class="far fa-hand-pointer "></i>
                                        Instruction<i class="fas fa-angle-down rotate-icon "></i></a>
                                    <div class="collapsible-body ">
                                        <ul>
                                            <li><a href="# " class="waves-effect ">For bloggers</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">For authors</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="collapsible-header waves-effect arrow-r "><i class="fas fa-eye "></i> About<i class="fas fa-angle-down rotate-icon "></i></a>
                                    <div class="collapsible-body ">
                                        <ul>
                                            <li><a href="# " class="waves-effect ">Introduction</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Monthly meetings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="collapsible-header waves-effect arrow-r "><i class="far fa-envelope "></i> Contact me<i class="fas fa-angle-down rotate-icon "></i></a>
                                    <div class="collapsible-body ">
                                        <ul>
                                            <li><a href="# " class="waves-effect ">FAQ</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Write a message</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">FAQ</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Write a message</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">FAQ</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Write a message</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">FAQ</a>
                                            </li>
                                            <li><a href="# " class="waves-effect ">Write a message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                    <div class="sidenav-bg rgba-blue-strong "></div>
                </div>
                <!--/. Sidebar navigation -->
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
                            <!-- isi profil -->
                            <div class="card ">

                                <h5 class="card-header deep-purple accent-2 white-text text-center py-4">
                                    <strong>Profil</strong>
                                </h5>

                                <!--Card content-->
                                <div class="card-body px-lg-5 pt-0">
                                    <?php foreach ($profile as $rows) { ?>
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

                                            <!-- Alamat -->
                                            <div class="md-form mt-0">
                                                <input type="text" id="materialRegisterFormAddress" class="form-control" placeholder="<?php echo $rows->address; ?>" readonly>
                                                <label for="materialRegisterFormAddress">Alamat</label>
                                            </div>


                                            <!-- Telepon -->
                                            <div class="md-form">
                                                <input type="text" id="materialRegisterFormPhone" class="form-control" placeholder="<?php echo $rows->phone; ?>" readonly>
                                                <label for="materialRegisterFormPhone">Nomor Telepon</label>
                                            </div>

                                        </form>
                                        <!-- Edit button -->
                                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect" data-toggle="modal" data-target="#modalContactForm">
                                            Edit Profile
                                        </button>
                                        <!-- Form -->
                                        <!-- modal -->
                                        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-notify modal-info" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h4 class="modal-title text-white w-100">Edit Profile</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mx-3">
                                                        <form class="form-primary" action="<?php echo site_url(); ?>dashboard/customer_edit_picture/<?php echo $rows->image; ?>" enctype="multipart/form-data" method="POST">
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
                                                        <form class="form-primary" action="<?php echo site_url(); ?>dashboard/customer_edit_profile/<?php echo $rows->user; ?>" method="POST">
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

                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center">
                                                        <button class="btn btn-info" type="submit">Update <i class="fas fa-paper-plane-o ml-1"></i></button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                    <?php } ?>
                                </div>

                            </div>
                            <!--  isi profil -->
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

</body>

</html>