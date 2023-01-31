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
            echo form_open_multipart('master/penduduk/edit/' . $user->CD_RESIDENT);
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('master/penduduk') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Lengkap </label>
                            <input required type="text" name="fullname" class="form-control" placeholder="fullname" value="<?php echo $user->FULL_NAME ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>No KTP</label>
                            <input required type="text" name="ktp" class="form-control" placeholder="Kode Parent" value="<?php echo $user->NO_KTP ?>">
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
                        <div class="form-group col-md-6">
                            <label>Agama</label>
                            <select name="religi" class="form-control">
                                <option value="">--Pilih--</option>

                                <?php foreach ($agamalist as $agamalist) {
                                    if (trim($agamalist->CODE) === trim($user->RELIGION)) { ?>
                                        <option value="<?php echo $user->RELIGION; ?>" selected>
                                            <?php echo $agamalist->DESCRIPTION; ?> </option>
                                    <?php } else { ?>
                                        <option value="<?php echo $agamalist->CODE; ?>">
                                            <?php echo $agamalist->DESCRIPTION; ?> </option>
                                <?php }
                                } ?>
                            </select>
                            <!-- <input required type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="<?php echo $user->DESCRIPTION ?>"> -->
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Pendidikan</label>
                            <select name="edu" class="form-control">
                                <option value="">--Pilih--</option>

                                <?php foreach ($edulist as $edulist) {
                                    if (trim($edulist->CODE) === trim($user->CD_EDU)) { ?>
                                        <option value="<?php echo $user->CD_EDU; ?>" selected>
                                            <?php echo $edulist->DESCRIPTION; ?> </option>
                                    <?php } else { ?>
                                        <option value="<?php echo $edulist->CODE; ?>">
                                            <?php echo $edulist->DESCRIPTION; ?> </option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Pekerjaan</label>
                            <select name="job" class="form-control">
                                <option value="">--Pilih--</option>

                                <?php foreach ($joblist as $joblist) {
                                    if (trim($joblist->CODE) === trim($user->JOB)) { ?>
                                        <option value="<?php echo $user->JOB; ?>" selected>
                                            <?php echo $joblist->DESCRIPTION; ?> </option>
                                    <?php } else { ?>
                                        <option value="<?php echo $joblist->CODE; ?>">
                                            <?php echo $joblist->DESCRIPTION; ?> </option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"><?php echo $user->ALAMAT; ?></textarea>
                    </div>



                    <div class="form-group">
                        <label>status</label>
                        <select name="nikah" class="form-control">
                            <option value="">--Pilih--</option>

                            <?php foreach ($nikahlist as $nikahlist) {
                                if (trim($nikahlist->CODE) === trim($user->RELATIONSHIP)) { ?>
                                    <option value="<?php echo $user->RELATIONSHIP; ?>" selected>
                                        <?php echo $nikahlist->DESCRIPTION; ?> </option>
                                <?php } else { ?>
                                    <option value="<?php echo $nikahlist->CODE; ?>">
                                        <?php echo $nikahlist->DESCRIPTION; ?> </option>
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