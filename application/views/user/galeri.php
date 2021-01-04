<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <div class="container-fluid" style="min-height:500px">
        <?php $this->load->view("user/header") ?>
        <div class="bg-oren" style="background-color:#FD5D14 !important">
            <h3 class="pt-1 pb-2 text-center mt-3 text-white">Galeri</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg')?>" alt="" srcset="">
                </div>
                <div class="col-md-4 col-12">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg')?>" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-12">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg')?>" alt="" srcset="">
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 col-12 pt-4">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg')?>" alt=""
                        srcset="">
                </div>
                <div class="col-md-4 col-12 pt-4">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/1.jpg')?>" alt="" srcset="">
                </div>
                <div class="col-md-4 col-12 pt-4">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/images/welding.jpg')?>" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>