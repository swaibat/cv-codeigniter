<footer></footer>
<!-- ajax modal  -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="confirm">
			<h1>Confirm Delete</h1>
			<p class="mb-2">Are you sure ?</p>
			<p><strong id="title">really</strong> will be deleted parmanently</p>
			<button type="button" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Confirm</button>
		</div>
	</div>
</div>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div id="dynamic-content"></div>
		</div>
	</div>
</div>
<!-- /.modal -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

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
	$(".delete").on('click', (e) => {
		e.preventDefault()
		console.log(e.target.name)
		$('#title').text(e.target.name)

		// var table_row = '#row_' + e.target.id
		// const url = base_url + 'admin/delete_record/'
		// swal({
		// 		title: 'Are you sure?',
		// 		text: "It will be deleted permanently!",
		// 		icon: "warning",
		// 		buttons: true,
		// 		buttons: ["Cancel", "Delete"],
		// 		dangerMode: true,
		// 		closeOnClickOutside: false
		// 	})
		// 	.then(function(confirmed) {
		// 		if (confirmed) {
		// 			$.ajax({
		// 					url: url,
		// 					type: 'POST',
		// 					data: 'row_id=' + e.target.id + '&table_name=' + e.target.name,
		// 					dataType: 'json'
		// 				}).done(function(response) {
		// 					swal.stopLoading();
		// 					swal("Deleted!", response.message, response.status);
		// 					$(table_row).fadeOut(2000);
		// 				})
		// 				.fail(function() {
		// 					swal('Oops...', 'Something went wrong with ajax !', 'error');
		// 				})
		// 		}
		// 	})
	})
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
