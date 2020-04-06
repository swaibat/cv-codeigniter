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
	<?php include 'pages/head.php'; ?>
	<body class="app sidebar-mini rtl">
		<?php include 'pages/header.php'; ?>
		<?php include 'pages/navigation.php'; ?>
		<main class="app-content">
			<?php include 'pages/bread_crumb.php'; ?>
			<?php include 'pages/'. $page_name . '.php'; ?>
		</main>
		<?php include 'includes/footer_content.php'; ?>
		<?php include 'pages/script.php'; ?>
	</body>
</html>
