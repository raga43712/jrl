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
                    <p><a href="<?php echo site_url('master/parameter/tambah') ?>" class="btn btn-success" data-toggle="modal" data-target="#tambahuser">
                            <i class="fa fa-plus"></i> Tambah Parameter</a></p>
                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th>Parameter</th>
                                    <th>Code</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($userb as $user) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>

                                        <td><?php echo $user->PARAMETER ?></td>
                                        <td><?php echo $user->CODE ?></td>
                                        <td><?php echo $user->DESCRIPTION ?></td>
                                        <td><?php switch ($user->FLAG_ACTIVE) {
                                                case "Y":
                                                    echo '<span class="badge badge-success">Aktif</span>';
                                                    break;
                                                case "N":
                                                    echo '<span class="badge badge-danger">Tidak Aktif</span>';
                                                    break;
                                            }  ?></td>
                                        <td class="d-flex justify-content-center">
                                            <a href="<?php echo site_url('master/parameter/edit/' . $user->NO_SR) ?>" class="btn btn-secondary btn-sm mr-1"><i class="fa fa-edit"></i> Ubah</a>
                                            <?php $hey = $user->id_user; ?>
                                            <a onclick="deleteConfirm('<?php echo site_url('master/parameter/delete/' . $user->NO_SR) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Parameter</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('master/parameter/tambah') ?>" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Parameter</label>
                                        <input required type="text" name="parameter" class="form-control" placeholder="Parameter" value="<?php echo set_value('parameter') ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Kode </label>
                                        <input required type="text" name="kode" class="form-control" placeholder="Kode " value="<?php echo set_value('kode') ?>">
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label>Deskripsi</label>
                                    <input required type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo set_value('deskripsi') ?>">
                                </div>


                                <div class="form-group">
                                    <label>status</label>
                                    <select name="status" class="form-control">
                                        <option value="">--Pilih--</option>

                                        <?php foreach ($statusc as $status) { ?>
                                            <option value="<?php echo $status->CODE; ?>">
                                                <?php echo $status->DESCRIPTION; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- end -->
                                <!-- end -->
                                <!-- end -->
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                          <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
                          </div> -->
                    </div>
                </div>
            </div> <!-- akhir container fluid -->
    </main>