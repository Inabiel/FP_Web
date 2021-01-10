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
        <div class="row text-center mt-3">
            <?php foreach($barang as $brg): ?>
            <h3 class="text-center mt-2 mb-3"><?php echo $brg->kategori?></h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/assets/images/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong>
                                    <div class="btn btn-sm btn-success">
                                        Rp.<?php echo number_format($brg->harga,0,',','.') ?></div>
                                </strong></td>
                        </tr>
                    </table>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->kode,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <div class="btn btn-sm btn-danger"><a href="<?php echo site_url('jasa')?>"
                            class="text-white text-decoration-none">Kembali</a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>