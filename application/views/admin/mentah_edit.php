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
      <?php $this->load->view("admin/_parts/topbar") ?>
      <div class="container">
        <?php foreach ($barang_mentah as $mentah) { ?>
          <form action="<?php echo base_url() . 'kontroler_mentah/update'; ?>" method="post">
            <div class="form-group">
              <label>Nama Barang Mentah</label>
              <input type="hidden" name="id_barang_mentah" value="<?php echo $mentah->id_barang_mentah ?>">
              <input class="form-control" type="text" name="nama_barang_mentah" value="<?php echo $mentah->nama_barang_mentah ?>">
            </div>
            <div class="form-group">
              <label>Stok</label>
              <input class="form-control" type="text" name="stok" value="<?php echo $mentah->stok ?>">
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