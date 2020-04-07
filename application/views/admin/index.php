<?php
$system_name              =   app_config('system_name');
$system_short_name        =   app_config('system_short_name');
$site_name                =   app_config('site_name');
$business_address         =   app_config('business_address');
$system_email             =   app_config('system_email');
$business_phone           =   app_config('business_phone');
$color                    =   $this->db->get_where('user', array('user_id' => $this->session->userdata('user_id')))->row()->theme_color;
?>

<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>

<body id="body">
<?php include 'includes/navigation.php'; ?>
	<main class="content-wrapper d-flex flex-column align-items-center min-h-display mb-5">
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/bread_crumb.php'; ?>
		<div class="container-fluid mt-4">
			<?php include 'pages/'. $folder_name . '/'. $page_name . '.php'; ?>
		</div>
	</main>
</body>
<?php include 'pages/script.php'; ?>

</html>
