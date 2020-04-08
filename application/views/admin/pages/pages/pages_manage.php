<div class="card">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?php echo base_url() . 'admin/pages_add'; ?>" class="btn btn-sm btn-primary mb-n5"><span class="btn-label"><i class="fa fa-plus"></i></span><?php echo trans('add_page'); ?></a>

			<table id="example" class="table table-striped custom-table" style="width:100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Slug</th>
						<th>Office</th>
						<th>created at</th>
						<th>Status</th>
						<th class="text-center">Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
					switch ($type) {
						case 'published':
							$this->db->order_by('page_id', 'DESC');
							$pages = $this->db->get_where('page', array('publication' => '1'))->result_array();
							break;
						case 'unpublished':
							$this->db->order_by('page_id', 'DESC');
							$pages = $this->db->get_where('page', array('publication' => '0'))->result_array();
							break;
						default:
							$this->db->order_by('page_id', 'DESC');
							$pages = $this->db->get('page')->result_array();
							break;
					}
					foreach ($pages as $page) :
					?>
						<tr>
							<td><?php echo $page['page_title']; ?></td>
							<td><?php echo $page['slug']; ?></td>
							<td>Edinburgh</td>
							<td><?php echo date('d M Y H:i:s', strtotime($page['publish_at'])); ?></td>
							<td>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="switch1" <?php echo ($page['publication'] == '1') ? 'checked' : '' ?> name="example">
									<label class="custom-control-label" for="switch1"></label>
								</div>
							</td>
							<td class="text-center">
								<div class="btn-group btn-group-sm">
									<div class="btn btn-primary">
										+
									</div>
									<div class="btn btn-danger">
										-
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			dom: "<'top'f>" + "<'bottom't>" +
				"<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>"
		});
	});
	$(document).ready(function() {
		$('form').parsley();
	});
</script>
<!-- Date picker auto-close -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
<!-- date picker-->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- date picker-->
<!-- file select-->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
<!-- file select-->
