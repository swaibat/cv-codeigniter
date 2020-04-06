<!-- Breadcrumb -->
	<div id="title-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-xs-12">
					<div class="page-title">
						<h1 class="text-uppercase"><?php echo trans('watch_free_requested _products'); ?></h1>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 text-right">
					<ul class="breadcrumb">
					    <li>
					    	<a href="<?php echo base_url();?>"><i class="fi ion-ios-home"></i><?php echo trans('home'); ?></a>
					    </li>
					    <li class="active"><?php echo trans('requested_products'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	
	<!-- Secondary Section -->
<div id="section-opt">
    <div class="container">
        <div class="row">
            <!-- All Products -->
			<?php if($total_rows > 0){ if($total_rows > 24){ echo $links; } ?>
            <div class="col-md-12 col-sm-12">
                <div class="latest-product product-opt">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php foreach ($all_published_Products as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-4">
                                <div class="latest-product-img-container">
                                    <div class="product-img"> <img class="img-responsive" src="<?php echo $Products->image_link;?>" alt="<?php echo $Products->title;?>"> <a href="<?php echo base_url('watch/'.$Products->slug.'.html');?>" class="ico-play ico-play-sm"> <img class="img-responsive play-svg svg" src="<?php echo base_url(); ?>assets/front_end/images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url(); ?>assets/front_end/images/play-button.png'"> </a>
                                        <div class="overlay-div"></div>
                                        <div class="Product_quality"><span class="label label-primary"><?php echo $Products->Product_quality ?></span></div>
                                    </div>
                                    <div class="product-title">
                                        <h1><a href="<?php echo base_url('watch/'.$Products->slug.'.html');?>"><?php echo $Products->title;?></a></h1>
                                        <p class="product-desc"> <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $Products->runtime;?></span><span>&nbsp;&#47;</span> <span><?php echo $Products->total_view;?> <?php echo trans('views'); ?></span> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End All Products -->



        </div>
<?php if($total_rows > 24){ echo $links; } }else{ echo '<center><h3> '.echo trans('opps!!_no_product_found').'</h3></center>'; } ?>		
								
    </div>
</div>

<!-- Secondary Section -->