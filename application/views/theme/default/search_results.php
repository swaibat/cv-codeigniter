<!-- Breadcrumb -->
<div id="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="page-title">
                    <h1 class="text-uppercase"><?php echo '"'.$search_keyword.'" search results'; ?></h1>
                </div>
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
            <?php if($total_rows>0){
                if($total_rows > 24){
                echo $links;
            }
            ?>
            <div class="col-md-12 col-sm-12">
                <div class="latest-product product-opt">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php foreach ($all_published_Products as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-4">
                                <div class="latest-product-img-container">
                                    <div class="product-img"> <img class="img-responsive lazy" src="<?php echo base_url('uploads/default_image/blank_thumbnail.jpg');?>" data-src="<?php echo $this->common_model->get_Product_thumb_url($Products['product_id']); ?>" alt="<?php echo $Products['title'];?>">
                                        <a href="<?php echo base_url('watch/'.$Products['slug']).'.html';?>" class="ico-play ico-play-sm"> <img class="img-responsive play-svg svg" src="<?php echo base_url(); ?>assets/front_end/images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url(); ?>assets/front_end/images/play-button.png'"> </a>
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
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End All Products -->
            <?php }else{
                echo '<h4>Nothing found by "'.$search_keyword.'"</h4>';
            } ?>
        </div>
        <?php if($total_rows > 24){
                        echo $links;
                    }
        ?>
        
    </div>
</div>
<!-- Secondary Section -->
