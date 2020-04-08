<!-- slider -->

<?php
$theme_dir              =   'theme/default/';
$assets_dir             =   'assets/theme/default/';
$header_templete        =   app_config('header_templete');
$slider_type            =   app_config('slider_type');
$slider_fullwide        =   app_config('slider_fullwide');
$slider_height          =   app_config('slider_height') . 'px';
$slider_border_radius   =   app_config('slider_border_radius') . 'px';
$slider_arrow           =   app_config('slider_arrow');
$slider_bullet          =   app_config('slider_bullet');
$total_product_in_slider  =   app_config('total_product_in_slider');
?>
<?php if ($slider_type == "product" || $slider_type == "image") : ?>
  <style>
    .slider-content {
      height: <?php echo $slider_height; ?>;
      <?php if ($slider_fullwide == '1') : ?>margin-top: -20px;
      <?php endif; ?>
    }

    #slider {
      border-radius: <?php echo $slider_border_radius; ?>;
    }
  </style>

  <div class="slider-content <?php if ($slider_fullwide != '1') : echo 'container';
                              endif; ?>">
    <div id="slider" class="swiper-container-horizontal">
      <div class="swiper-wrapper">
        <?php
        if ($slider_type == "product") :
          $this->db->limit($total_product_in_slider);
          $this->db->order_by("Products_id", "desc");
          $slider_Products = $this->db->get_where('Products', array('publication' => '1'))->result();
          foreach ($slider_Products as $Products) :
        ?>
            <div class="swiper-slide" style="background-image: url('<?php echo $this->common_model->get_Product_poster_url($Products->Products_id); ?>');">
              <a href="<?php echo base_url('watch/' . $Products->slug) . '.html'; ?>" class="slide-link" title="<?php echo $Products->title; ?>"> </a>
              <span class="slide-caption">
                <h2><?php echo $Products->title; ?></h2>
                <p class="sc-desc"><?php echo substr(strip_tags($Products->description), 0, 220); ?></p>
                <div class="slide-caption-info">
                  <div class="block">
                    <strong><?php echo trans('category'); ?>: </strong>
                    <?php if ($Products->category != '' && $Products->category != NULL) :
                      $i = 0;
                      $categorys = explode(',', $Products->category);
                      foreach ($categorys as $category_id) :
                        if ($i > 0) {
                          echo ',';
                        }
                        $i++; ?><?php echo $this->category_model->get_category_name_by_id($category_id); ?>
                <?php endforeach;
                    endif; ?>
                  </div>
                  <div class="block"><strong><?php echo trans('duration'); ?>:</strong> <?php echo $Products->runtime; ?></div>
                  <div class="block"><strong><?php echo trans('release'); ?>:</strong> 2019</div>
                  <div class="block"><strong>IMDb:</strong> <?php echo $Products->imdb_rating; ?></div>
                </div>
                <a href="<?php echo base_url('watch/' . $Products->slug) . '.html'; ?>">
                  <div class="btn btn-sm btn-success mt20" style="margin-top: 10px;"><?php echo trans('watch_now') ?></div>
                </a>
              </span>
            </div>
          <?php endforeach; ?>
          <?php
        elseif ($slider_type == "image") :
          $all_published_slider = $this->common_model->all_published_slider();
          foreach ($all_published_slider as $slider) :
            $action_url = $slider->action_url;
            if ($slider->action_type == 'product' || $slider->action_type == 'tvseries' || $slider->action_type == 'tv') :
              if ($slider->action_type == 'product' || $slider->action_type == 'tvseries') :
                $action_url = base_url("watch/" . $this->common_model->get_slug_by_Products_id($slider->action_id) . '.html');
              endif;
            endif;
          ?>
            <div class="swiper-slide" style="background-image: url('<?php echo $slider->image_link; ?>');">
              <a href="<?php echo $action_url; ?>" class="slide-link" title="<?php echo $slider->title; ?>"> </a>
              <span class="slide-caption">
                <h2><?php echo $slider->title; ?></h2>
                <p class="sc-desc"><?php echo $slider->description; ?></p>
                <a href="<?php echo $action_url; ?>">
                  <div class="btn btn-sm btn-success mt20" style="margin-top: 10px;"><?php echo $slider->action_btn_text; ?></div>
                </a>
              </span>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        <?php if ($slider_bullet == '1') : ?>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        <?php endif; ?>
        <?php if ($slider_arrow == '1') : ?>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/theme/default/'); ?>swiper/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container-horizontal', {
      lazy: true,
      effect: 'fade',
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
        // type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  <!-- END slider -->
<?php endif; ?>
