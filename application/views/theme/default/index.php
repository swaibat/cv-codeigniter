<?php
$default_meta_description       =   app_config('meta_description');
$default_focus_keyword          =   app_config('focus_keyword');
$author                         =   app_config('author');
$front_end_theme                =   app_config('front_end_theme');
$theme_dir                      =   'theme/default/';
$assets_dir                     =   'assets/theme/default/';
$dark_theme                     =   app_config('dark_theme');
$google_analytics_id            =   app_config('google_analytics_id');
$footer_templete                =   app_config('footer_templete');
$share_this_enable              =   app_config('social_share_enable');
$push_notification_enable       =   app_config('push_notification_enable');
$site_name                      =   app_config('site_name');
$recaptcha_enable               =   app_config('recaptcha_enable');
$favicon                        =   app_config('favicon');
$enable_ribbon                  =   app_config('enable_ribbon');
?>
<!DOCTYPE html>
<html lang="en">

<head data-cast-api-enabled="true">

	<head>
		<meta charset="UTF-8">
		<meta name="description" content="<?php if (isset($meta_description)) {
												echo $meta_description;
											} else {
												echo $default_meta_description;
											} ?>" />
		<meta name="keywords" content="<?php if (isset($focus_keyword)) {
											echo $focus_keyword;
										} else {
											echo $default_focus_keyword;
										} ?>" />
		<meta name="author" content="<?php echo $author; ?>" />
		<link rel="canonical" href="<?php if (isset($canonical) && !empty($canonical)) : echo $canonical;
									else : echo base_url();
									endif; ?>">
		<?php if ($page_name == 'watch' || $page_name == 'blog_details') : ?>
			<meta property="og:locale" content="en_US" />
			<meta name="twitter:card" content="summary">
			<meta name="twitter:description" content="<?php echo $meta_description; ?>" />
			<meta name="twitter:title" content="<?php echo $og_title; ?>" />
			<meta property="og:title" content="<?php echo $og_title; ?>" />
			<meta property="og:url" content="<?php echo $og_url; ?>" />
			<meta property="og:type" content="product" />
			<meta property="og:description" content="<?php echo $meta_description; ?>" />
			<meta property="og:image" content="<?php echo $og_image_url; ?>" />
		<?php endif; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php if (isset($title) && !empty($title)) : echo $title;
				else : echo $site_name;
				endif; ?></title>
		<link rel="shortcut icon" href="<?php echo base_url('uploads/system_logo/') . $favicon; ?>">
		<!-- Style Sheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/additional.css">
		<!-- Font Icons -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/socicon-styles.css">
		<!-- Font Icons -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/hover-min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/animate.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/styles.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/<?php echo $front_end_theme; ?>.css">


		<script src="<?php echo base_url($assets_dir); ?>js/jquery-2.2.4.min.js" crossorigin="anonymous"></script>

		<!-- slider -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>swiper/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>swiper/css/custom.css">
		<?php if ($page_name == 'update_profile') : ?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/theme/default/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
			</script>
		<?php endif; ?>



		<?php if ($page_name == 'watch' || $page_name == 'watch_tv') : ?>
			<link href="<?php echo base_url(); ?>assets/player/Product-js-6.13.0/Product-js.css" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url(); ?>assets/player/plugins/Productjs-mobile-ui/Productjs-mobile-ui.css" rel="stylesheet" type="text/css">
			<!-- tube skin CSS -->
			<!-- <link href="<?php echo base_url(); ?>assets/player/plugins/tube-skin/Productjs-tube.min.css" media="only screen and (min-width: 820px)" rel="stylesheet"/> -->
			<script src="<?php echo base_url(); ?>assets/player/Product-js-6.13.0/Product.min.js" crossorigin="anonymous"></script>
			<script src="<?php echo base_url(); ?>assets/player/plugins/Productjs-mobile-ui/Productjs-mobile-ui.min.js"></script>
			<!-- watermark CSS -->
			<link href="<?php echo base_url(); ?>assets/player/plugins/watermark/Productjs-logo.min.css" rel="stylesheet">
			<!-- social share CSS -->
			<link href="<?php echo base_url(); ?>assets/player/plugins/Productjs-share/Productjs-share.css" rel="stylesheet">
			<!-- social share CSS -->
			<link href="<?php echo base_url(); ?>assets/player/plugins/Productjs-seek-buttons/Productjs-seek-buttons.css" rel="stylesheet">

			<!-- Productjs-chromecast js -->
			<script src="<?php echo base_url(); ?>assets/player/plugins/silvermine-Productjs-chromecast/silvermine-Productjs-chromecast.min.js"></script>
			<!-- Productjs-chromecast CSS -->
			<link href="<?php echo base_url(); ?>assets/player/plugins/silvermine-Productjs-chromecast/silvermine-Productjs-chromecast.css" rel="stylesheet">
			<!-- chromecast sdk -->
			<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>



		<?php endif; ?>
		<?php if ($page_name == 'home' || $page_name == 'watch_tv' || $page_name == 'watch') : ?>
			<!-- owlcarousel -->
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl.carousel.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl-custom.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl.theme.default.min.css">
			<script src="<?php echo base_url($assets_dir); ?>js/owl.carousel.js"></script>
			<!-- owlcarousel -->
		<?php endif ?>

		<?php if ($recaptcha_enable == '1') : ?>
			<!-- reCAPTCHA JavaScript API -->
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif; ?>

		<!-- typehead search  -->
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/auto-complete.css">
		<?php if ($this->language_model->get_rtl_status()) : ?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/rtl.css">
		<?php endif; ?>
		<!-- typehead search  -->
		<?php if ($dark_theme == '1') : ?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/dark.css">
		<?php endif; ?>
		<?php include 'inline_css.php'?>
		<?php if ($page_name == 'price_plan') : ?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/price_plan.css">
		<?php endif; ?>

	</head>

