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
        <form action="<?php echo base_url() . 'kontroler_mentah/save'; ?>" method="post">
          <div class="form-group">
            <label>Nama Barang Mentah</label>
            <input class="form-control" type="text" name="nama_barang_mentah">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input class="form-control" type="text" name="stok">
          </div>
          <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Tambah Data Barang Mentah</button>
        </form>
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