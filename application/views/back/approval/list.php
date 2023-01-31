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
            if ($this->session->flashdata('dihapus')) {
                echo '<div class="alert alert-danger">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('dihapus');
                echo '</div>';
            }
            // Notifikasi
            if ($this->session->flashdata('maaf')) {
                echo '<div class="alert alert-secondary">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('maaf');
                echo '</div>';
            }
            // File upload error
            if (isset($error)) {
                echo '<div class="alert alert-danger">';
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
                    <!-- <p><a href="<?php echo site_url('file/approval/tambah') ?>" class="btn btn-success" data-toggle="modal" data-target="#tambahuser">
                            <i class="fa fa-plus"></i> Approval Berkas</a></p> -->

                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th>No Request</th>
                                    <th>Tanggal Request</th>
                                    <th>Nama Warga</th>
                                    <th>Jenis Berkas</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($userb as $user) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>

                                        <td><?php echo $user->REQUEST_ID ?></td>
                                        <!-- <td><?php echo ucwords(strtolower($user->DATE_CREATED)) ?></td> -->
                                        <td><?php echo $user->DATE_CREATED ?></td>
                                        <td><?php echo ucwords(strtolower($user->FULL_NAME)) ?></td>

                                        <td><?php echo $user->TUJUAN ?></td>
                                        <td><?php echo $user->NOTE ?></td>

                                        <td class="d-flex justify-content-center">
                                            <a href="<?php echo site_url('file/Approval/edit/' . $user->REQUEST_ID) ?>" class="btn btn-warning btn-sm mr-1"><i class="fas fa-question-circle"></i> action</a>
                                            <?php $hey = $user->id_user; ?>
                                            <!-- <a onclick="deleteConfirm('<?php echo site_url('file/approval/delete/' . $user->REQUEST_ID) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                                        </td>

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

    </main>