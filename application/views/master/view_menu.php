  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-external-link-alt"></i>
                  <strong>
                    <?php foreach ($cboMenu as $isiMenu) {
                      echo $isiMenu['DESCRIPTION'];
                    } ?></strong>


                </h3>

                <div align="right">
                  <button type="button" data-toggle="modal" data-target="#modal-lg" data-whatever="@mdo" class="btn btn-info "><i class="fas fa-plus-circle"></i> Baru</button>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <div class="panel panel-default">

                  <div class="panel-body">
                    <form id="form-filter" class="form-horizontal">
                      <div class="row">
                        <div class="col-sm-1">
                          <label>Search :</label>
                        </div>
                        <div class="col-sm-4">
                          <!-- select -->
                          <div class="form-group">

                            <select name="fromgroup" id="fromgroup" class="form-control ">
                              <option value="">-Pilih Group User-</option>
                              <?php foreach ($getMenu as $getMenu) { ?>
                                <option value="<?php echo $getMenu['CODE']; ?>">
                                  <?php echo $getMenu['DESCRIPTION']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">

                            <select name="menu" id="menu" class="form-control jurusan">
                              <option value="">-Pilih Menu-</option>
                              <?php foreach ($getMenulist as $getMenulist) { ?>
                                <option value="<?php echo $getMenulist['public_code']; ?>">
                                  <?php echo $getMenulist['DESCRIPTION']; ?></option>
                              <?php  } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">

                          <button type="button" id="btn-filter" class="btn btn-primary"><i class="fas fa-search"></i> Filter</button>
                          <button type="button" id="btn-reset" class="btn btn-default"><i class="fas fa-undo"></i> Reset</button>


                        </div>
                      </div>
                  </div>
                  </form>
                </div>
              </div>

              <table id="example1" class="table table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Group</th>
                    <th>Nama Group</th>
                    <th>Kode Menu</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.col -->
      <!-- ./col -->
  </div>





  <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <form method="POST" id="user_form">
        <div class="modal-content">
          <div class="modal-header" style=" background-color: blue; color: cornsilk;">
            <h4 class="modal-title">Tambah Menu Baru</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: floralwhite;">

            <div class="row">
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Group</label>
                <select name="group" id="group" class="form-control jurusan">
                  <option value="">-Pilih Group User-</option>
                  <?php foreach ($cboGroup as $isigroup) { ?>
                    <option value="<?php echo $isigroup['CODE']; ?>">
                      <?php echo $isigroup['DESCRIPTION']; ?></option>
                  <?php  } ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Kode Parent:</label>
                <input type="text" class="form-control" name="parentmenu" id='parentmenu'>
                <input type="hidden" class="form-control" name="unik" id="unik">
              </div>
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Kode Child:</label>
                <input type="text" class="form-control" name="childmenu" id='childmenu'>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Kode Publik:</label>
                <input type="text" name="publiccode" class="form-control" id="publiccode">
                <input type="hidden" class="form-control" name="action" id="action" value="Add">
              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Deskripsi:</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi">

              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">Icon:</label>
                <input type="text" name="icon" class="form-control" id="icon">

              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">URL:</label>
                <input type="text" name="url" class="form-control" id="url">

              </div>
            </div>


            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Aktif</label>
              <select name="aktif" id="aktif" class="form-control jurusan">
                <option value="">-Pilih Status Menu-</option>
                <?php foreach ($cboAktif as $isiAktif) { ?>
                  <option value="<?php echo $isiAktif['CODE']; ?>">
                    <?php echo $isiAktif['DESCRIPTION']; ?></option>
                <?php  } ?>
              </select>
            </div>


          </div>
          <div class="modal-footer">
            <input type="submit" name="action" class="btn btn-success" value="Submit" />


          </div>

        </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->