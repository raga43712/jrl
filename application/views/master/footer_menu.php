x<footer class="main-footer">

  <strong>Copyright &copy; 2020 </strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- jQuery UI 1.11.4 -->


<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

<script src="<?php echo base_url('assets/bower_components/font-awesome/js/all.js'); ?>"></script>

<script src="<?php echo base_url('assets/bower_components/font-awesome/js/brands.js'); ?>"></script>

<script src="<?php echo base_url('assets/bower_components/font-awesome/js/solid.js'); ?>"></script>

<script src="<?php echo base_url('assets/bower_components/font-awesome/js/fontawesome.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-validation/additional-methods.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/sweetalert2/package/dist/sweetalert2.all.min.js'); ?>"></script>
<script>
  $(document).ready(function() {
    var dataTable = $('#example1').DataTable({
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "searching": false,
      "lengthChange": false,
      "language": {
        "infoFiltered": ""
      },
      "order": [],
      "ajax": {
        url: "<?php echo base_url() . 'master/menu/fetch_menu'; ?>",
        type: "POST",
        "data": function(data) {
          data.groupName = $('#fromgroup').val();
          data.menuName = $('#menu').val();

        }

      },
      "columnDefs": [{

        "target": [0, 3, 4],
        "orderable": false
      }]
    });

    $('#btn-filter').click(function() { //button filter event click
      dataTable.ajax.reload(); //just reload table
    });

    $('#btn-reset').click(function() { //button reset event click
      $('#form-filter')[0].reset();
      dataTable.ajax.reload(); //just reload table
    });

    $(document).on('submit', '#user_form', function(event) {
      event.preventDefault();
      var nim = $("#nim").val();
      var fullname = $("#fullname").val();
      var cbojurusan = "<?php echo base_url() . 'user/select_cbo_parameter()'; ?>";
      $('.jurusan').append(cbojurusan);

      if (nim != '' && fullname != '') {
        $.ajax({
          url: "<?php echo base_url() . 'master/menu/menu_action'; ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(response) {
            if (response == 'masuk') {

              Swal.fire({
                icon: 'success',
                title: 'success',
                text: 'Data telah berhasil di tambahkan !',
                showConfirmButton: false,
                timer: 1500
              }) // end sweet alert
            } else if (response == 'ubah') {
              Swal.fire({
                icon: 'success',
                title: 'success',
                text: 'Data telah berhasil di ubah !',
                showConfirmButton: false,
                timer: 1500
              })
            } //end if
            $('#user_form')[0].reset();
            $('#modal-lg').modal('hide');
            $('#action').val("Add");
            $('.modal-title').text("Add Menu");
            dataTable.ajax.reload();
            location.reload(true);
          }
        });

      } else {
        alert("Both field are required !");
      }
    });

    $(document).on('click', '.edit', function(event) {
      var user_id = $(this).attr('id');
      $.ajax({
        url: "<?php echo base_url() . 'master/menu/fetch_single_user'; ?>",
        method: "POST",
        data: {
          user_id: user_id
        },
        dataType: "json",
        success: function(data) {

          $('#modal-lg').modal('show');
          $('#childmenu').val(data.CHILD);
          $('#parentmenu').val(data.PARENT);
          $('#group').val(data.GROUP_USER);
          $('#publiccode').val(data.PUBLIC_CODE);
          $('#deskripsi').val(data.DESCRIPTION);
          $('#aktif').val(data.FLAG_ACTIVE);
          $('#url').val(data.URL);
          $('#icon').val(data.ICON);
          $('#unik').val(data.ID_TREE);
          $('.modal-title').text("Edit Menu");
          $('#action').val("Edit");

        }
      })
    });

    $(document).on('click', '.close', function(event) {
      var user_id = $(this).attr('id');
      $('#user_form')[0].reset();
      $('#modal-lg').modal('hide');
      $('#action').val("Add");
      $('.modal-title').reset();
    });

    $(document).on('click', '.delete', function(event) {
      var user_id = $(this).attr('id');
      Swal.fire({
        title: 'Are you sure?',
        text: "Data Menu akan di hapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "<?php echo base_url() . 'master/menu/delete_single_user'; ?>",
            method: "POST",
            data: {
              user_id: user_id
            },
            success: function(data) {
              dataTable.ajax.reload();
              Swal.fire({
                icon: 'success',
                title: 'success',
                text: 'Data telah berhasil di hapus !',
                showConfirmButton: false,
                timer: 1500
              })
            }
          })


        } // end if
      }) //end sweetalert


    });
    $(document).on('submit', '#formPassword', function(event) {
      event.preventDefault();

      $.ajax({
        url: "<?php echo base_url() . 'login/NewPassword'; ?>",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response) {
          if (response == 'ubah') {
            Swal.fire({
              icon: 'success',
              title: 'success',
              text: 'Password telah berhasil di ubah !',
              showConfirmButton: false,
              timer: 1500
            })
            $('#modal-default').modal('hide');
          } else if (response == 'beda') {
            Swal.fire({
              icon: 'error',
              title: 'Oops..',
              text: 'Password tidak sama !',
              showConfirmButton: false,
              timer: 1500
            })
          } else if (response == 'null') {
            Swal.fire({
              icon: 'error',
              title: 'Oops..',
              text: 'Password kosong !',
              showConfirmButton: false,
              timer: 1500
            })
          } //end if

        }
      });


    });


    $('#user_form').validate({
      rules: {
        parentmenu: {
          required: true,
        },
        childmenu: {
          required: true
        },
        deskripsi: {
          required: true
        },
        group: {
          required: true
        },
        aktif: {
          required: true
        }
      },
      messages: {
        parentmenu: {
          required: "Kode Parent Tidak Boleh Kosong..."
        },
        childmenu: {
          required: "Kode Child tidak boleh Kosong ..."
        },
        deskripsi: {
          required: "Deskripsi Menu tidak boleh Kosong ..."
        },
        group: {
          required: "Pilih salah satu Group User ..."
        },
        aktif: {
          required: "Pilih Salah satus Status user ..."
        }
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

  });
</script>
</body>

</html>