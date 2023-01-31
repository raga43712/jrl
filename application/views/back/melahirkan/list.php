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
                    <p><a href="<?php echo site_url('penduduk/melahirkan/tambah') ?>" class="btn btn-success" data-toggle="modal" data-target="#tambahuser">
                            <i class="fa fa-plus"></i> Tambah</a></p>
                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>

                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>

                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($userb as $user) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>


                                        <td><?php echo ucwords(strtolower($user->FULL_NAME)) ?></td>
                                        <td><?php echo $user->SEX ?></td>
                                        <td><?php echo $user->DATE_BIRTH ?></td>
                                        <td><?php echo $user->PLACE_BIRTH ?></td>
                                        <td><?php echo $user->FATHER_NAME ?></td>
                                        <td><?php echo $user->MOTHER_NAME ?></td>

                                        <td class="d-flex justify-content-center">
                                            <a href="<?php echo site_url('penduduk/melahirkan/edit/' . $user->CD_RESIDENT) ?>" class="btn btn-secondary btn-sm mr-1"><i class="fa fa-edit"></i> Ubah</a>
                                            <?php $hey = $user->id_user; ?>
                                            <a onclick="deleteConfirm('<?php echo site_url('penduduk/melahirkan/delete/' . $user->CD_RESIDENT) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Penduduk</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo site_url('penduduk/melahirkan/tambah') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body" style="background-color: floralwhite;">

                                <div class="card card-default">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input required type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('fullname') ?>">
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>Tanggal Lahir</label>
                                                <input required type="date" name="datebirth" class="form-control" placeholder="Tanggal Lahir" value="<?php echo set_value('datebirth') ?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir</label>
                                                <input required type="text" name="placebirth" class="form-control" placeholder="Tempat Lahir" value="<?php echo set_value('placebirth') ?>">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label>Jenis Kelamin</label>
                                            <select name="sex" class="form-control">
                                                <option value="">--Pilih--</option>

                                                <?php foreach ($sexlist as $sexlist) { ?>
                                                    <option value="<?php echo $sexlist->CODE; ?>">
                                                        <?php echo $sexlist->DESCRIPTION; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>



                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Nama Ayah</label>
                                                <input required type="text" name="fathername" class="form-control" placeholder="Nama Ayah" value="<?php echo set_value('fathername') ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nama Ibu</label>
                                                <input required type="text" name="mothername" class="form-control" placeholder="Nama Ibu" value="<?php echo set_value('mothername') ?>">
                                            </div>
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