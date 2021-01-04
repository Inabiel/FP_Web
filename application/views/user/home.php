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
                <div style="color:#FD5D14;font-size: 120px;background-color:whitesmoke;padding:10px;">Bengkel Las Laras
                </div>
                <h1>Menerima Jasa Pembuatan : </h1>
            </div>
        </div>
    </section>
    <section class="container-fluid text-center title-laras">
        <h1>Bengkel Las Laras</h1>
    </section>

    <div class="d-flex justify-content-center text-center">
        <div class="hubungi">
            <h4><a href="#telpon" class="text-decoration-none text-white">Hubungi Kami</a></h4>
        </div>
    </div>
    <section class="container-fluid profil">
        <div class="row">
            <div class="col-5 logo-profil">
            </div>
            <div class="col-6 deskripsi">
                <h1 class="text-center" style="color: #FD5D14;">Profil</h1>
                <h4 class="text-center" style="color: #FD5D14;">Bengkel Las Laras</h4>
                Bengkel Las Laras adalah penyedia jasa bengkel las murah di Kabupaten Sleman dengan pelayanan terbaik. di samping dengan kualitas pelayanan terbaik, bengkel las ini memberikan harga las termurah.
                Bengkel las Laras menerima berbagai permintaan seperti pembuatan pagar, pembuatan canopy, pembuatan tralis, pembuatan railing, pembuatan pintu Henderson, pembuatan pintu besi, dan pembuatan lainnya.
                <a href="<?php echo base_url(); ?>profil" style="color: #FD5D14;text-decoration:none;">Selengkapnya</a>
            </div>
        </div>
    </section>
    <div class="row text-center benefit">
        <div class="col-lg-4 align-items-center justify-content-center">
            <div class="glyphicon glyphicon-tags item-benefit" style="color: #009925;"></div>
            <h4>Harga Terbaik</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-lg-4">
            <div class="glyphicon glyphicon-stats item-benefit" style="color: #D50F25;"></div>
            <h4>Kualitas Terbaik</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-lg-4">
            <div class="glyphicon glyphicon-earphone item-benefit" style="color: #3369EB;"></div>
            <h4>Hubungi Langsung</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>