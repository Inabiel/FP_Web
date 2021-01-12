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
        <h4 class="text-center mt-4 mb-4">Daftar Penjualan</h4>
        <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Id Invoice</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Tanggal Pesan</th>
            <th>Batas Bayar</th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($invoice as $inv) : ?>
            <tr>
              <td><?php echo $inv->id ?></td>
              <td><?php echo $inv->no_telp ?></td>
              <td><?php echo $inv->alamat ?></td>
              <td><?php echo $inv->keterangan ?></td>
              <td><?php echo $inv->tgl_pesan ?></td>
              <td><?php echo $inv->batas_bayar ?></td>
              <td>
                <div class="btn btn-sm btn-primary">Detail</div>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
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