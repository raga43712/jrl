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
            echo form_open_multipart('master/parameter/edit/' . $user->NO_SR);
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('master/parameter') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Parameter </label>
                        <input required type="text" name="parameter" class="form-control" placeholder="parameter" value="<?php echo $user->PARAMETER ?>">
                    </div>

                    <div class="form-group ">
                        <label>Kode</label>
                        <input required type="text" name="kode" class="form-control" placeholder="Kode " value="<?php echo $user->CODE ?>">
                    </div>

                    <div class="form-group ">
                        <label>Deskripsi</label>
                        <input required type="text" name="deskripsi" class="form-control" placeholder="Diskripsi" value="<?php echo $user->DESCRIPTION ?>">
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