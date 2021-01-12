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
        <h4 class="text-center mt-4 mb-4">Detail Pesanan
          <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div>
        </h4>
        <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>No</th>
            <th>ID User</th>
            <th>ID Invoice</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
          </tr>
          <?php
          $total = 0;
          foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
          ?>
            <tr>
              <td><?php echo $psn->id ?></td>
              <td><?php echo $psn->id_user ?></td>
              <td><?php echo $psn->id_invoice ?></td>
              <td><?php echo $psn->kode_brg ?></td>
              <td><?php echo $psn->nama_brg ?></td>
              <td><?php echo $psn->jumlah ?></td>
              <td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
            </tr>
            <tr>
              <td colspan="6">Total Harga</td>
              <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
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