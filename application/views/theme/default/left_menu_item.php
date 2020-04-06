<?php
  $registration_enable            =   app_config('registration_enable');    
  $frontend_login_enable          =   app_config('frontend_login_enable');    
  $country_to_primary_menu        =   app_config('country_to_primary_menu');    
  $genre_to_primary_menu          =   app_config('genre_to_primary_menu');
  $release_to_primary_menu        =   app_config('release_to_primary_menu');    
  $contact_to_primary_menu        =   app_config('contact_to_primary_menu');
  $privacy_policy_to_primary_menu =   app_config('privacy_policy_to_primary_menu');
  $dmca_to_primary_menu           =   app_config('dmca_to_primary_menu');
  $az_to_primary_menu             =   app_config('az_to_primary_menu');
  $az_to_footer_menu              =   app_config('az_to_footer_menu');
  $product_request_enable           =   app_config('product_request_enable');    
?>

<ul class="nav navbar-nav navbar-left">
  <li><a href="<?php echo base_url(); ?>"><?php echo trans('home'); ?></a></li>
  <?php if($genre_to_primary_menu =='1'): ?>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo trans('genre'); ?> <span class="caret"></span></a>
    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
      <?php $all_published_genre= $this->genre_model->all_published_genre();
          foreach ($all_published_genre as $genre):                                                
      ?>
      <div class="col-md-3">
        <ul class="menu-item list-unstyled">
            <li><a href="<?php echo base_url('genre/'.$genre->slug.'.html'); ?>"><?php echo $genre->name; ?></a></li>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </li>
<?php endif; ?>
<?php if($release_to_primary_menu =='1'): ?>
  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo trans('release'); ?> <span class="caret"></span></a>
    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
      <?php $current_year = date("Y");
        $end_year = $current_year - 27;
        for($i=$current_year;$i>$end_year;$i--): 
      ?>
      <div class="col-md-3">
        <ul class="menu-item list-unstyled">
          <li><a href="<?php echo base_url('year/'.$i.'.html'); ?>"><?php echo $i; ?></a></li>
        </ul>
      </div>
      <?php endfor; ?>
      <div class="col-md-3">
          <ul class="menu-item list-unstyled">
              <li><a href="<?php echo base_url('year.html'); ?>"><?php echo trans('more'); ?>..</a></li>
          </ul>
      </div>
    </div>
  </li>
<?php endif; ?>
<li><a href="<?php echo base_url('products.html')?>"><?php echo trans('products'); ?></a></li>
  <?php if($az_to_primary_menu == '1'): ?>
    <li><a href="<?php echo base_url('az.html')?>"><?php echo trans('az'); ?></a></li>
  <?php endif; ?>
  <?php $all_Product_type_on_primary_menu= $this->common_model->all_Product_type_on_primary_menu();
    foreach ($all_Product_type_on_primary_menu as $Product_type):                                                
  ?>
  <li><a href="<?php echo base_url().'type/'.$Product_type->slug?>"><?php echo $Product_type->Product_type;?></a></li>
  <?php endforeach; ?>
  <?php 
    $blog_enable          = app_config('blog_enable');
    if($blog_enable =='1'):
  ?>
  <li><a href="<?php echo base_url('blog.html')?>"><?php echo trans('blog'); ?></a></li>
  <?php endif; ?>                  
  <?php $all_page_on_primary_menu= $this->common_model->all_page_on_primary_menu();
    foreach ($all_page_on_primary_menu as $pages):                                                
  ?>
  <li><a href="<?php echo base_url().'page/'.$pages->slug?>"><?php echo $pages->page_title?></a></li>
  <?php endforeach; ?>
  <?php if($product_request_enable == '1'): ?>
    <li><a href="#" data-toggle="modal" data-target="#productRequest"><?php echo trans('request'); ?></a></li>
  <?php endif; ?>
  <?php if($privacy_policy_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('privacy-policy.html')?>"><?php echo trans('privacy_policy'); ?></a></li>
  <?php endif; ?>
  <?php if($dmca_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('dmca.html')?>"><?php echo trans('dmca'); ?></a></li>
  <?php endif; ?>
  <?php if($contact_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('contact-us.html')?>"><?php echo trans('contact'); ?></a></li>
  <?php endif; ?>            
</ul>




  