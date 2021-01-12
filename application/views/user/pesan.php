<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bengkel Las Laras</title>
</head>

<body>
  <?php
  if ($this->session->userdata('role_id') == '') {
    redirect('auth/login');
  } ?>

  <?php $this->load->view("user/header") ?>
  <div class="container">
    <h4 class="text-center mt-4 mb-4">Pesanan Anda</h4>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="btn btn-sm btn-success">
          <?php
          $grand_total = 0;
          if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
              $grand_total = $grand_total + $item['subtotal'];
            }
            echo "Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
          ?>
        </div><br><br>
        <h3>Input Detail Pemesanan</h3>
        <form method="POST" action="<?php echo base_url() ?>dashboard/proses_pesan">
          <div class="form-group">
            <label>No. Telepon</label>
            <input class="form-control" type="text" name="no_telp" placeholder="Nomor Telepon Anda">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input class="form-control" type="text" name="keterangan" placeholder="Berikan Keterngan Lengkap Terkait Pesanan Anda">
          </div>
          <div class="form-group">
            <label>Metode Pembayaran</label>
            <select class="form-control">
              <option>BCA - XXXXXXXXXXX</option>
              <option>BNI - XXXXXXXXXXX</option>
              <option>BRI - XXXXXXXXXXX</option>
              <option>Mandiri - XXXXXXXXXXX</option>
            </select>
          </div>
          <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Pesan</button>
        </form>
      <?php } else {
            echo "<h4>Keranjang Anda Masih Kosong</h4>";
          } ?>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <?php $this->load->view("user/footer") ?>
</body>

</html>