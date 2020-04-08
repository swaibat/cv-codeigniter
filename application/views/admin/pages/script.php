<footer></footer>
    <!-- ajax modal  -->

    <div id="mymodal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content p-0 b-0">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">
                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">Ã—</button>
                        <h3 class="panel-title text-light"><?php echo $page_title; ?></h3>
                    </div>
                    <div class="modal-body">
                        <div id="modal-loader" style="display: none; text-align: center;"> <img src="<?php echo base_url(); ?>assets/images/preloader.gif" /> </div>

                        <!-- content will be load here -->
                        <div id="dynamic-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '#menu', function(e) {
				console.log(e.target)
                e.preventDefault();
                var url = $(this).data('id'); // it will get action url
                $('#dynamic-content').html(''); // leave it blank before ajax call
                $('#modal-loader').show(); // load ajax loader
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html'
                })
                .done(function(data) {
                    $('#dynamic-content').html('');
                    $('#dynamic-content').html(data); // load response 
                    $('#modal-loader').hide(); // hide ajax loader 
                })
                .fail(function() {
                    $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader').hide();
                });
            });
        });
    </script>
    <!-- END Ajax modal  -->

    <!-- Ajax Delete -->
    <script type="text/javascript">
        function delete_row2(table_name, row_id) {
            var table_row = '#row_' + row_id
            var base_url = '<?php echo base_url(); ?>'
            url = base_url + 'admin/delete_record/'
            swal({
                title: "Are you Sure??",
                text: "it will be delete permanently",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3CB371',
                cancelButtonText: "Cancel",
                confirmButtonText: "yes! Delete it.",
                showLoaderOnConfirm: true,
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                            url: url,
                            type: 'POST',
                            data: 'row_id=' + row_id + '&table_name=' + table_name,
                            dataType: 'json'
                        })
                        .done(function(response) {
                            //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                            swal("Deleted", response.message, response.status);
                            $(table_row).fadeOut(2000);
                        })
                        .fail(function() {
                            swal('Oops...', response.message, response.status);
                        });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    </script>
    <script type="text/javascript">
        function delete_row(table_name, row_id) {
            var table_row = '#row_' + row_id
            var base_url = '<?php echo base_url(); ?>'
            url = base_url + 'admin/delete_record/'
            swal({
                    title: 'Are you sure?',
                    text: "It will be deleted permanently!",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Cancel", "Delete"],
                    dangerMode: true,
                    closeOnClickOutside: false
                })
                .then(function(confirmed) {
                    if (confirmed) {
                        $.ajax({
                                url: url,
                                type: 'POST',
                                data: 'row_id=' + row_id + '&table_name=' + table_name,
                                dataType: 'json'
                            })
                            .done(function(response) {
                                swal.stopLoading();
                                swal("Deleted!", response.message, response.status);
                                $(table_row).fadeOut(2000);
                            })
                            .fail(function() {
                                swal('Oops...', 'Something went wrong with ajax !', 'error');
                            })
                    }
                })
        }
    </script>
    <!-- END Ajax Delete -->

    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!--sweet alert2 JS -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            var success_message = '<?php echo $this->session->flashdata('success'); ?>';
            var error_message = '<?php echo $this->session->flashdata('error'); ?>';
            if (success_message != '') {
                swal('Success!', success_message, 'success');
            }
            if (error_message != '') {
                swal('Error!', error_message, 'error');
            }
        });
    </script>
    <!--END sweet alert2 JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#datatable').DataTable();
    </script>
</body>

</html>
