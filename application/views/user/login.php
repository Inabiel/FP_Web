<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Log In</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/datepicker/daterangepicker.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('css/main.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title text-center">LOGIN</h2>
                    <?php
                    if($this->session->flashdata('errors') !='')
                    {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('errors');
                        echo '</div>';
                    }
                    ?>
                    <form action="<?php echo base_url('index.php/Auth/signin') ?>" method="post">
                        <div class="row row-space">
                            <div class="col-6 mx-auto">
                                <div class="input-group">
                                    <label class="label mx-auto">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6 mx-auto">
                                <div class="input-group">
                                    <label class="label mx-auto">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15 text-center">
                            <button class="btn btn--radius-2 btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<? php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <!-- Vendor JS-->
    <script src="<? php echo base_url('vendor/select2/select2.min.js') ?>"></script>
    <script src="<? php echo base_url('vendor/datepicker/moment.min.js') ?>"></script>
    <script src="<? php echo base_url('vendor/datepicker/daterangepicker.js') ?>"></script>

    <!-- Main JS-->
    <script src="<? php echo base_url('js/global.js') ?>"></script>

</body>

</html>
<!-- end document-->