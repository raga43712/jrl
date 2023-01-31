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
                <form role="form" action="<?php echo site_url('master/group/save') ?>" method="post" id="user_form">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Copy Menu</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>From Group User</label>
                                    <select name="fromgroup" id="fromgroup" class="form-control ">
                                        <option value="">-Pilih Group User-</option>
                                        <?php foreach ($cboGroup as $isigroup) { ?>
                                            <option value="<?php echo $isigroup->CODE; ?>">
                                                <?php echo $isigroup->DESCRIPTION; ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>From Group User</label>
                                    <select name="togroup" id="togroup" class="form-control ">
                                        <option value="">-Pilih Group User-</option>
                                        <?php foreach ($cboGroup as $isigroup) { ?>
                                            <option value="<?php echo $isigroup->CODE; ?>">
                                                <?php echo $isigroup->DESCRIPTION; ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- akhir div tabel -->
                    </div> <!-- akhir div card body -->
                    <div class="card-footer">
                        <input type="submit" name="action" class="btn btn-success" value="Submit" />

                    </div>
                </form>
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