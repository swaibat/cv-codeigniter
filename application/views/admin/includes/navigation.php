
<?php function menu($page_name, $value, $type){
	if ($type == 'child') {
		echo (preg_match("/$value/i", $page_name)) ? 'on-outline' : 'off';
	} else {
		echo (preg_match("/$value/i", $page_name)) ? $type : '';
	}
}
?>
<ul class="navbar-nav mr-auto sidenav bg-white -light vh-100" id="navAccordion">
	<li class="nav-item shadow-sm p-2 m-0 h-3 d-flex justify-content-center">
		<a class="navbar-brand p-0" href="/"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='160' height='50' viewBox='0 0 605 150'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0.5' x2='0.5' y2='1' gradientUnits='objectBoundingBox'%3E%3Cstop offset='0' stop-color='%239b1ac2'/%3E%3Cstop offset='0.005' stop-color='%23b410e5'/%3E%3Cstop offset='1' stop-color='%236f118b'/%3E%3C/linearGradient%3E%3CclipPath id='c'%3E%3Crect width='605' height='150'/%3E%3C/clipPath%3E%3C/defs%3E%3Cg id='b' clip-path='url(%23c)'%3E%3Crect width='605' height='150' fill='%23fff'/%3E%3Cg transform='translate(-3)'%3E%3Cg transform='translate(21.999 12.071)'%3E%3Cg transform='translate(0)'%3E%3Cpath d='M76.084,121.124H19.661a19.684,19.684,0,0,1-19.6-21.2L5.451,31.84a8.492,8.492,0,0,1,8.429-7.81H24.532V39.839a3.537,3.537,0,1,0,7.073,0V24.03H24.532v-.483a23.342,23.342,0,1,1,46.682,0v.483H81.865a8.5,8.5,0,0,1,8.429,7.819l3.3,41.612-9.419-9.176a2.654,2.654,0,0,0-1.925-.792,3.091,3.091,0,0,0-3.114,2.992,2.68,2.68,0,0,0,.172,1.074,2.421,2.421,0,0,0,.577.878L81.8,70.306a1.274,1.274,0,0,1,.377.907,1.59,1.59,0,0,1-.449,1.1,1.555,1.555,0,0,1-1.111.492,1.25,1.25,0,0,1-.88-.349l-6.713-6.539a2.5,2.5,0,0,0-1.76-.7,3.11,3.11,0,0,0-2.222.984,3.18,3.18,0,0,0-.9,2.21,2.548,2.548,0,0,0,.754,1.813l5.754,5.605a1.274,1.274,0,0,1,.377.907,1.591,1.591,0,0,1-.449,1.105,1.556,1.556,0,0,1-1.111.492,1.25,1.25,0,0,1-.88-.349l-8.631-8.407a2.5,2.5,0,0,0-1.76-.7,3.111,3.111,0,0,0-2.222.984,3.182,3.182,0,0,0-.9,2.211,2.548,2.548,0,0,0,.754,1.813L68.462,82.3a1.275,1.275,0,0,1,.377.907,1.59,1.59,0,0,1-.449,1.1,1.555,1.555,0,0,1-1.111.492,1.251,1.251,0,0,1-.88-.349L49.235,67.737a4.181,4.181,0,0,0-2.5-3.261,3.989,3.989,0,0,0-1.563-.319c-.1,0-.2,0-.3.011a2.71,2.71,0,0,0-.379-.027,3.11,3.11,0,0,0-2.221.984,3.155,3.155,0,0,0-.9,2.317,4.147,4.147,0,0,0,3.844,4.721L64.191,90.637a15.8,15.8,0,0,1,3.358,4.482,4.076,4.076,0,0,1,.371,2.051,4.734,4.734,0,0,1-.676,2.086,4.92,4.92,0,0,1-1.523,1.58,4.539,4.539,0,0,1-2.012.72c-.729.071-1.467.107-2.192.107a21.937,21.937,0,0,1-2.955-.2,31.5,31.5,0,0,0-4.064-.246,34.06,34.06,0,0,0-6.019.509,7.488,7.488,0,0,0-3.6,1.338A3.051,3.051,0,0,0,44,105.887c.185.479.672.722,1.448.722.093,0,.192,0,.294-.011.248-.018.527-.027.829-.027a54.385,54.385,0,0,1,9.96,1.368,88.42,88.42,0,0,1,11.441,3.191,27.126,27.126,0,0,0,9.1,1.261c1.538,0,3.142-.072,4.767-.213.262-.021.527-.032.788-.032a8.726,8.726,0,0,1,6.147,2.437l.351.342a1.25,1.25,0,0,0,.88.349h.062a19.684,19.684,0,0,1-13.983,5.851ZM47.764,52.753h-.028A18.285,18.285,0,0,0,31.644,63.365a18.622,18.622,0,0,0-1.69,6.709,1.008,1.008,0,0,0,.166.621,1.021,1.021,0,0,0,.823.462l3,.083h.027a.975.975,0,0,0,.975-.906A13.648,13.648,0,0,1,36.207,65.5a13.381,13.381,0,0,1,11.612-7.706.977.977,0,0,0,.932-.979l.023-3.026a1.024,1.024,0,0,0-.2-.612A1.011,1.011,0,0,0,47.764,52.753Zm-.075-9.988a27.663,27.663,0,0,0-22.565,11.8A27.99,27.99,0,0,0,20.806,64.2a28.832,28.832,0,0,0-.745,5.477,1.014,1.014,0,0,0,.176.613,1.027,1.027,0,0,0,.815.453l2.989.09h.031a.974.974,0,0,0,.969-.94,23.16,23.16,0,0,1,6.955-15.637A22.765,22.765,0,0,1,47.73,47.791a.97.97,0,0,0,.966-.975l.015-3.017a1.031,1.031,0,0,0-1.017-1.036h-.005Zm16.027,17.39h0c0,.006.131.151.425.473a3.6,3.6,0,0,0-.335-.388,1.032,1.032,0,0,0-.09-.085ZM31.6,24.03H64.14V39.839a3.537,3.537,0,1,0,7.073,0V24.03H64.141v-.483a16.268,16.268,0,1,0-32.536,0v.483ZM90.15,111.251a1.25,1.25,0,0,1-.88-.349,1.274,1.274,0,0,1-.377-.907,1.59,1.59,0,0,1,.449-1.1l1.032-1.078a1.556,1.556,0,0,1,1.111-.492,1.25,1.25,0,0,1,.88.349,1.274,1.274,0,0,1,.377.907,1.59,1.59,0,0,1-.449,1.1l-1.032,1.078A1.556,1.556,0,0,1,90.15,111.251Zm5.085-5.39h0a1.231,1.231,0,0,1-.806-.346,1.274,1.274,0,0,1-.377-.907A1.591,1.591,0,0,1,94.5,103.5l1.225-1.28a19.806,19.806,0,0,1-.491,3.638Zm-1.047-24a1.249,1.249,0,0,1-.879-.348l-5.754-5.606A1.273,1.273,0,0,1,87.178,75a1.59,1.59,0,0,1,.449-1.105,1.555,1.555,0,0,1,1.11-.492,1.25,1.25,0,0,1,.88.349l4.33,4.218.308,3.889Z' fill='url(%23a)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3Ctext transform='translate(125 106)' fill='%23707070' stroke='%23fae4e4' stroke-width='1' font-size='112' font-family='Aqum'%3E%3Ctspan x='0' y='0'%3EG%3C/tspan%3E%3Ctspan y='0' font-family='Rounded-Regular, Rounded'%3Eats%3C/tspan%3E%3Ctspan y='0' fill='%238f10b5' font-family='Rounded-Regular, Rounded'%3EBay%3C/tspan%3E%3C/text%3E%3Ctext transform='translate(138 130)' fill='%23707070' font-size='22' font-family='HelveticaNeue-Bold, Helvetica Neue' font-weight='700'%3E%3Ctspan x='0' y='0' xml:space='preserve'%3EReliable and Secure Online shopping%3C/tspan%3E%3C/text%3E%3C/g%3E%3C/svg%3E" alt="logo"></a>
	</li>
	<li class="nav-item h-7 d-flex justify-content-between">
		<div class="nav-link m-auto d-flex flex-column text-center" href="#"><img class="nav-avatar img-thumbnail" src="<?= base_url(); ?>assets/shared/images/user.svg" alt="user"><span>Admin</span></div>
	</li>
	<ul class="shadow-sm-top pl-0 h-90">
		<div class="d-flex justify-content-between -light px-2 pt-2">
			<svg aria-hidden="true" height='15' focusable="false" data-prefix="fas" data-icon="minus-circle" class="svg-inline--fa fa-minus-circle fa-w-16 rotate-90" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
			</svg>
			<svg aria-hidden="true" height='15' focusable="false" data-prefix="fas" data-icon="minus-circle" class="svg-inline--fa fa-minus-circle fa-w-16 rotate-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
			</svg>
		</div>
		<li class="nav-item pt-2 px-2">
			<div class="input-group mt-2 mb-3">
				<input type="text" class="form-control form-control-sm" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append"><span class="input-group-text bg-white rounded-sm-right -light" id="basic-addon2"></span></div>
			</div>
		</li>

		<!-- Dashboard -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'dashboard') ? 'selected' : ''; ?>" href="<?= base_url() . "admin/dashboard "; ?>">
				<ion-icon src="data:image/svg+xml,%3Csvg height='511pt' viewBox='0 1 511 511.999' width='511pt' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m498.699219 222.695312c-.015625-.011718-.027344-.027343-.039063-.039062l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.808594-33.328126-13.808594-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.144532.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.441406 13.234375 31.273437 13.746093.484375.046876.96875.070313 1.457031.070313h8.320313v153.695313c0 30.417968 24.75 55.164062 55.167969 55.164062h81.710937c8.285157 0 15-6.71875 15-15v-120.5c0-13.878906 11.292969-25.167969 25.171875-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.28125 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.164062v-153.695313h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.8125 18.359375-18.367187 18.367187-48.253906.027344-66.632813zm-21.242188 45.421876c-3.238281 3.238281-7.542969 5.023437-12.117187 5.023437h-22.71875c-8.285156 0-15 6.714844-15 15v168.695313c0 13.875-11.289063 25.164062-25.167969 25.164062h-66.710937v-105.5c0-30.417969-24.746094-55.167969-55.167969-55.167969h-48.195313c-30.421875 0-55.171875 24.75-55.171875 55.167969v105.5h-66.710937c-13.875 0-25.167969-11.289062-25.167969-25.164062v-168.695313c0-8.285156-6.714844-15-15-15h-22.328125c-.234375-.015625-.464844-.027344-.703125-.03125-4.46875-.078125-8.660156-1.851563-11.800781-4.996094-6.679688-6.679687-6.679688-17.550781 0-24.234375.003906 0 .003906-.003906.007812-.007812l.011719-.011719 208.847656-208.839844c3.234375-3.238281 7.535157-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531l208.800781 208.796875c.03125.03125.066406.0625.097656.09375 6.644531 6.691406 6.632813 17.539063-.03125 24.207032zm0 0'/%3E%3C/svg%3E" role="img" class="md hydrated"></ion-icon><span class="nav-item-text">Dashboard</span>
			</a>
		</li>

		<!-- Products -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'products') ? 'selected' : ''; ?>" href="<?= base_url() . "admin/products"; ?>">
				<ion-icon name="basket-outline"></ion-icon><span class="nav-item-text">Products</span>
			</a>
		</li>

		<!-- Categories -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'categories') ? 'selected' : ''; ?>" href="<?= base_url() . "admin/category"; ?>">
				<ion-icon name="folder-open-outline"></ion-icon><span class="nav-item-text">Categories</span>
			</a>
		</li>

		<!-- Pages -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'pages') ? 'selected' : ''; ?>" href="<?= base_url() . "admin/pages"; ?>">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Pages</span>
			</a>
		</li>

		<!-- Posts -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'blog') ? 'selected show' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#Pages" aria-expanded="false" href="/admin/pages">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Blogs</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'blog') ? 'show' : ''; ?>" id="Pages" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url() . 'admin/posts/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'posts', 'child') ?>"></ion-icon>All Posts
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . 'admin/post_category/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'Post_category', 'child'); ?>"></ion-icon>Post Category
						</span>
					</a>
				</li>
			</ul>
		</li>


		<!-- Slider -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'sliders') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#slider" aria-expanded="false" href="/admin/pages">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">sliders</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'sliders') ? 'show' : ''; ?>" id="slider" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url() . 'admin/slider/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'slider_manage', 'child') ?>"></ion-icon>Image slider
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . 'admin/slider_setting/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'slider_setting', 'child') ?>"></ion-icon>Slider settings
						</span>
					</a>
				</li>
			</ul>
		</li>

		<!-- Users -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'users') ? 'selected' : ''; ?>" href="<?= base_url() . 'admin/manage_user/' ?>">
				<ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline"></ion-icon><span class="nav-item-text">Users</span>
			</a>
		</li>

		<!-- Products -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'countries') ? 'selected' : ''; ?>" href="<?= base_url() . "admin/countries"; ?>">
				<ion-icon name="basket-outline"></ion-icon><span class="nav-item-text">Countries</span>
			</a>
		</li>

		<!-- comments -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'comments') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#comments" aria-expanded="false" href="/admin/pages">
				<ion-icon name="documents-outline"></ion-icon><span class="nav-item-text">Comments</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'comments') ? 'show' : ''; ?>" id="comments" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link pl-2" href="<?= base_url() . 'admin/comments/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'comments_manage', 'child') ?>"></ion-icon>Products comments
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . 'admin/comments_setting/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'comments_setting', 'child') ?>"></ion-icon>comments settings
						</span>
					</a>
				</li>
			</ul>
		</li>
		<!-- Settings -->
		<li class="nav-item">
			<a aria-current="page" class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'settings') ? 'selected' : ''; ?>" id="hasSubItems" data-toggle="collapse" data-target="#Settings" aria-controls="Settings" aria-expanded="false" href="/admin/settings">
				<ion-icon name="cog" role="img" class="md hydrated" aria-label="cog"></ion-icon><span class="nav-item-text">Settings</span>
			</a>
			<ul class="nav-second-level cv-collapse collapse <?= ($folder_name == 'settings') ? 'show' : ''; ?>" id="Settings" data-parent="#navAccordion">
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . 'admin/system_setting/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'system_setting', 'child') ?>"></ion-icon>system
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  pl-2" href="<?= base_url() . 'admin/theme_options/' ?>">
						<span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-<?php menu($page_name, 'theme_options', 'child') ?>"></ion-icon>theme
						</span>
					</a>
				</li>
				<li class="nav-item"><a class="nav-link  pl-2" href="<?= base_url() . 'admin/email_setting/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Emails
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="<?= base_url() . 'admin/logo_setting/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Media
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="<?= base_url() . 'admin/footer_setting/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Footer
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="<?= base_url() . 'admin/seo_setting/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>SEO
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="<?= base_url() . 'admin/copyright_privacy/' ?>"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Copyright & privacy
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="/admin/settings/seo"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>SEO
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="/admin/settings/intergrations"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Intergrations
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="/admin/settings/seo"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>SEO
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="/admin/settings/intergrations"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>Intergrations
						</span></a></li>
				<li class="nav-item"><a class="nav-link  pl-2" href="/admin/settings/seo"><span class="nav-link -text p-0 ml-n3">
							<ion-icon name="radio-button-off" role="img" class="md hydrated" aria-label="radio button off"></ion-icon>SEO
						</span></a>
				</li>

			</ul>
		</li>
		<!-- Backup -->
		<li class="nav-item">
			<a class="nav-link  nav-link -collapse cv-sidenav pl-3 <?= ($folder_name == 'backup') ? 'selected' : ''; ?>" href="<?= base_url() . 'admin/backup_restore' ?>">
				<ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline"></ion-icon><span class="nav-item-text">Backup</span>
			</a>
		</li>
	</ul>
</ul>
<div class="header-bg"></div>
