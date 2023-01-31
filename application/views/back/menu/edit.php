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
            <!-- flash sedikit -->
            <?php
            // Error
            if (isset($error)) {
                echo '<div class="alert alert-warning">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $error;
                echo '</div>';
            }
            // Validasi
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button> </div>');
            // Form
            echo form_open_multipart('master/menu/edit/' . $user->ID_TREE);
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('master/menu') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Group Akses </label>
                        <select name="group" class="form-control">
                            <option value="">--Pilih--</option>

                            <?php foreach ($menu as $getMenu) {
                                if (trim($getMenu->CODE) === trim($user->GROUP_USER)) { ?>
                                    <option value="<?php echo $getMenu->CODE; ?>" selected>
                                        <?php echo $getMenu->DESCRIPTION; ?> </option>
                                <?php } else { ?>
                                    <option value="<?php echo $getMenu->CODE; ?> salah">
                                        <?php echo $getMenu->DESCRIPTION; ?> </option>
                            <?php }
                            } ?>
                        </select>
                        <!-- <input required type="text" name="group" class="form-control" placeholder="Group Menu" value="<?php echo $user->GROUP_USER ?>"> -->
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Parent</label>
                            <input required type="text" name="parent" class="form-control" placeholder="Kode Parent" value="<?php echo $user->PARENT ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Kode Child</label>
                            <input required type="text" name="child" class="form-control" placeholder="Kocde Child" value="<?php echo $user->CHILD ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Kode Publik</label>
                            <input required type="text" name="public" class="form-control" placeholder="password" value="<?php echo $user->PUBLIC_CODE ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>icon</label>
                            <input required type="text" name="icon" class="form-control" placeholder="icon" value="<?php echo $user->ICON ?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label>Deskripsi</label>
                            <input required type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="<?php echo $user->DESCRIPTION ?>">
                        </div>


                    </div>




                    <div class="form-group">
                        <label>url</label>
                        <input required type="text" name="url" class="form-control" placeholder="url" value="<?php echo $user->URL ?>">
                    </div>

                    <div class="form-group">
                        <label>status</label>
                        <select name="status" class="form-control">
                            <option value="">--Pilih--</option>

                            <?php foreach ($statusb as $status) {
                                if (trim($status->CODE) === trim($user->FLAG_ACTIVE)) { ?>
                                    <option value="<?php echo $user->FLAG_ACTIVE; ?>" selected>
                                        <?php echo $status->DESCRIPTION; ?> </option>
                                <?php } else { ?>
                                    <option value="<?php echo $status->CODE; ?>">
                                        <?php echo $status->DESCRIPTION; ?> </option>
                            <?php }
                            } ?>
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <input type="reset" name="reset" value="Reset" class="btn btn-secondary">
                        <input type="submit" name="submit" value="Ubah Menu" class="btn btn-success">
                    </div>
                    <?php echo form_close() ?>
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->
        </div> <!-- akhir container fluid -->
    </main>