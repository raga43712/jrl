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
                                    <th>Status</th>
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
                                        <td><?php switch ($user->STATUS) {
                                                case "O":
                                                    echo "<span class='badge badge-warning'>in Progress</span>";
                                                    break;
                                                case "A":
                                                    echo "<span class='badge badge-success'>Approved</span>";
                                                    break;
                                                case "R":
                                                    echo "<span class='badge badge-danger'>Reject</span>";
                                                    break;
                                            } ?> </td>

                                        <td class="d-flex justify-content-center">
                                            <?php if ($user->STATUS == 'A') { ?> <a href="<?php echo site_url('file/riwayat/print/' . $user->REQUEST_ID) ?>" target="_blank" class="btn btn-secondary btn-sm mr-1"><i class="fas fa-eye"></i> view</a> <?php } ?>
                                            <?php $hey = $user->id_user; ?>
                                            <!-- <a onclick="deleteConfirm('<?php echo site_url('file/request/delete/' . $user->REQUEST_ID) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
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
            <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: navy; color:cornsilk;">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Berkas</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo site_url('file/request/tambah') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body" style="background-color: floralwhite;">

                                <div class="card card-default">
                                    <div class="card-body">

                                        <div class="form-group ">
                                            <label>Nama Lengkap</label>
                                            <!-- <input required type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('fullname') ?>"> -->
                                            <select name="fullname" class="form-control">
                                                <option value="">--Pilih--</option>

                                                <?php foreach ($penduduk as $penduduk) { ?>
                                                    <option value="<?php echo $penduduk->CD_RESIDENT; ?>">
                                                        <?php echo $penduduk->FULL_NAME; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <label>Jenis Berkas</label>
                                            <select name="jenis" class="form-control">
                                                <option value="">--Pilih--</option>

                                                <?php foreach ($typedoclist as $typedoclist) { ?>
                                                    <option value="<?php echo $typedoclist->CODE; ?>">
                                                        <?php echo $typedoclist->DESCRIPTION; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Keterangan</label>
                                            <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                                        </div>


                                    </div>
                                </div>

                                <!-- end -->
                                <!-- end -->
                                <!-- end -->



                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- akhir container fluid -->
    </main>