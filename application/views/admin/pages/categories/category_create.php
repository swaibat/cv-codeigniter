
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Create Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form type='POST' action="<?php echo base_url() . 'admin/category_create'; ?>">
					<div class="form-group">
						<label class=" col-sm-3 control-label"><?php echo trans('name'); ?></label>
						<div class="col-sm-12">
							<input type="text" name="name" class="form-control" required>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3"><?php echo trans('description'); ?></label>
						<div class="col-sm-12">
							<textarea class="wysihtml5 form-control" name="description" rows="10"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3"><?php echo trans('icon'); ?></label>
						<div class="col-sm-12">
							<div class="profile-info-name text-center"> <img id="thumb_image" src="<?php echo base_url('uploads/default_image/category.png') ?>" class="img-thumbnail bg-gray-50" alt="category" width="120"> </div>
							<br>
							<div id="thumbnail_content">
								<input type="file" id="thumbnail_file" onchange="showImg(this);" name="image" class="filestyle" data-input="false" accept="image/*"></div><br>
							<p class="btn btn-white" id="thumb_link" href="#"><span class="btn-label"><i class="fa fa-link"></i></span><?php echo trans('link'); ?></p>
							<p class="btn btn-white" id="thumb_file" href="#"><span class="btn-label"><i class="fa fa-file-o"></i></span><?php echo trans('file'); ?></p><br>
							<small><?php echo trans('category_country_icon_note'); ?></small>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3"><?php echo trans('featured'); ?></label>
						<div class="col-sm-12">
							<select class="form-control m-bot15" name="featured">
								<option value="0"><?php echo trans('none_featured'); ?></option>
								<option value="1"><?php echo trans('featured'); ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3"><?php echo trans('publication'); ?></label>
						<div class="col-sm-12">
							<select class="form-control m-bot15" name="publication">
								<option value="1"><?php echo trans('published'); ?></option>
								<option value="0"><?php echo trans('unpublished'); ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9 m-t-15">
							<button type="submit" class="btn btn-sm btn-primary waves-effect"> <span class="btn-label"><i class="fa fa-plus"></i></span><?php echo trans('create'); ?> </button>
							<button type="" class="btn btn-sm btn-white m-l-5 waves-effect" data-dismiss="modal"><?php echo trans('close'); ?> </button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function showImg(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#thumb_image')
					.attr('src', e.target.result)
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
