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
      <h4 class="text-center mt-4 mb-4">Daftar Barang</h4>
      <table class="table table-bordered table-hover table-striped">
        <tr>
          <th>Kode</th>
          <th>Nama Barang</th>
          <th>Keterangan</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Gambar</th>
        </tr>
        <?php
        foreach ($daftar_barang as $brg) :
        ?>
          <tr>
            <td><?php echo $brg->kode ?></td>
            <td><?php echo $brg->nama_brg ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            <td><?php echo $brg->gambar ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
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