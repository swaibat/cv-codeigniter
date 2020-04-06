<div class="latest-product-img-container">
    <div class="product-img"> <img class="img-responsive lazy" src="<?php echo base_url('uploads/default_image/blank_thumbnail.jpg');?>" data-src="<?php echo $this->common_model->get_Product_thumb_url($Products['Products_id']); ?>" alt="<?php echo $Products['title'];?>">
        <a href="<?php echo base_url('watch/'.$Products['slug']).'.html';?>" class="ico-play ico-play-sm"> <img class="img-responsive play-svg svg" src="<?php echo base_url(); ?>assets/front_end/images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url(); ?>assets/front_end/images/play-button.png'"> </a>
        <div class="overlay-div"></div>
        <div class="Product_quality">
            <span class="label label-primary">
                <?php if($Products['is_tvseries']=='1'): echo $this->common_model->get_num_episodes_by_id($Products['Products_id']).' EPISODES'; else: echo $Products['Product_quality']; endif; ?>
            </span>
        </div>
        <div class="product-title">
            <h3>
            <a href="<?php echo base_url('watch/'.$Products['slug']).'.html';?>"><?php echo $Products['title'];?></a>
            </h3>
        </div>
    </div>
</div>