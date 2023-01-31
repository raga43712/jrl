<script src="<?php echo base_url('back_assets/js/all.min.js') ?>" crossorigin="anonymous"></script>
<script src="<?php echo base_url('back_assets/js/jquery-3.5.1.min.js') ?>"></script>
<script src="<?php echo base_url('back_assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('back_assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('back_assets/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('back_assets/js/panel.sidebar.js') ?>"></script>
<script src="<?php echo base_url('back_assets/js/datatables-used.js') ?>"></script>
<script src="<?php echo base_url('back_assets/sweetalert2/package/dist/sweetalert2.all.min.js'); ?>"></script>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    function approveConfirm(url) {
        $('#btn-aproval').attr('href', url);
        // $('#approvalModal').modal();
    }

    function rejectConfirm(url) {
        $('#btn-reject').attr('href', url);
        // $('#deleteModal').modal();
    }
</script>
<script>
    function showME() {
        var x = document.getElementById("laporanku");
        var button = document.getElementById("btnku");
        if (x.style.display === "none") {
            x.style.display = "block";
            button.style.btn = "btn-danger";
        } else {
            x.style.display = "none";
        }
    }




    $(document).on('click', '#submitall', function(event) {
        event.preventDefault();
        var user_id = $(this).attr('id');
        var dataTable = $('#example1').DataTable();
        Swal.fire({
            title: 'Are you sure?',
            text: "Data akan segera di proses dan tidak dapat di ubah lagi !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Proses'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url() . 'file/request/submit_all'; ?>",
                    method: "POST",
                    data: {
                        user_id: user_id
                    },
                    beforeSend: function(data) {
                        $('.btn_proses').prop('disabled', 'disabled');
                        $('.btn_proses').html('<i class="fa fa-spin fa-spinner"></i>');
                    },

                    // complete: function(data) {
                    //     // $('.btn_proses').removeAttr('disabled');
                    //     // $('.btn_proses').html('<i class="fas fa-circle-notch"></i> Proses');
                    // },
                    success: function(data) {
                        if (data == 'masuk') {
                            Swal.fire({
                                icon: 'success',
                                title: 'success',
                                text: 'Data telah berhasil di proses !',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('.btn_proses').removeAttr('disabled');
                            $('.btn_proses').html('<i class="fas fa-circle-notch"></i> Proses');

                        } else if (data == 'null') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops..',
                                text: 'Data kosong tidak dapat di proses !',
                                showConfirmButton: false,
                                timer: 1500
                            })

                            $('.btn_proses').removeAttr('disabled');
                            $('.btn_proses').html('<i class="fas fa-circle-notch"></i> Proses');
                        }
                        // dataTable.ajax.reload();
                        location.reload();

                    }
                })


            } // end if
        }) //end sweetalert

    });


    document.addEventListener("keydown", function(event) {

        var keyboard = event.keyCode;
        if (keyboard == 121) {
            Swal.fire({
                icon: 'warning',
                title: 'Copyright',
                text: 'Created by wendy.bayu@gmail.com - 2021',
                showConfirmButton: false,
                timer: 2000
            })
        }
    });
</script>
</body>

</html>