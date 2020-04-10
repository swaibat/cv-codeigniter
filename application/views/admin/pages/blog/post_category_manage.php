<div class="card">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?= base_url() . 'admin/post_category/add/'; ?>" class="btn btn-sm btn-primary mb-n5 ml-3"><span class="btn-label"><i class="fa fa-plus"></i></span>
				Post Category
			</a>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>S/N</th>
						<th>Category</th>
						<th>created at</th>
						<th class="text-center">Status</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $sl = 1;
					foreach ($post_categories as $post_category) :
					?>
						<tr>
							<td><?= $sl++; ?></td>
							<td><?= $post_category['category']; ?></td>
							<td><?= $post_category['created_at']; ?></td>
							<td class="text-center">
								<div class="custom-control custom-switch">
									<input type="checkbox" <?= $post_category['status'] == '1' ? 'checked' : '' ?> class="custom-control-input" id="custom<?= $post_category['post_category_id']; ?>">
									<label class="custom-control-label" for="custom<?= $post_category['post_category_id']; ?>"></label>
								</div>
							</td>
							<td class="text-center">
								<div class="btn-group btn-group-sm">
									<a data-toggle="modal" data-target="#mymodal" data-id="<?= base_url() . 'admin/view_modal/post_category_edit/' . $post_category['post_category_id']; ?>" id="menu" title="<?= trans('edit'); ?>" class="btn btn-outline-primary">
										<ion-icon src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z'/%3E%3C/svg%3E"></ion-icon>
									</a>
									<a href="#" name='<?= $post_category['category']; ?>' class='btn btn-primary delete' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
										<ion-icon name="trash-bin"></ion-icon>
									</a>
								</div>
							</td>
						<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
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

<!-- select2-->
<script src="<?= base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- select2-->
