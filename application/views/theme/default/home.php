

<?php $theme_dir                      =   'theme/default/'; ?>
<?php if($this->common_model->get_ads_status('home_header')=='1'): ?>
<!-- header ads -->
<div id="ads" style="padding: 20px 0px;text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $this->common_model->get_ads('home_header'); ?>
            </div>
        </div>
    </div>
</div>
<!-- header ads -->
<?php endif; ?>

<div id="section-opt">
    <div class="container">
        <div class="products-list-wrap mlw-latestproduct">
            <div class="ml-title">
                <span class="pull-left title"><?php echo trans('product_suggestion'); ?></span>
                <a href="<?php echo base_url(); ?>products.html" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" role="tab" href="#hot" aria-expanded="true"><?php echo trans('popular'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-today" aria-expanded="false"><?php echo trans('top_view_today'); ?></a></li>
                    <li><a data-toggle="tab" role="tab" href="#top-weekly" aria-expanded="false"><?php echo trans('top_view_weekly'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-rating" aria-expanded="false"><?php echo trans('top_rating'); ?></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <!-- hot -->
                <div id="hot" class="products-list products-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php $hot_Products = $this->common_model->get_hot_Products(); ?>
                            <?php foreach ($hot_Products as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-today -->
                <div id="top-today" class="products-list products-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php $top_today = $this->common_model->get_today_hot_Products(); ?>
                            <?php foreach ($top_today as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- top-weekly -->
                <div id="top-weekly" class="products-list products-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php $top_rated_Products = $this->common_model->get_weekly_hot_Products(); ?>
                            <?php foreach ($top_rated_Products as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-rated -->
                <div id="top-rating" class="products-list products-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php $top_rated_Products = $this->common_model->get_top_rated_Products(); ?>
                            <?php foreach ($top_rated_Products as $Products) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="section-opt">
    <div class="container">
        <div class="products-list-wrap mlw-latestproduct">
            <div class="ml-title m-b-10">
                <span class="pull-left title"><?php echo trans('latest_products'); ?></span>
                <a href="<?php echo base_url('products.html') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?>e »</a>
                <ul role="tablist" class="nav nav-tabs">
                    
                    <li class="active">
                        <a data-toggle="tab" role="tab" href="#latest-all" aria-expanded="true"><?php echo trans('all'); ?></a>
                    </li>
                    <?php
                        $featured_genres = $this->common_model->get_features_genres(6);
                        foreach ($featured_genres as $genre) :
                    ?>
                    <li class="">
                        <a data-toggle="tab" role="tab" href="#<?php echo $genre['slug']; ?>" aria-expanded="false"><?php echo $genre['name'] ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <div id="latest-all" class="products-list products-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php
                                $latest_published_Products = $this->common_model->latest_published_Products();
                                foreach ($latest_published_Products as $Products) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php
                    $featured_genres = $this->common_model->get_features_genres(6);
                    foreach ($featured_genres as $genre) :
                ?>
                <div id="<?php echo $genre['slug']; ?>" class="products-list products-list-full tab-pane fade">
                    <div class="row clean-preset">
                        <div class="product-container">
                            <?php
                                $genre_Products = $this->genre_model->get_Product_by_genre_id($genre['genre_id']);
                                foreach ($genre_Products as $Products) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

