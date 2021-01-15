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
            <div class="container-fluid">
                <!-- 
    karena ini halaman overview (home), kita matikan partial breadcrumb.
    Jika anda ingin mengampilkan breadcrumb di halaman overview,
    silahkan hilangkan komentar (//) di tag PHP di bawah.
    -->
                <?php //$this->load->view("admin/_parts/breadcrumb.php") 
                ?>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-tasks"></i>
                                </div>
                                <div class="mr-5"><?php echo $jumlah_mentah ?> Jenis Barang Mentah</div>
                            </div>
                            <a class="card-footer clearfix small z-1" href="<?php echo base_url('barang_mentah') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5"><?php echo $jumlah_pesanan ?> Daftar Transaksi</div>
                            </div>
                            <a class="card-footer clearfix small z-1" href="<?php echo base_url('invoice') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5"><?php echo $jumlah_barang ?> Jenis Barang Dibuat</div>
                            </div>
                            <a class="card-footer clearfix small z-1" href="<?php echo base_url('manajemen_barang') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list-alt"></i>
                                </div>
                                <div class="mr-5"><?php echo $jumlah_request ?> Jumlah Request Barang</div>
                            </div>
                            <a class="card-footer clearfix small z-1" href="<?php echo base_url('request') ?>">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i>
                        Statistik
                    </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-hover table-striped mt-2">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah Terjual</th>
                                <th>Total Harga</th>
                            </tr>
                            <?php
                            $total = 0;
                            $total_jml = 0;
                            $no = 1;
                            foreach ($join as $j) {
                                $subtotal = $j->total_harga;
                                $total += $subtotal;
                                $jml = $j->jumlah_penjualan;
                                $total_jml += $jml;
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $j->nama_brg ?></td>
                                    <td><?php echo $j->kategori ?></td>
                                    <td><?php echo $j->jumlah_penjualan ?></td>
                                    <td><?php echo $j->total_harga ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"></td>
                                <td><?php echo number_format($total_jml, 0, ',', '.') ?></td>
                                <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
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