<body>
	<div id="wrapper">
		<div id="main-content">
			<?php
			$this->load->view($theme_dir . 'header');
			if ($page_name == 'home')
				$this->load->view($theme_dir . 'slider');
			if ($page_name == 'home') : ?>
				<div class="container">
					<?php if ($share_this_enable == '1') : ?>
						<!-- Go to www.addthis.com/dashboard to customize your tools -->
						<div class="addthis_inline_share_toolbox_yl99 m-t-30 m-b-10" data-url="<?php echo base_url(); ?>" data-title="<?php if ($page_name == 'watch') {
																																			echo $watch_Products->title;
																																		} else {
																																			echo $title;
																																		} ?>"></div>
						<!-- Addthis Social tool -->
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php
			$this->load->view($theme_dir . $page_name);
			$this->load->view($theme_dir . 'footer/' . $footer_templete);
			$this->load->view($theme_dir . 'product_request');
			?>
		</div>
	</div>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
	<!-- lazy image loading -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.lazy').lazy({
				effect: "fadeIn",
				effectTime: 1000
			});
		});
	</script>
	<!-- end lazy image loading -->
	<!--sweet alert2 JS -->
	<link href="<?php echo base_url(); ?>assets/plugins/swal2/sweetalert2.min.css" rel="stylesheet">
	<!-- END sweet alert2 JS -->
	<!-- Scripts -->
	<script src="<?php echo base_url($assets_dir); ?>js/ovoo.js"></script>
	<script src="<?php echo base_url($assets_dir); ?>js/bootstrap.min.js"></script>

	<?php if ($google_analytics_id != '' && $google_analytics_id != NULL && !empty($google_analytics_id)) : ?>
		<!-- Google analytics -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
			ga('create', '<?php echo $google_analytics_id; ?>', 'auto');
			ga('send', 'pageview');
		</script>
		<!-- END Google analytics -->
	<?php endif; ?>

	<?php if ($share_this_enable == '1') : ?>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d74b9dcfd76af7"></script>
	<?php endif; ?>
	<!--sweet alert2 JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/swal2/sweetalert2.min.js"></script>
	<script>
		$(document).ready(function() {
			var success_message = '<?php echo $this->session->flashdata('success'); ?>';
			var error_message = '<?php echo $this->session->flashdata('error'); ?>';
			if (success_message != '') {
				swal('Success!', success_message, 'success');
			}
			if (error_message != '') {
				swal('Error!', error_message, 'error');
			}
		});
	</script>
	<?php
	if ($push_notification_enable == '1') :
		$onesignal_appid                    =   app_config('onesignal_appid');
		$onesignal_actionmessage            =   app_config('onesignal_actionmessage');
		$onesignal_acceptbuttontext         =   app_config('onesignal_acceptbuttontext');
		$onesignal_cancelbuttontext         =   app_config('onesignal_cancelbuttontext');
	?>
		<!-- oneSignal -->
		<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
		<script>
			var OneSignal = window.OneSignal || [];
			OneSignal.push(["init", {
				appId: "<?php echo $onesignal_appid; ?>",
				subdomainName: 'push',
				autoRegister: false,
				promptOptions: {
					/* These prompt options values configure both the HTTP prompt and the HTTP popup. */
					/* actionMessage limited to 90 characters */
					actionMessage: "<?php echo $onesignal_actionmessage; ?>",
					/* acceptButtonText limited to 15 characters */
					acceptButtonText: "<?php echo $onesignal_acceptbuttontext; ?>",
					/* cancelButtonText limited to 15 characters */
					cancelButtonText: "<?php echo $onesignal_cancelbuttontext; ?>"
				}
			}]);
		</script>
		<script>
			function subscribe() {
				// OneSignal.push(["registerForPushNotifications"]);
				OneSignal.push(["registerForPushNotifications"]);
				event.preventDefault();
			}

			function unsubscribe() {
				OneSignal.setSubscription(true);
			}

			var OneSignal = OneSignal || [];
			OneSignal.push(function() {
				/* These examples are all valid */
				// Occurs when the user's subscription changes to a new value.
				OneSignal.on('subscriptionChange', function(isSubscribed) {
					console.log("The user's subscription state is now:", isSubscribed);
					OneSignal.sendTag("user_id", "4444", function(tagsSent) {
						// Callback called when tags have finished sending
						console.log("Tags have finished sending!");
					});
				});

				var isPushSupported = OneSignal.isPushNotificationsSupported();
				if (isPushSupported) {
					// Push notifications are supported
					OneSignal.isPushNotificationsEnabled().then(function(isEnabled) {
						if (isEnabled) {
							console.log("Push notifications are enabled!");

						} else {
							OneSignal.showHttpPrompt();
							console.log("Push notifications are not enabled yet.");
						}
					});

				} else {
					console.log("Push notifications are not supported.");
				}
			});
		</script>
	<?php endif; ?>
</body>

</html>
