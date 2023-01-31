<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title ?></h1>
            <h4 class="mb-2">Periode : <?php echo date('d M Y', strtotime($satu)) . " S/d " . date('d M Y', strtotime($dua)) ?></h4>
            <!-- ini nama bread crumb -->
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
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button></div>');
            ?>

            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/laporan') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between lh-condensed">
                        <p><a href="#!" onclick="window.print()" class="btn btn-secondary">
                                <i class="fa fa-print"></i> Cetak</a></p>
                    </div>
                    <div class="table-responsive">
                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th>Nama</th>

                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Tanggal Meninggal</th>
                                    <th>KTP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Alasan</th>
                                    <!-- <th>File</th> -->

                                    <!-- <th class="text-center">Jenis</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pendatang as $data) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>
                                        <td><?php echo ucwords(strtolower($data->FULL_NAME)) ?></td>
                                        <td class="text-center"><?php echo date('d M Y', strtotime($data->DATE_BIRTH)) ?></td>
                                        <td class="text-center"><?php echo date('d M Y', strtotime($data->DATE_DIED)) ?></td>
                                        <td><?php echo $data->NO_KTP ?></td>
                                        <td><?php echo $data->SEX ?></td>
                                        <td><?php echo $data->ALAMAT ?></td>
                                        <td><?php echo $data->STATUS ?></td>
                                        <td><?php echo $data->REASON_DIED ?></td>


                                        <!-- <td class="text-center"><?php if ($data->jenis == "masuk") { ?><span class="badge badge-pill badge-success" style="font-weight: unset;">Surat Masuk</span> <?php }
                                                                                                                                                                                                    if ($data->jenis == "keluar") { ?><span class="badge badge-pill badge-danger" style="font-weight: unset;">Surat Keluar</span><?php } ?>
                                        </td> -->
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div> <!-- akhir div tabel -->
                </div> <!-- akhir div card body -->
            </div>
        </div>
    </main>