<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bengkel Las Laras</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-laras">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('home')?>">
                <img src="<?php echo base_url('assets/images/logo.svg');?>" alt="" width="30" height="24">
            </a>
            <a href="" class="navbar-brand">Bengkel Las Laras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('home'); ?>">Home</a>
                    <a class="nav-link" href="<?php echo site_url('home'); ?>">Profil</a>
                    <a class="nav-link" href="<?php echo site_url(); ?>">Jasa</a>
                    <a class="nav-link" href="<?php echo site_url(); ?>">Galeri</a>
                    <a class="nav-link" href="<?php echo site_url(); ?>">Register</a>
                    <a class="nav-link" href="<?php echo site_url(); ?>">Shopping Cart</a>
                    <a class="nav-link" href="<?php echo site_url('auth/login'); ?>">Login</a>
                    <a class="nav-link" href="<?php echo site_url('auth/logout') ?>">Logout</a>
                    <?php if($this->session->userdata('username')) { ?>
                    <p class="vertical-divider my-auto ps-lg-1 pe-lg-1 me-lg-1"> Welcome,
                        <span class="text-success"><?php echo $this->session->userdata('username') ?></span>
                    </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>