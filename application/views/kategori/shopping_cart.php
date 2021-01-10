<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php
    if($this->session->userdata('role_id') == ''){
    redirect('auth/login');
    }?>

    <?php $this->load->view("user/header") ?>
    <div class="container">
        <h4 class="text-center mt-4 mb-4">Shopping Cart Anda</h4>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-Total</th>
            </tr>

            <?php 
        $no=1;
		foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
            </tr>

            <?php endforeach; ?>
            <tr>
                <td colspan="4"></td>
                <td>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
            </tr>

        </table>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>