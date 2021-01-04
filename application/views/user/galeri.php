<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <div class="container-fluid">
        <?php $this->load->view("user/header") ?>
        <div class="bg-oren" style="background-color:#FD5D14 !important">
            <h3 class="pt-1 pb-2 text-center mt-3 text-white">Galeri</h3>
        </div>
        <div class="container">
            <div class="row" style="padding: 15px;">
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
                <div class="col-md-4 col-12 galeri">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg') ?>" alt="" srcset="">
                    <div class="galeri-info">
                        <h3>Framing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>