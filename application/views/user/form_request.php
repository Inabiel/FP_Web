<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <div class="container-fluid">
        <?php $this->load->view("user/header") ?>
        <div class="bg-oren" style="background-color:#FD5D14 !important">
            <h3 class="pt-1 pb-2 text-center mt-3 text-white">Form request barang</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto mb-5">
                    <form action="<?php echo base_url('request/request_to_db')?>" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label text-center">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_pemesan">
                        </div>
                        <div class="mb-3">
                            <label for="barang" class="form-label text-center">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="telp">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label text-center">Keterangan Barang</label>
                            <input type="text name=" keterangan" class="form-control" id="keterangan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>