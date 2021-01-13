<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_parts/head") ?>
</head>

<body>
    <?php
  if ($this->session->userdata('role_id') != 'Admin') {
    redirect('not_admin');
  }
  ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_parts/sidebar") ?>

        <div id="content-wrapper">
            <?php $this->load->view("admin/_parts/topbar");?>

            <div class="container">
                <?php foreach ($barang as $brg) { ?>
                <form method="post" action="<?php echo base_url('data_barang/update'); ?>">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input class="form-control" type="hidden" name="kode_brg" value="<?php echo $brg->kode?>">
                        <input class="form-control" type="text" name="nama_brg" value="<?php echo $brg->nama_brg?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="ket_brg" value="<?php echo $brg->keterangan?>">
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" name="kategori" value="<?php echo $brg->kategori?>">
                            <option>Kanopi</option>
                            <option>Kusen</option>
                            <option>Pintu</option>
                            <option>Pagar</option>
                            <option>Tralis</option>
                            <option>Rangka</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>harga</label>
                        <input class="form-control" type="text" name="harga_brg" value="<?php echo $brg->harga?>">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input class="form-control" type="text" name="stok_brg" value="<?php echo $brg->stok?>">
                    </div>

                    <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Simpan</button>
                </form>
                <?php } ?>
            </div>
            <?php $this->load->view("admin/_parts/footer") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_parts/scrolltop") ?>
    <?php $this->load->view("admin/_parts/modal") ?>
    <?php $this->load->view("admin/_parts/js") ?>

</body>

</html>