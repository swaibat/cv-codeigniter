<?php
	$theme_dir      =   'theme/default/';
	$assets_dir     =   'assets/theme/default/';
	$first_ep_details= array();
?>
<div class="product-payer">
	<?php
		if(($total_episodes >0)):
			$player_color_skin          =   $this->db->get_where('config' , array('title'=>'player_color_skin'))->row()->value;
			if(isset($_GET['key']) && $this->common_model->validate_stream_key($_GET['key'])):
		        $Product_file 	= $this->common_model->get_single_episode_details_by_key($_GET['key']);
               	$Product_file_id  = $Product_file->episodes_id;
		        $source_type    = $Product_file->source_type;
		        $file_source    = $Product_file->file_source;
		        $file_url       = $Product_file->file_url;
		    else:
	            $first_ep_details 	= $this->common_model->get_first_episode_details_Products_id($Products_id);
	            $Product_file 		= $first_ep_details;
                $Product_file_id  	= $Product_file->episodes_id;
		        $source_type    	= $Product_file->source_type;
		        $file_source    	= $Product_file->file_source;
		        $file_url       	= $Product_file->file_url;                            
		    endif;
		    $subtitles = $this->common_model->get_episode_subtitles_by_episode_id($Product_file_id);
		    if($file_source=='mp4' || $file_source=='webm' || $file_source=='mkv' || $file_source=='flv' || $file_source=='m3u8' || $file_source=='gdrive' || $file_source=='amazone'):
    ?>
    <!-- script -->
    <?php  if($file_source=='m3u8' || $file_source=='flv'): ?>
        <script src="https://unpkg.com/Productjs-flash/dist/Productjs-flash.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Productjs-contrib-hls/5.14.1/Productjs-contrib-hls.min.js"></script>
    <?php endif; ?>
        <Product id="play" class="Product-js vjs-big-play-centered skin-<?php echo $player_color_skin; ?> vjs-16-9" controls preload="none" width="640" height="265" poster="<?php echo $this->common_model->get_Product_poster_url($watch_Products->Products_id); ?>" data-setup="{}">                            <!-- Product source -->
                <?php
                    foreach ($subtitles as $subtitle):
                ?>
                <!-- subtitle source -->
                <track kind="<?php echo $subtitle['kind']; ?>" src="<?php echo $subtitle['src']; ?>" srclang="<?php echo $subtitle['srclang']; ?>" label="<?php echo $subtitle['language']; ?>"></track><!-- Tracks need an ending tag thanks to IE9 -->
                <?php endforeach; ?>                         
            <!-- worning text if needed -->
            <p class="vjs-no-js"><?php echo trans('to_view_this_Product_please_enable_javascript,_and_consider_upgrading_to_a_web_browser_that'); ?> <a href="http://Productjs.com/html5-Product-support/" target="_blank"><?php echo trans('supports_html5_Product'); ?></a></p>
        </Product>
        <script>
	      var options;
	      options = {
	      	"controls": true, 
			"autoplay": false, 
			"preload": "auto" ,
			"playbackRates": [0.5, 1, 1.5, 2, 3, 4],
	        techOrder: [ 'chromecast', 'html5' ],
	        sources: [
			    { src: '<?php echo $file_url; ?>', type: '<?php if($file_source =='mp4' || $file_source =='gdrive' || $file_source =='amazone'){echo 'Product/mp4';}else if($file_source =='flv'){echo 'Product/x-flv';}else if($file_source =='webm' || $file_source =='mkv'){echo 'Product/webm';}else if($file_source =='m3u8'){echo 'application/x-mpegURL';} ?>'}
			],
			chromecast: {				
			      requestTitleFn: function(source) { // Not required
			         return '<?php echo str_replace('"','',str_replace("'", "", $watch_Products->title)); ?>';
			      },
			      requestSubtitleFn: function(source) { // Not required
			         return 'Watching TVShows';
			      },
			      requestCustomDataFn: function(source) { // Not required
			         return {
                        'live': false,
                    }
			      },
			      requestPosterFn: function () {
	                return [
	                    {
	                        'url': '<?php echo $this->common_model->get_Product_thumb_url($watch_Products->Products_id); ?>'
	                    }
	                ];
	            }
		   	},
		   	plugins: {
		      chromecast: {
		         customData: {
                        live: false
                    }
		      },
		    }
	      };
	      var ovoo_player = Productjs('play', options);
	   </script>
	    <?php $this->load->view($theme_dir.'player_plugin') ?>
		<?php endif; ?>
		<?php if($file_source=='youtube'): ?>
	        <!-- play from youtube file -->
	       <Product id="play" class="Product-js vjs-big-play-centered skin-<?php echo $player_color_skin; ?> vjs-16-9" poster="<?php echo $this->common_model->get_Product_poster_url($watch_Products->Products_id); ?>">
	           <?php
	                foreach ($subtitles as $subtitle):
	            ?>
	            <!-- subtitle source -->
	            <track kind="<?php echo $subtitle['kind']; ?>" src="<?php echo $subtitle['src']; ?>" srclang="<?php echo $subtitle['srclang']; ?>" label="<?php echo $subtitle['language']; ?>"></track><!-- Tracks need an ending tag thanks to IE9 -->
	            <?php endforeach; ?>
	       </Product>
	        <!-- youtube -->
	        <script src="<?php echo base_url(); ?>assets/player/plugins/Productjs-youtube/Youtube.min.js"></script>
	       
	        <script>
	            Productjs("play", { 
					            "controls": true, 
					            "autoplay": false, 
					            "preload": "auto" ,
					            "playbackRates": [0.5, 1, 1.5, 2],
					            "width": 640,
					            "height": 265,
					             techOrder:  ["youtube"],
					             sources: [{ "type": "Product/youtube", "src": "<?php echo $file_url; ?>"}],
	             		});
	        </script>                                    
	    <?php endif; ?>                        
	    <?php if($file_source=='vimeo'): ?>
	        <!--  play from vimeo file -->                            
	          <script src="<?php echo base_url(); ?>assets/player/Product-js-5/Product.min.js"></script>
	          <script src="<?php echo base_url(); ?>assets/player/plugins/Productjs-vimeo/vimeo.js"></script>
	           <Product id="playerjs" class="Product-js vjs-big-play-centered skin-<?php echo $player_color_skin; ?> vjs-16-9" controls autoplay width="960" height="400"
	              data-setup='{}'
	            >
	            </Product>
	            </center>
	            <script>
	                Productjs("playerjs", { 
	                "controls": true, 
	                "autoplay": false, 
	                "preload": "auto" ,
	                "playbackRates": [0.5, 1, 1.5, 2],
	                "width": 640,
	                "height": 265,
	                 techOrder:  ["vimeo"],
	                 sources: [{ "type": "Product/vimeo", "src": "https://vimeo.com/257776764"}],
	                 });
	            </script>                             
	    <?php endif; ?>
	    <?php if($file_source=='embed'): ?>
	        <!-- play from embed url  -->
	        <style type="text/css">
	            .Product-embed-container {
	                position: relative;
	                padding-bottom: 56.25%;
	                padding-top: 30px; height: 0; overflow: hidden;
	                }
	                .Product-embed-container iframe,
	                .Product-embed-container object,
	                .Product-embed-container embed {
	                position: absolute;
	                top: 0;
	                left: 0;
	                width: 100%;
	                height: 100%;
	                }
	        </style>
	       <div class="Product-embed-container"><iframe class="responsive-embed-item" src="<?php echo $file_url; ?>" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>
	    <?php endif; ?>
	<?php else: ?>
	    <!-- play trailler from youtube -->
	    <style type="text/css">
	        .Product-embed-container {
	            position: relative;
	            padding-bottom: 56.25%;
	            padding-top: 30px; height: 0; overflow: hidden;
	            }
	            .Product-embed-container iframe,
	            .Product-embed-container object,
	            .Product-embed-container embed {
	            position: absolute;
	            top: 0;
	            left: 0;
	            width: 100%;
	            height: 100%;
	            }
	    </style>
	    <div class="Product-embed-container"><iframe width="853" height="480" src="https://www.youtube.com/embed?listType=search&list=<?php echo $watch_Products->title; ?>" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>
	<?php endif; ?>
	<?php $this->load->view($theme_dir.'disclaimer'); ?>
	<!-- server -->
	<div class="row">
        <div class="col-md-12 m-b-10">
            <?php $this->load->view($theme_dir.'report');?>
        </div>
    </div>
</div>

<?php $this->load->view($theme_dir.'seasion_episode', array('Products_id' => $watch_Products->Products_id,'first_ep_details'=>$first_ep_details)); ?>