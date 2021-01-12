<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php $this->load->view("user/header") ?>
    <div class="container d-flex h-100" style="min-height:500px">
        <div class="row align-self-center w-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <p class="text-center" style="font-size:150px">:(</p>
                    <p class="lead text-center">Anda tidak punya akses ke page admin</p>
                    <p class="lead text-center">
                        <a class="btn btn-primary btn-md" href="<?php echo site_url('home')?>" role="button">Kembali ke
                            page home</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>