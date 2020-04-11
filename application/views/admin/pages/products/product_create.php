<div class="card border-0 shadow-xs">
	<div class="row">
		<div class="col-sm-12">
			<?php echo form_open(base_url() . 'admin/product_create/', array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data')); ?>
			<div class="form-row modal-body p-4">
				<div class="col-md-9">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input id='title' name="title" type="text"  class="form-control custom-input" required><span class="bar"></span><label class="cv-label left text-capitalize">title</label>
					</div>
				</div>
				<div class="col-md-3">
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
				<div class="col-md-6 d-none">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="person-outline"></ion-icon>
							</span></div><input id="slug" name="slug" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">slug</label>
					</div>
				</div>
				<div class="col-md-12 pt-3">
					<div class="form-group px-3">
						<textarea class="wysihtml5 form-control rounded" name="description" id="description" rows="20"></textarea>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input name="price" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">Price</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input name="compare_price" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">Compare to price</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input  name="available_quantity" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">available quantity</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group input-group mb-3 mt-4 px-3">
						<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
								<ion-icon name="trail-sign-outline"></ion-icon>
							</span></div><input name="sku" type="text" class="form-control custom-input" required=""><span class="bar"></span><label class="cv-label left text-capitalize">SKU (Stock Keeping Unit)</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group form-group mt-4 px-3">
						<select name='category' class="form-control js-select2">
							<option>Select Category</option>
							<?php
							$categories = $this->db->get('post_category')->result_array();
							foreach ($categories as $category) : ?>
								<option value='<?php echo $category['post_category_id']; ?>'><?php echo $category['category']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group form-group mt-4 px-3">
						<select name='country' class="form-control js-select2">
							<option>Product location</option>
							<?php
							$categories = $this->db->get('post_category')->result_array();
							foreach ($categories as $category) : ?>
								<option value='<?php echo $category['post_category_id']; ?>'><?php echo $category['category']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="cv-form-group form-group mt-4 px-3">
						<select name='vendor' class="form-control js-select2">
							<option>Select Vendor/store</option>
							<?php
							$categories = $this->db->get('post_category')->result_array();
							foreach ($categories as $category) : ?>
								<option value='<?php echo $category['post_category_id']; ?>'><?php echo $category['category']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="input-group mb-3 mt-4 px-3 d-flex align-items-center">
						<span class="mt-2">Publish the product :</span>
						<span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id='status' value='1' type="checkbox" name="status" class="checkbox">
							<div class="knobs"><span>YES</span></div>
							<div class="layer"></div>
						</span>
					</div>
				</div>

				<div class="col-md-12 px-3">
					<div class="input-group mb-3 mt-4 py-3 d-flex align-items-center border-dashed d-flex justify-content-center">
						<div class="p-2 d-flex flex-column text">
							<img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126.875' height='84.875' viewBox='0 0 126.875 84.875'%3E%3Cg id='Group_8' data-name='Group 8' transform='translate(-882 -522)'%3E%3Cg id='Group_7' data-name='Group 7'%3E%3Cg id='Group_6' data-name='Group 6'%3E%3Cg id='Group_5' data-name='Group 5'%3E%3Cg id='Group_4' data-name='Group 4'%3E%3Cg id='Rectangle_3' data-name='Rectangle 3' transform='translate(882 537)' fill='none' stroke='%23e3e3e3' stroke-width='1' stroke-dasharray='1 2'%3E%3Crect width='86' height='60' stroke='none'/%3E%3Crect x='0.5' y='0.5' width='85' height='59' fill='none'/%3E%3C/g%3E%3Crect id='Rectangle_1' data-name='Rectangle 1' width='97' height='62' transform='translate(894 522)' fill='%23f7f7f7'/%3E%3Cellipse id='Ellipse_1' data-name='Ellipse 1' cx='12.5' cy='12' rx='12.5' ry='12' transform='translate(918 527)' fill='%23e3e3e3'/%3E%3Crect id='Rectangle_2' data-name='Rectangle 2' width='25' height='29' transform='matrix(1, -0.017, 0.017, 1, 929.749, 540.229)' fill='%23fff'/%3E%3Cpath id='Polygon_1' data-name='Polygon 1' d='M11,0,22,16H0Z' transform='translate(946 553)' fill='%23e3e3e3'/%3E%3Cpath id='Icon_awesome-arrow-circle-up' data-name='Icon awesome-arrow-circle-up' d='M.563,18A17.438,17.438,0,1,1,18,35.438,17.434,17.434,0,0,1,.563,18Zm10.1,2.032,5.091-5.309V27.563a1.683,1.683,0,0,0,1.688,1.688h1.125a1.683,1.683,0,0,0,1.688-1.687V14.723l5.091,5.309a1.689,1.689,0,0,0,2.412.028l.766-.773a1.681,1.681,0,0,0,0-2.384L19.2,7.573a1.681,1.681,0,0,0-2.384,0L7.474,16.9a1.681,1.681,0,0,0,0,2.384l.766.773A1.7,1.7,0,0,0,10.659,20.032Z' transform='translate(973.438 571.438)' fill='%23e3e3e3'/%3E%3Cg id='Group_3' data-name='Group 3' transform='translate(-0.009)'%3E%3Cg id='Group_2' data-name='Group 2' transform='translate(905.5 574.5)'%3E%3Cg id='Group_1' data-name='Group 1'%3E%3Cline id='Line_1' data-name='Line 1' x2='55' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_3' data-name='Line 3' x2='12' transform='translate(58.009)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_4' data-name='Line 4' x2='44' transform='translate(0 3)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3Cline id='Line_5' data-name='Line 5' x2='17' transform='translate(49.009 4)' fill='none' stroke='%23e3e3e3' stroke-width='1'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A" alt="" srcset="">
							<span>
								<label htmlFor='photo-upload' className='btn btn-sm btn-outline-primary'>
									Upload Images
								</label>
								<input type='file' id="thumbnail_file" name="thumbnail" id='photo-upload' className='d-none' accept='image/*' multiple style="display: none;" />
							</span>
						</div>
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
			<script type="text/javascript">
				function showImg2(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function(e) {
							$('#poster_image')
								.attr('src', e.target.result)
						};
						reader.readAsDataURL(input.files[0]);
					}
				}
			</script>
			<!--end instant image dispaly-->



			<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>


			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
			<script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
			<script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
			<script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
			<script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/date.js"></script>


			<script>
				jQuery(document).ready(function() {
					$('#country').select2({
						placeholder: 'Select Country'
					});
					$('#category').select2({
						placeholder: 'Select category'
					});
					$('#Product_type').select2({
						placeholder: 'Select Video Type'
					});
					$('#focus_keyword').tagsinput();
					$('#description').summernote({
						height: 200, // set editor height
						minHeight: null, // set minimum height of editor
						maxHeight: null, // set maximum height of editor
						focus: false // set focus to editable area after initializing summernote
					});
				});
			</script>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					$(document).on('click', '#import_btn', function() {
						$('#result').html('');
						var error = false;
						var id = $("#imdb_id").val();
						if (id == '' || id == null) {
							error = true;
						}
						var lang = $("#lang option:selected").val();
						if (!error) {
							$.ajax({
								type: 'POST',
								url: '<?php echo base_url() . "admin/import_product"; ?>',
								data: {
									"id": id,
									"from": "product",
									"lang": lang
								},
								dataType: 'json',
								beforeSend: function() {
									$("#button-area").html('<button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</button>');
									//$("#import_btn").html('.....');
								},
								success: function(response) {
									var imdb_status = response.imdb_status;
									var imdbid = response.imdbid;
									var title = response.title;
									var plot = response.plot;
									var runtime = response.runtime;
									var country = JSON.parse("[" + response.country + "]");
									var category = JSON.parse("[" + response.category + "]");
									var rating = response.rating;;
									var release = response.release;
									var thumbnail = response.thumbnail;
									var poster = response.poster;
									if (imdb_status == 'success') {
										// actor
										$('#actor').select2({
											data: response.actor
										})
										$("#actor > option").prop("selected", "selected");
										$("#actor").trigger("change");
										// director
										$('#director').select2({
											data: response.director
										})
										$("#director > option").prop("selected", "selected");
										$("#director").trigger("change");
										// writer
										$('#writer').select2({
											data: response.writer
										})
										$("#writer > option").prop("selected", "selected");
										$("#writer").trigger("change");

										$('#result').html('<div class="alert alert-success alert-dismissable m-t-15"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Data imported successfully.</div>');
										$("#title").val(title);
										//slug
										title = title.toLowerCase();
										title = title.replace(/[^\w ]+/g, '');
										title = title.replace(/ +/g, '-');
										$("#slug").val(title);
										$("#imdbid").val(imdbid);
										$("#description").code('<p>' + plot + '</p>');
										$("#runtime").val(runtime);
										$("#country").val(country).trigger('change');
										$("#category").val(category).trigger('change');
										$("#rating").val(rating);
										$("#release_date").datepicker("setDate", release);
										$('#thumbnail_content').html('<input type="text" name="thumb_link" value="' + thumbnail + '" class="form-control">');
										$('#thumb_image').attr('src', thumbnail);
										$('#poster_content').html('<input type="text" name="poster_link" value="' + poster + '" class="form-control">');
										$('#poster_image').attr('src', poster);
										$("#button-area").html('<button class="btn btn-outline-primary" id="import_btn" type="button" id="button-addon2">FETCH</button>');
									} else {
										$('#result').html('<div class="alert alert-danger alert-dismissable m-t-15"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>No data found in database..</div>');
										$("#button-area").html('<button class="btn btn-outline-primary" id="import_btn" type="button" id="button-addon2">FETCH</button>');
									}
								}
							});
						} else {
							alert('Please input IMDb/TMDB ID');
						}
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

			<script type="text/javascript">
				$('#actor').select2({
					placeholder: 'Select Actor',
					minimumInputLength: 2,
					ajax: {
						url: '<?= base_url('admin/load_stars') ?>',
						dataType: 'json',
						delay: 250,
						processResults: function(data) {
							return {
								results: data
							};
						},
						cache: true
					}
				});
			</script>

			<script type="text/javascript">
				$('#director').select2({
					placeholder: 'Select Director',
					minimumInputLength: 2,
					ajax: {
						url: '<?= base_url('admin/load_stars') ?>',
						dataType: 'json',
						delay: 250,
						processResults: function(data) {
							return {
								results: data
							};
						},
						cache: true
					}
				});
			</script>

			<script type="text/javascript">
				$("#lang").select2();
				$('#writer').select2({
					placeholder: 'Select Writer',
					minimumInputLength: 2,
					ajax: {
						url: '<?= base_url('admin/load_stars') ?>',
						dataType: 'json',
						delay: 250,
						processResults: function(data) {
							return {
								results: data
							};
						},
						cache: true
					}
				});
			</script>
