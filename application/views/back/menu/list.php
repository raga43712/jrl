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
                    <p><a href="<?php echo site_url('master/menu/tambah') ?>" class="btn btn-success" data-toggle="modal" data-target="#tambahuser">
                            <i class="fa fa-plus"></i> Tambah Menu</a></p>
                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th>Kode Group</th>
                                    <th>Nama Group</th>
                                    <th>Kode Menu</th>
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
                                        <?php if ($user->id_user != 641) { ?>
                                            <td><?php echo $user->GROUP_USER ?></td>
                                            <td><?php echo $user->NAMA ?></td>
                                            <td><?php echo $user->PUBLIC_CODE ?></td>
                                            <td><?php echo $user->deskripsi ?></td>
                                            <td><?php switch ($user->FLAG_ACTIVE) {
                                                    case "Y":
                                                        echo '<span class="badge badge-success">Aktif</span>';
                                                        break;
                                                    case "N":
                                                        echo '<span class="badge badge-danger">Tidak Aktif</span>';
                                                        break;
                                                }  ?></td>
                                            <td class="d-flex justify-content-center">
                                                <a href="<?php echo site_url('master/menu/edit/' . $user->ID_TREE) ?>" class="btn btn-secondary btn-sm mr-1"><i class="fa fa-edit"></i> Ubah</a>
                                                <?php $hey = $user->id_user; ?>
                                                <a onclick="deleteConfirm('<?php echo site_url('master/menu/delete/' . $user->ID_TREE) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        <?php } else { ?>
                                            <td><?php echo $user->nama ?></td>
                                            <td scope="col"><i>Tidak ada data</i></td>
                                            <td scope="col"><i>Tidak ada data</i></td>
                                            <td scope="col"><i>Tidak ada data</i></td>
                                            <td class="d-flex justify-content-center">
                                                <i>Aksi tidak diizinkan</i>
                                            </td>
                                        <?php } ?>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('master/menu/tambah') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Group</label>
                                    <select name="group" class="form-control">
                                        <option value="">--Pilih--</option>

                                        <?php foreach ($menu as $getMenu) { ?>
                                            <option value="<?php echo $getMenu->CODE; ?>">
                                                <?php echo $getMenu->DESCRIPTION; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input required type="text" name="group" class="form-control" placeholder="Group" value="<?php echo set_value('group') ?>"> -->
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Kode Parent</label>
                                        <input required type="text" name="kodeParent" class="form-control" placeholder="Kode Parent" value="<?php echo set_value('kodeParent') ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Kode Child</label>
                                        <input required type="text" name="kodeChild" class="form-control" placeholder="Kode Child" value="<?php echo set_value('kodeChild') ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Kode Publik</label>
                                        <input required type="text" name="kodePublik" class="form-control" placeholder="Kode Publik" value="<?php echo set_value('kodePublik') ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Deskripsi</label>
                                        <input required type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo set_value('deskripsi') ?>">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Icon</label>
                                        <input required type="text" name="icon" class="form-control" placeholder="icon" value="<?php echo set_value('icon') ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>URL</label>
                                        <input required type="text" name="url" class="form-control" placeholder="url" value="<?php echo set_value('url') ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>status</label>
                                        <select name="status" class="form-control">
                                            <option value="">--Pilih--</option>

                                            <?php foreach ($statusb as $status) { ?>
                                                <option value="<?php echo $status->CODE; ?>">
                                                    <?php echo $status->DESCRIPTION; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
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