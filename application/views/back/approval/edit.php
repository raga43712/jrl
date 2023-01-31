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
            echo form_open('#');
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('file/Approval') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="form-group ">
                        <label>Nama Lengkap </label>
                        <input required type="text" name="fullname" id="fullname" class="form-control" placeholder="fullname" readonly value="<?php echo $user->FULL_NAME ?>">
                        <input type="hidden" name="id_resident" value="<?php echo $user->CD_RESIDENT ?>">
                    </div>


                    <div class="form-group ">
                        <label>Jenis Berkas</label>
                        <select name="jenis" class="form-control" readonly>
                            <option value="">--Pilih--</option>

                            <?php foreach ($doklist as $doklist) {
                                if (trim($doklist->CODE) === trim($user->TUJUAN)) { ?>
                                    <option value="<?php echo $user->TUJUAN; ?>" selected>
                                        <?php echo $doklist->DESCRIPTION; ?> </option>
                                <?php } else { ?>
                                    <option value="<?php echo $doklist->CODE; ?>">
                                        <?php echo $doklist->DESCRIPTION; ?> </option>
                            <?php }
                            } ?>
                        </select>
                        <!-- <input required type="text" name="icon" class="form-control" placeholder="icon" value="<?php echo $user->ICON ?>"> -->
                    </div>







                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea readonly class="form-control" name="note" id="note" rows="3"><?php echo $user->NOTE; ?></textarea>
                    </div>

                    <div class="form-group mb-2">
                        <!-- <input type="reset" name="reset" value="Reject" class="btn btn-secondary">
                        <input type="submit" name="submit" value="Approve" class="btn btn-success"> -->
                        <a onclick="approveConfirm('<?php echo site_url('file/Approval/approve/' . $user->REQUEST_ID) ?>')" id='btn-aproval' href="#!" class="btn btn-success btn-sm">Approve</a>
                        <a onclick="rejectConfirm('<?php echo site_url('file/Approval/reject/' . $user->REQUEST_ID) ?>')" href="#!" id='btn-reject' class="btn btn-danger btn-sm">Reject</a>
                    </div>
                    <?php echo form_close() ?>
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->
        </div> <!-- akhir container fluid -->
    </main>