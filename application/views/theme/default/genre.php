<?php if ($this->common_model->get_ads_status('category_header') == '1') : ?>
    <!-- header ads -->
    <div id="ads" style="padding: 20px 0px;text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo $this->common_model->get_ads('category_header'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- header ads -->
<?php endif; ?>
<!-- Breadcrumb -->
<div id="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="page-title">
                    <h1 class="text-uppercase"><?php echo trans('category'); ?>: <?php echo $category_name; ?></h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-12 text-right">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url(); ?>"><i class="fi ion-ios-home"></i><?php echo trans('home'); ?></a>
                    </li>
                    <li class=""><?php echo trans('category'); ?></li>
                    <li class="active"><?php echo $category_name; ?></li>
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
            <?php if ($total_rows > 0) : ?>
                <!-- All Products -->
                <div class="col-md-12 col-sm-12">
                    <div class="latest-product product-opt">
                        <div class="row clean-preset">
                            <div class="product-container">
                                <?php foreach ($all_published_Products as $Products) : ?>
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <?php include('thumbnail.php'); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End All Products -->
            <?php else : echo "<h3 class='text-center text-capitalize'>No Product Found by " . $category_name . "</h3>";
            endif; ?>
        </div>
        <?php if ($total_rows > 24) : echo $links;
        endif; ?>
    </div>
</div>
<!-- Secondary Section -->
