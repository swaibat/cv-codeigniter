
<div class="card">
	<div class="row">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'admin/posts_add/', array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data')); ?>
			<div class="form-row modal-body p-4">
				<div class="col-md-12">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input id='title' name="post_title" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">title</label>
					</div>
				</div>
				<div class="col-md-6 d-none">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="person-outline"></ion-icon>
							</span></div><input id="slug" name="slug" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">slug</label>
					</div>
				</div>
				<div class="col-md-12 pt-3">
					<div class="form-group px-3">
						<textarea class="wysihtml5 form-control rounded" name="content" id="content" rows="20"></textarea>
					</div>
				</div>
				<div class="col-md-4">
					<div class="cv-form-group form-group mt-4 px-3">
						<select name='category_id[]' class="form-control js-select2">
							<option>Select Post Category</option>
							<?php
							$categories = $this->db->get('post_category')->result_array();
							foreach ($categories as $category) : ?>
								<option value='<?php echo $category['post_category_id']; ?>'><?php echo $category['category']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-5">
					<div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
						<span class="mt-2">Publish the post :</span>
						<span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1' type="checkbox" name="status" class="checkbox">
							<div class="knobs"><span>YES</span></div>
							<div class="layer"></div>
						</span>
					</div>
				</div>
				<div class="col-md-12 px-3 mt-4">
					<h6>search engine listing preview</h6>
					<hr>
				</div>
				<div class="col-md-12">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="briefcase-outline"></ion-icon>
							</span></div><input name="focus_keyword" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">focus keywords separated by commas</label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="input-group mb-3 mt-4 px-3">
						<textarea name="meta_description" class="form-control custom-input px-0"></textarea>
						<span class="bar"></span>
						<label class="cv-label left text-capitalize position-absolute mt-n4">description</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-sm">submit</button>
			</div>
			</form>

			<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
			<script>
				$(document).ready(function() {
					$(".js-select2").select2();
					$("#publication").on('change', (e) => {
						const {
							target
						} = e
						target.checked === true ? target.value = '0' : target.value = '1';
						console.log(e.target.value);
					})
				});
				jQuery(document).ready(function() {
					$('form').parsley();

				});
			</script>
			<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('form').parsley();
				});
			</script>
			<!-- select2-->
			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
			<script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
			<!-- select2-->

			<!--form validation init-->
			<script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
			<script>
				jQuery(document).ready(function() {
					$('#content').summernote({
						height: 400, // set editor height
						minHeight: null, // set minimum height of editor
						maxHeight: null, // set maximum height of editor
						focus: false // set focus to editable area after initializing summernote
					});
					$('#stars').tagsinput();
					$('#focus_keyword').tagsinput();
				});
			</script>
			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
			<!-- file select-->
			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
			<!-- file select-->
			<script>
				jQuery(document).ready(function() {
					$('#thumb_link').click(function() {
						$('#thumbnail_content').html('<input type="text" name="thumb_link" class="form-control">');
					});

					$('#thumb_file').click(function() {
						$('#thumbnail_content').html('<input type="file" id="thumbnail_file" onchange="showImg(this);" name="thumbnail" class="filestyle" data-input="false" accept="image/*"></div>');
					});
				});
			</script>

			<script>
				$("#title").keyup(function() {
					var Text = $(this).val();
					Text = Text.toLowerCase();
					Text = Text.replace(/[^\w ]+/g, '');
					Text = Text.replace(/ +/g, '-');
					$("#slug").val(Text);
				});
			</script>

			<!--instant image dispaly-->
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
			<!--end instant image dispaly-->
