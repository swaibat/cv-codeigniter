<div class="card">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<a href="<?php echo base_url() . 'admin/posts_add'; ?>" class="btn btn-sm btn-primary mb-n5 ml-3"><span class="btn-label"><i class="fa fa-plus"></i></span>
				Add Post
			</a>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>s/n</th>
						<th>title</th>
						<th>author</th>
						<th>post category</th>
						<th>created at</th>
						<th>status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $sl = 1;
					$posts = $this->db->get('posts')->result_array();
					foreach ($posts as $posts) :
					?>
						<tr id='row_<?= $posts['posts_id']; ?>'>
							<td><?= $sl++; ?></td>
							<td><?= $posts['post_title']; ?></td>
							<td><?= $this->user_model->get_user_name($posts['user_id']); ?></td>
							<td><?= $this->common_model->get_category_name($posts['category_id']); ?></td>
							<td><?= date("d-m-Y, H:i:s", strtotime($posts['post_at'])); ?></td>
							<td class="text-center">
								<div class="custom-control custom-switch">
									<input type="checkbox" <?= $posts['status'] == '1' ? 'checked' : '' ?> class="custom-control-input" id="custom<?= $posts['posts_id']; ?>">
									<label class="custom-control-label" for="custom<?= $posts['posts_id']; ?>"></label>
								</div>
							</td>
							<td class="text-center">
								<div class="btn-group btn-group-sm">
									<a class="btn btn-outline-primary" href="<?php echo base_url() . 'admin/post_edit/' . $posts['posts_id']; ?>">
										<ion-icon src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z'/%3E%3C/svg%3E"></ion-icon>
									</a>
									<a href="#" name='<?= $posts['post_title']; ?>' class='btn btn-primary delete' id='del_<?= $posts['posts_id']; ?>' data-id='<?= $posts['posts_id']; ?>' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
										<ion-icon name="trash-bin"></ion-icon>
									</a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				</tfoot>
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

<!-- select2-->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- select2-->
