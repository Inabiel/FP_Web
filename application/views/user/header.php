<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bengkel Las Laras</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/glyphicon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('node_modules\hover.css\css\hover.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    </script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-laras">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('home') ?>">
                <img src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="" width="30" height="24">
            </a>
            <a href="<?php echo site_url('home'); ?>" class="navbar-brand">Bengkel Las Laras</a>
            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbartop" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbartop">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link hvr-underline-from-left" aria-current="page"
                        href="<?php echo site_url('home'); ?>">Home</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('profil'); ?>">Profil</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('jasa'); ?>">Jasa</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('galeri'); ?>">Galeri</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('shopping_cart'); ?>">Shopping
                        Cart: <?php echo ' ' . $this->cart->total_items() ?> items</a>
                    <a class="nav-link hvr-underline-from-left"
                        href="<?php echo site_url('auth/register'); ?>">Register</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('auth/login'); ?>">Login</a>
                    <a class="nav-link hvr-underline-from-left" href="<?php echo site_url('auth/logout') ?>">Logout</a>
                    <?php if ($this->session->userdata('username')) { ?>
                    <p class="vertical-divider my-auto ps-lg-1 pe-lg-1 me-lg-1" style="font-family:arial;"> Welcome,
                        <span class="text-success"><?php echo $this->session->userdata('username') ?></span>
                    </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>