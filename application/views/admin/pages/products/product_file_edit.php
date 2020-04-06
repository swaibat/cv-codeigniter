<?php $Product_source = app_config('Product_source');?>
<style>
.tab-content {
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
}
</style>
<div class="card">
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <a class="btn btn-sm btn-primary waves-effect mb-20" href="<?php echo base_url('admin/file_and_download/') . $Product_file_info->Products_id; ?>"> <span class="btn-label"><i class="fa fa-arrow-left"></i></span><?php echo trans('back_to_list'); ?></a>
<br><br>
      <div class="panel panel-border panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo trans('edit_episode') ?></h3>
        </div>
        <div class="panel-body">
            <?php echo form_open_multipart(base_url('admin/product_file_update/'.$Product_file_info->Product_file_id)); ?>           
              <input type="hidden" name="Products_id" value="<?php echo $Product_file_info->Products_id; ?>">
              <div class="form-group">
                <label class="control-label"><?php echo trans('label') ?></label>&nbsp;&nbsp;<input id="label" type="text" value="<?php echo $Product_file_info->label; ?>" name="label" class="form-control" placeholder="Episode-1" required="">
              </div>
              <div class="form-group">
                <label class="control-label"><?php echo trans('order'); ?></label>
                <input type="number" name="order" class="form-control" value="<?php echo $Product_file_info->order; ?>" placeholder="0 to 9999" required>
              </div>
              <div class="form-group">
                <label class="control-label"><?php echo trans('source'); ?></label>
                <select class="form-control" name="source" id="selected-source">
                  <option value="upload" <?php if($Product_source =='upload' || $Product_file_info->file_source =='upload'): echo 'selected'; endif;?>><?php echo trans('upload');?></option>
                  <option value="youtube" <?php if($Product_source =='youtube' || $Product_file_info->file_source =='youtube'): echo 'selected'; endif;?>><?php echo trans('youtube');?></option>
                  <option value="vimeo" <?php if($Product_source =='vimeo' || $Product_file_info->file_source =='vimeo'): echo 'selected'; endif;?>><?php echo trans('Product');?></option>
                  <option value="embed" <?php if($Product_source ==''): echo 'selected'; endif;?>><?php echo trans('google_drive');?></option>
                  <option value="amazone" <?php if($Product_source =='amazone' || $Product_file_info->file_source =='amazone'): echo 'selected'; endif;?>><?php echo trans('amazone_s3');?></option>
                  <option value="mp4" <?php if($Product_source =='mp4' || $Product_file_info->file_source =='mp4'): echo 'selected'; endif;?>><?php echo trans('mp4_from_url');?></option>
                  <option value="webm" <?php if($Product_source =='webm' || $Product_file_info->file_source =='webm'): echo 'selected'; endif;?>><?php echo trans('webm_from_url');?></option>
                  <option value="m3u8" <?php if($Product_source =='m3u8' || $Product_file_info->file_source =='m3u8'): echo 'selected'; endif;?>><?php echo trans('m3u8_from_url');?></option>
                  <option value="embed" <?php if($Product_source =='embed' || $Product_file_info->file_source =='embed'): echo 'selected'; endif;?>><?php echo trans('embed_url');?></option>
                </select>
              </div>
              <div class="form-group" <?php if($Product_source =='upload'): echo 'style="display:none;"'; endif;?> id="url-input">
                <label class="control-label"><?php echo trans('url') ?></label>
                <input type="text" name="url" id="url-input-field" class="form-control" value="<?php echo $Product_file_info->file_url; ?>" placeholder="http://server-2.com/products/titalic.mp4" <?php if($Product_source !='upload'): echo 'required'; endif;?> ><br>
              </div>
              <div class="form-group" <?php if($Product_source !='upload'): echo 'style="display:none;"'; endif;?> id="image-input">
                <label class="control-label"><?php echo trans('select_Product'); ?></label>
                <input class="Productselect" name="Productfile" id="image-input-field" type="file" accept="Product/*" <?php if($Product_source =='upload'): echo 'required'; endif;?> />
              </div>
              <div class="form-group">
                <button class="btn btn-sm btn-primary waves-effect" type="submit"> <span class="btn-label"><i class="fa fa-plus"></i></span><?php echo trans('save_changes') ?> </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
    <script>
      jQuery(document).ready(function() {
          $('form').parsley();
          $(".Productselect").filestyle({
              input: true,
              icon: true,
              buttonBefore: true,
              text: "<?php echo trans('select_Product'); ?>",
              htmlIcon: '<span class="fa fa-file-Product-o"></span>',
              badge: true,
              badgeName: "badge-danger"
          });

          $( "#selected-source" ).change(function() {
             var source = $("#selected-source option:selected" ).val();
             if(source == 'upload'){
               $("#image-input").show('slow');
               $("#url-input").hide('slow');
               $("#image-input-field").attr("required", true);
               $("#url-input-field").attr("required", false);
             }else{
               $("#image-input").hide('slow');
               $("#url-input").show('slow');
               $("#image-input-field").attr("required", false);
               $("#url-input-field").attr("required", true);
             }
          });
      });
    </script>