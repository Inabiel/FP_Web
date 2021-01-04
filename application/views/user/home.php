<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php $this->load->view("user/header") ?>
    <section class="container-fluid text-center mt-3" id="header-laras">
        <div class="container width-laras">
            <div class="header-title">
                <div style="color:#FD5D14;font-size: 120px;">Bengkel Las Laras</div>
                <h1>Menerima Jasa Pembuatan : </h1>
            </div>
        </div>
    </section>
    <section class="container-fluid text-center title-laras">
        <h1>Bengkel Las Laras</h1>
    </section>

    <div class="d-flex justify-content-center text-center">
        <div class="hubungi">
            <h4>Hubungi Kami</h4>
        </div>
    </div>
    <section class="container-fluid profil">
        <div class="row justify-content-start">
            <div class="col-6 logo-profil">
            </div>
            <div class="col-6 deskripsi text-center">
                <h1 style="color: #FD5D14;">Profil</h1>
                <h4 style="color: #FD5D14;">Bengkel Las Laras</h4>
                Bengkel Las Laras adalah penyedia jasa bengkel las murah di Kabupaten Sleman dengan pelayanan terbaik. di samping dengan kualitas pelayanan terbaik, bengkel las ini memberikan harga las termurah.
                Bengkel las Laras menerima berbagai permintaan seperti pembuatan pagar, pembuatan canopy, pembuatan tralis,
                <a href="<?php echo base_url(); ?>profil" style="color: #FD5D14;text-decoration:none;">Selengkapnya</a>
            </div>
        </div>
    </section>
    <div class="container-fluid benefit">
        <div class="row justify-content-evenly">
            <div class="col-3 text-center">
                <a href="#">
                    <span class="glyphicon glyphicon-tags"></span>
                </a>
                <h4 class="title-widget">Bengkel Las Laras</h4>
            </div>
            <div class="col-3 text-center">
                <a href="#">
                    <span class="glyphicon glyphicon-tags"></span>
                </a>
                <h4 class="title-widget">Bengkel Las Laras</h4>

            </div>
            <div class="col-3 text-center">
                <a href="#">
                    <span class="glyphicon glyphicon-tags"></span>
                </a>
                <h4 class="title-widget">Bengkel Las Laras</h4>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>