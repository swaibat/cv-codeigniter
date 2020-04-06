<div class="row hidden-xs">
    <div class="col-md-12">
        <div class="similler-product">
            <div class="product-heading overflow-hidden"> <span class="fadeInUp" data-wow-duration="0.8s"> <?php echo trans('you_may_like'); ?> </span>
                <div class="disable-bottom-line" data-wow-duration="0.8s"> </div>
            </div>
            <div class="row">
                <div class="product-container">
                    <?php
                        $i      = 0;
                        if($watch_Products->is_tvseries == '1'):
                            $related_Products = $this->common_model->get_related_tvseries($watch_Products->Products_id,$watch_Products->genre);
                        else:   
                            $related_Products = $this->common_model->get_related_product($watch_Products->Products_id,$watch_Products->genre);
                        endif;
                        //var_dump($related_Products);        
                        foreach ($related_Products as $Products):
                            $i++;
                    ?>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <?php include('thumbnail.php'); ?>
                    </div>
                    <?php if($i%6==0){ echo "</div></div><div class='row'><div class='product-container'>";} ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>