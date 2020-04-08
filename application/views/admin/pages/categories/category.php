<style>
	.checks-btns .checkbox {
		position: relative;
		width: 100%;
		height: 100%;
		padding: 0;
		margin: 0;
		opacity: 0;
		cursor: pointer;
		z-index: 3;
	}
</style>
<div class="card">
	<div class="row">
		<div class="col-sm-12 mt-n3">
			<button data-toggle="modal" data-target="#exampleModalCenter"  id="menu" class="btn btn-sm btn-primary mb-n5"><span class="btn-label"><i class="fa fa-plus"></i></span>
				<?php echo trans('add_category'); ?>
			</button>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Icon</th>
						<th>slug</th>
						<th>featured</th>
						<th>status</th>
						<th class="text-center">Operations</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categorys as $category) : ?>
						<tr>
							<td>
								<?php echo $category['name']; ?>
							</td>
							<td><img class="img-responsive img-thumbnail bg-gray-50" width="35" src="<?php echo $this->common_model->get_category_image_url($category['category_id']); ?>"></td>
							<td>
								<?php echo $category['slug']; ?>
							</td>
							<td>
								<?php echo ($category['featured'] == '1') ? '<span class="label label-primary label-xs">Featured</span>' : ''; ?>
							</td>
							<td>
								<?php echo ($category['publication'] == '1') ? '<span class="badge alert-success">Published</span>' : '<span class="badge alert-warning">Unublished</span>'; ?>
							</td>
							<td class="text-center">
								<span class="button b2" id="button-10"><input type="checkbox" name="listedBy" class="checkbox">
									<div class="knobs"><span>YES</span></div>
									<div class="layer"></div>
		</div></span>
		</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<!-- end col-12 -->
</div>
</div>
<?php include 'category_create.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			dom: "<'top'f>" + "<'bottom't>" +
				"<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>"
		});
	});
</script>
