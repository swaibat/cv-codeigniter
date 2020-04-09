<nav class="navbar navbar-dark bg-transparent align-items-center w-100 h-3 mb-3">
	<li class="nav-item js-hamburger mt-n4 d-flex flex-row-reverse align-items-center">
		<button class="hamburger-toggle  "><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></button>
		<h6 class="text-white ml-4 mb-0 text-capitalize"><?php echo $page_title; ?></h6>
	</li>
	<ul class="d-flex">
		<li class="nav-item mx-3">
			<a class="nav-link text-white" href="#" data-toggle="tooltip" data-placement="bottom" title="visit website">
				<span class="admin-nav-icons">
					<ion-icon name="earth"></ion-icon>
				</span>
			</a>
		</li>
		<li class="nav-item mx-3">
			<a class="nav-link text-white" href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications">
				<span class="admin-nav-icons">
					<ion-icon name="notifications"></ion-icon>
				</span>
				<span class="badge badge-light position-absolute notify-badge">5</span>
			</a>
		</li>
		<li class="dropdown ml-3" data-toggle="tooltip" data-placement="bottom" title="Notifications">
			<button class="btn bg-transparent text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
		</li>
	</ul>
</nav>
