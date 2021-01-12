<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php $this->load->view("user/header") ?>
    <div class="container mb-5">
        <h3 class="text-center mt-2 mb-3">PAGAR</h3>
        <div class="row text-center mt-3">
            <?php foreach($pintu as $brg) : ?>
            <div class="card ml-3 mb-3 me-4" style="width: 16rem;">
                <img src="<?php echo base_url('assets/images/'.$brg->gambar)?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <span class="card-title badge bg-danger text-center mt-2"><?php echo $brg->kode?></span><br>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge bg-success mb-3">Rp.
                        <?php echo number_format($brg->harga, 0,',','.') ?></span>
                    <?php echo anchor('dashboard/add_cart/'.$brg->kode,'<div class="btn btn-sm btn-primary mb-3">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail_brg/'.$brg->kode,'<div class="btn btn-sm btn-warning">Detail</div>') ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <h6 class="text-center">Belum Menemukan yang dicari? silahkan request produk <a
                href="<?php echo site_url('form_request')?>">Disini</a></h6>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>