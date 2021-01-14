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
                <button type="button" class="btn btn-primary mb-4 mt-1" data-bs-toggle="modal"
                    data-bs-target="#tambah_barang">
                    + Tambah Data
                </button>

                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $no = $this->uri->segment('3') + 1;
                    foreach ($barang as $brg) :
                    ?>
                    <tr>
                        <td><?php echo $brg->kode ?></td>
                        <td><?php echo $brg->nama_brg ?></td>
                        <td><?php echo $brg->keterangan ?></td>
                        <td><?php echo $brg->kategori ?></td>
                        <td><?php echo $brg->harga ?></td>
                        <td><?php echo $brg->stok ?></td>
                        <td><img src="<?php echo base_url('/assets/images/'.$brg->gambar)?>" class="img-fluid" alt="">
                        <td><?php echo anchor('data_barang/edit_barang/' .$brg->kode, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                        </td>
                        <td><?php echo anchor('data_barang/hapus_from_barang/' .$brg->kode, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                        </td>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <div class="row">
                    <div class="col">
                        <!--Tampilkan pagination-->
                        <?php echo $pagination; ?>
                    </div>
                </div>
                <?php $this->load->view("admin/_parts/footer") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>

        <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('data_barang/add')?>" method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_brg" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Keterangan Barang</label>
                                <input type="text" name="ket_brg" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option>Kanopi</option>
                                    <option>Kusen</option>
                                    <option>Pintu</option>
                                    <option>Pagar</option>
                                    <option>Tralis</option>
                                    <option>Rangka</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar Produk</label><br>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->


        <?php $this->load->view("admin/_parts/scrolltop") ?>
        <?php $this->load->view("admin/_parts/modal") ?>
        <?php $this->load->view("admin/_parts/js") ?>

</body>

</html>