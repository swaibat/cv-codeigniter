<style type="text/css">
	<?php if ($front_end_theme == 'blue') : ?> :root {
		--swiper-theme-color: #0088cc;
		--primary-color: #0088cc;
		--secenday-color: #0088c0;
	}

	<?php elseif ($front_end_theme == 'green') : ?> :root {
		--swiper-theme-color: #5DC560;
		--primary-color: #5DC560;
		--secenday-color: #5DC569;
	}

	<?php elseif ($front_end_theme == 'red') : ?> :root {
		--swiper-theme-color: #ff0000;
		--primary-color: #ff0000;
		--secenday-color: #ff0009;
	}

	<?php elseif ($front_end_theme == 'yellow') : ?> :root {
		--swiper-theme-color: #FDD922;
		--primary-color: #FDD922;
		--secenday-color: #FDD929;
	}

	<?php elseif ($front_end_theme == 'purple') : ?> :root {
		--swiper-theme-color: #6d0eb1;
		--primary-color: #6d0eb1;
		--secenday-color: #6d0eb9;
	}

	<?php else : ?> :root {
		--swiper-theme-color: #FDD922;
		--primary-color: #FDD922;
		--secenday-color: #0088c0;
	}

	<?php endif; ?>.owl-carousel .owl-next,
	.owl-carousel .owl-prev {
		background-color: var(--primary-color);
	}

	a {
		color: var(--primary-color);
	}

	a:hover {
		color: var(--secenday-color);
	}

	.vjs-chromecast-button .vjs-icon-placeholder {
		width: 18px;
		height: 18px;
	}
	.ribbon {
				<?php if ($enable_ribbon == '0') : ?>display: none;
				<?php endif; ?>width: 110px;
				height: 80px;
				overflow: hidden;
				position: absolute;
				background: url(<?php echo base_url($assets_dir); ?>images/lock.png);
				background-repeat: no-repeat;
				overflow: hidden;
			}

			.ribbon-top-right {
				bottom: 0px;
				left: 0px;
			}

			.tv-ribbon {
				<?php if ($enable_ribbon == '0') : ?>display: none;
				<?php endif; ?>top: 10px;
				left: 5px;
				position: absolute;
				z-index: 6;
				padding: 2px 11px;
				background-color: #ffe22e;
				color: #383737;
				border-top-right-radius: 5px;
				border-bottom-right-radius: 5px;
				font-size: 14px;
				font-weight: bold;
			}
</style>
