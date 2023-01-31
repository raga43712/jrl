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
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            }
            if ($this->session->flashdata('dihapus')) {
                echo '<div class="alert alert-danger">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('dihapus');
                echo '</div>';
            }
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button></div>'); ?>

            <div class="card mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="utama-tab" data-toggle="tab" href="#utama" role="tab" aria-controls="utama" aria-selected="true">Program Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('admin/proker/detail') ?>" aria-selected="false">Detail Program</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- menu pertama -->
                        <div class="tab-pane fade show active" id="utama" role="tabpanel" aria-labelledby="utama-tab">
                            <div class="d-flex">
                                <!-- <select id="pilih_pokja" name="id_pokja" class="form-control col-md-2 mr-2">
                                    <?php // foreach ($pokja as $pokja) { ?>
                                        <option value="<?php // echo $pokja->id_pokja ?>">
                                            <?php // echo $pokja->nama_pokja ?></option>
                                    <?php // } ?>
                                </select> -->
                                <p><a href="<?php echo site_url('admin/proker/tambah_utama') ?>" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Tambah Program Utama</a></p>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="25px" class="text-center">No.</th>
                                            <th>Pokja</th>
                                            <th>Program Kerja Utama</th>
                                            <th width="190px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($proker as $proker) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i ?></td>
                                                <td>
                                                    <?php echo $proker->nama_pokja ?>
                                                </td>
                                                <td>
                                                    <?php echo $proker->nama_proker_utama ?>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="<?php echo base_url('admin/proker/edit_utama/' . $proker->id_proker_utama) ?>" class="btn btn-light btn-sm mr-1"><i class="fa fa-edit"></i> Ubah</a>
                                                    <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#Delete<?php echo $proker->id_proker_utama ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <div class="modal fade" id="Delete<?php echo $proker->id_proker_utama ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus data ini?</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-left">
                                                                    Data yang telah dihapus tidak bisa dikembalikan.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                                    <a href="<?php echo base_url('admin/proker/delete_utama/' . $proker->id_proker_utama) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>