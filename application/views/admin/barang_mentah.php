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
                <h4 class="text-center mt-4 mb-4">Stok Barang Mentah</h4>
                <?php echo anchor('kontroler_mentah/add', 'Tambah Data'); ?>
                <table class="table table table-bordered table-hover table-striped mt-2">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang Mentah</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
          $no = 1;
          foreach ($barang_mentah as $mentah) {
          ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mentah->nama_barang_mentah ?></td>
                        <td><?php echo $mentah->stok ?></td>
                        <td>
                            <?php echo anchor('kontroler_mentah/edit/' . $mentah->id_barang_mentah, 'Edit'); ?> |
                            <?php echo anchor('kontroler_mentah/delete/' . $mentah->id_barang_mentah, 'Delete'); ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="row">
                    <div class="col">
                        <!--Tampilkan pagination-->
                        <?php echo $pagination; ?>
                    </div>
                </div>
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