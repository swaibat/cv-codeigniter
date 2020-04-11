<?php $assets_dir  =   'assets/theme/default/'; ?>
<div class="latest-product-img-container lazy" data-src="<?php echo $this->common_model->get_Product_thumb_url($Products['product_id']); ?>" style="background-image: url(<?php echo base_url('uploads/default_image/blank_thumbnail.jpg');?>);">
    <div class="product-img">
        <?php if($Products['is_paid'] == '1'):?>
          <div class="ribbon ribbon-top-right"></div>
        <?php endif; ?>        
        <a href="<?php echo base_url('watch/'.$Products['slug']).'.html';?>" class="ico-play ico-play-sm">
            <img class="img-responsive play-svg svg" src="<?php echo base_url($assets_dir); ?>images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url($assets_dir); ?>images/play-button.png'">
        </a>
        <div class="overlay-div"></div>
        <div class="Product_quality">
            <span class="label label-primary">
                <?php echo $Products['Product_quality'] ?>
            </span>
        </div>
        <div class="product-title">
            <h3>
                <a href="<?php echo base_url('watch/'.$Products['slug']).'.html';?>"><?php echo $Products['title'];?></a>
            </h3>
        </div>
    </div>
</div>
