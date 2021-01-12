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
                <h4 class="text-center mt-4 mb-4">Daftar Barang</h4>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Kode</th>
                        <th>Nama Pemesan</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Request Selesai</th>
                    </tr>
                    <?php
        foreach ($requests as $req) :
        ?>
                    <tr>
                        <td><?php echo $req->id_request ?></td>
                        <td><?php echo $req->nama_pemesan ?></td>
                        <td><?php echo $req->no_telp ?></td>
                        <td><?php echo $req->nama_barang ?></td>
                        <td><?php echo $req->keterangan ?></td>
                        <td><?php echo anchor('request/hapus_from_request/' .$req->id_request, '<div class="btn btn-primary btn-sm">Request Selesai</div>') ?>
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