<?php $users = $this->db->get_where('user', array('user_id' => $param2))->result_array();
foreach ($users as $user) :
?>
	<form action="<?php echo base_url();?>admin/user_edit/<?= $param2;?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
		<div class="modal-header border-0">
			<h6 class="modal-title position-absolute bg-primary text-white" id="mymodalLabel">Edit User</h6>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="form-row modal-body p-4">
			<div class="col-md-6">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="person-outline"></ion-icon>
						</span></div><input name="name" value="<?= $user['name']; ?>" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">fullnames</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="person-outline"></ion-icon>
						</span></div><input name="username" value="<?= $user['username']; ?>" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">username</label>
				</div>
			</div>
			<div class="col-md-9">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="mail-outline"></ion-icon>
						</span></div><input name="email" value="<?= $user['email']; ?>" type="email" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">email address</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="cv-form-group form-group mt-4 px-3">
					<select class="form-control js-select2" name="role" required>
						<option value="admin" <?= ($user['role'] == "admin") ? "selected" : '' ?>>admin</option>
						<option value="subscriber" <?= ($user['role'] == "subscriber") ? "selected" : '' ?>>subscriber</option>
					</select>
				</div>
			</div>
			<div class="col-md-7">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="locate-outline"></ion-icon>
						</span></div><input name="address" value="<?= $user['address']; ?>" type="text" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">physical address</label>
				</div>
			</div>
			<div class="col-md-5">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="call-outline"></ion-icon>
						</span></div><input name="phone" type="number" value="<?= $user['phone']; ?>" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">Telephone number</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="briefcase-outline"></ion-icon>
						</span></div><input name="company" type="text" value="<?= $user['company']; ?>" class="form-control custom-input" required="" autocomplete="new-password" value=""><span class="bar"></span><label class="cv-label left text-capitalize">company</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cv-form-group input-group mb-3 mt-4 px-3">
					<div class="input-group-prepend"><span class="input-group-text bg-white rounded-0 cv-chev left">
							<ion-icon name="lock-closed-outline"></ion-icon>
						</span></div><input name="password" type="password" class="form-control custom-input" autocomplete="new-password" value="">
					<div class="input-group-prepend"><span type="button" class="input-group-text bg-white rounded-0 cv-chev right">
							<ion-icon name="eye-outline" role="img" class="md hydrated" aria-label="eye outline"></ion-icon>
						</span></div><span class="bar"></span><label class="cv-label left text-capitalize">password</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary btn-sm">submit</button>
		</div>
	</form>
<?php endforeach; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		$(".js-select2").select2({
			minimumResultsForSearch: -1
		});
	});
	jQuery(document).ready(function() {
		$('form').parsley();

	});
</script>
