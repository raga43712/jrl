<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title ?></h1>
            <!-- ini nama bread crumb -->
            <ol class="breadcrumb">
                <?php foreach ($this->uri->segments as $segment) : ?>
                    <?php $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                    $is_active =  $url == $this->uri->uri_string; ?>
                    <li class="breadcrumb-item <?php echo $is_active ? 'active' : '' ?>">
                        <?php if ($is_active) : ?>
                            <?php echo ucfirst($segment) ?>
                        <?php else : ?>
                            <a href="<?php echo site_url($url) ?>"> <?php echo ucfirst($segment) ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ol>
            <?php
            // Notifikasi
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            }
            // Notifikasi
            if ($this->session->flashdata('maaf')) {
                echo '<div class="alert alert-danger">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('maaf');
                echo '</div>';
            }
            // Error
            if (isset($error)) {
                echo '<div class="alert alert-warning">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $error;
                echo '</div>';
            }
            // Error
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button></div>');
            ?>

            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between lh-condensed">
                        <div class="d-flex">
                            <p><a href="<?php echo site_url('admin') ?>" class="btn btn-success mr-2" data-toggle="modal" data-target="#tambahMasukan">
                                    <i class="fa fa-plus"></i> Tambah Data Barang</a></p>
                        </div>
                        <div>
                            <p><a href="#!" onclick="window.print()" class="btn btn-secondary">
                                    <i class="fa fa-print"></i> Cetak</a></p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th width="25%">kode</th>
                                    <th width="25%">Nama Barang</th>
                                    <th class="text-center">Grid</th>
                                    <th class="text-center">Lebar</th>
                                    <th class="text-center">Panjang</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($barang as $data) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>
                                        <td><?php echo $data->kode ?></td>
                                        <td><?php echo $data->name_brg ?></td>
                                        <td><?php echo $data->grid_pro ?></td>
                                        <td><?php echo $data->width_pro ?></td>
                                        <td><?php echo $data->length_pro ?></td>
                                        <td><?php echo $data->qty_pro ?></td>
                                        <td><?php echo $data->desc_pro ?></td>
                                        <!-- <td class="text-center">
                                            <?php if ($data->status == "P") { ?>
                                                <span class="badge badge-pill badge-success"style="font-weight: unset;">Print</span> <?php }
                                            if ($data->status == "N") { ?>
                                                <span class="badge badge-pill badge-danger" style="font-weight: unset;">Belum Print</span><?php } ?>
                                        </td> -->
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div> <!-- akhir div tabel -->
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->



            <!-- modal tambah user-->
            <!-- modal tambah user-->
            <!-- modal -->
            <div class="modal fade" id="tambahMasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('admin/barang/tambah') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-form-label">Nama Barang</label>
                                    <input type="hidden" class="form-control" name="kode" id="kode">
                                    <!-- <input type="text" class="form-control" name="name_pro" id="name_pro" placeholder="Contoh : EKA 1000 F" required=""> -->
                                    <select name="kode_brg" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($brg as $brg) { ?>
                                            <option value="<?php echo $brg->kode_brg; ?>">
                                                <?php echo $brg->name_brg; ?> *(<?php echo $brg->kode_brg; ?>) </option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Grid</label>
                                    <input type="number" class="form-control" name="grid_pro" id="grid_pro" required="" placeholder="Contoh : 320">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Tinggi / Lebar</label>
                                    <input type="number" class="form-control" name="width_pro" id="width_pro" placeholder="Contoh : 1370" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Panjang</label>
                                    <input type="number" class="form-control" name="length_pro" id="length_pro" placeholder="Contoh : 100  ( Satuan Meter )" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Quantity</label>
                                    <input type="number" class="form-control" name="qty_pro" id="qty_pro" placeholder="Contoh : 12" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="Keterangan">No Doc</label>
                                    <input type="text" class="form-control" name="ket" id="ket" value="<?= $nodoc; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="keterangan">Keterangan</label>
                                    <textarea class="form-control" name="desc_pro" id="desc_pro" placeholder="Keterangan"></textarea>
                                </div>
                                <!-- end -->
                                <!-- end -->
                                <!-- end -->
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div> <!-- modal-body -->
                    </div> <!-- modal-content -->
                </div> <!-- modal-dialog -->
            </div> <!-- modal-fade -->

            

            <!-- NON AKTIFF-->
            <!-- modal tambah user-->
            <!-- modal -->
            <div class="modal fade" id="tambahKeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran Kas</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('admin/keuangan/tambah_pengeluaran') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-form-label" for="nomor2">Nomor</label>
                                    <input type="number" class="form-control" name="nomor2" id="nomor2" value="<?= $nomor; ?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="keterangan2">Keterangan Pengeluaran</label>
                                    <textarea class="form-control" name="keterangan2" id="keterangan2" placeholder="Keterangan" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tanggal2">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal2" id="tanggal2" value="<?= date('Y-m-d'); ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="jumlah2">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah2" id="jumlah2" placeholder="Jumlah" required="">
                                </div>
                                <!-- end -->
                                <!-- end -->
                                <!-- end -->
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Tambah</button>
                            </form>
                        </div> <!-- modal-body -->
                    </div> <!-- modal-content -->
                </div> <!-- modal-dialog -->
            </div> <!-- modal-fade -->




        </div> <!-- akhir container fluid -->
    </main>