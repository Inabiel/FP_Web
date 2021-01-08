<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php $this->load->view("user/header") ?>
    <div class="container-fluid" style="min-height:500px">
        <div class="bg-oren" style="background-color:#FD5D14 !important">
            <h3 class="pt-1 pb-2 text-center mt-3 text-white">JASA</h3>
        </div>
        <div class="container">
            <div class="row">
                <h5 class="text-center text-grey pt-3">JASA YANG KAMI TAWARKAN</h5>
            </div>
            <div class="row gap-2">
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/Pagar&Tralis.jpeg')?>" class="img-fluid pt-5"
                            alt="" srcset="">
                        <h5 class="text-center pt-4">Pagar</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/pagar')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/atap_besi.jpeg')?>" class="img-fluid pt-5" alt=""
                            srcset="">
                        <h5 class="text-center pt-4">Kanopi</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/kanopi')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/tralis.jpeg')?>" class="img-fluid pt-5" alt=""
                            srcset="">
                        <h5 class="text-center pt-4">Tralis</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/tralis')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-2 mt-5 mb-5">
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/pintu_besi.jpeg')?>" class="img-fluid pt-5" alt=""
                            srcset="">
                        <h5 class="text-center pt-4">Pintu Besi</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/pintu')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/kusen.jpg')?>" class="img-fluid pt-5" alt=""
                            srcset="">
                        <h5 class="text-center pt-4">Kusen Alumunium</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/kusen')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mx-auto border border-2 rounded shadow">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/rangka.jpg')?>" class="img-fluid pt-5" alt=""
                            srcset="">
                        <h5 class="text-center pt-4">Rangka Besi</h5>
                        <div class="d-flex justify-content-center mt-5 mb-5 pb-5">
                            <button type="button" class="btn btn-outline-dark"><a
                                    href="<?php echo site_url('kategori/rangka')?>"
                                    class="text-black text-decoration-none">
                                    Info Lebih Lanjut</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>