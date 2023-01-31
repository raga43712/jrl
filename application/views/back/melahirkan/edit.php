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
            echo form_open_multipart('penduduk/melahirkan/edit/' . $user->CD_RESIDENT);
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('penduduk/melahirkan') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap </label>
                            <input required type="text" name="fullname" class="form-control" placeholder="fullname" value="<?php echo $user->FULL_NAME ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <select name="sex" class="form-control">
                                <option value="">--Pilih--</option>

                                <?php foreach ($sexlist as $sexlist) {
                                    if (trim($sexlist->CODE) === trim($user->SEX)) { ?>
                                        <option value="<?php echo $user->SEX; ?>" selected>
                                            <?php echo $sexlist->DESCRIPTION; ?> </option>
                                    <?php } else { ?>
                                        <option value="<?php echo $sexlist->CODE; ?>">
                                            <?php echo $sexlist->DESCRIPTION; ?> </option>
                                <?php }
                                } ?>
                            </select>
                            <!-- <input required type="text" name="icon" class="form-control" placeholder="icon" value="<?php echo $user->ICON ?>"> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <input required type="date" name="datebirth" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $user->DATE_BIRTH ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tempat Lahir</label>
                            <input required type="text" name="placebirth" class="form-control" placeholder="Tempat lahir" value="<?php echo $user->PLACE_BIRTH ?>">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Ayah</label>
                            <input required type="text" name="fathername" class="form-control" placeholder="Nama Ayah" value="<?php echo $user->FATHER_NAME ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Ibu</label>
                            <input required type="text" name="mothername" class="form-control" placeholder="Nama Ibu" value="<?php echo $user->MOTHER_NAME ?>">
                        </div>
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