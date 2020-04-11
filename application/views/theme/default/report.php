<?php 
  $product_report_enable                  =   $this->db->get_where('config' , array('title' =>'product_report_enable'))->row()->value;
  if($product_report_enable == '1'):
    $product_report_note                  =   $this->db->get_where('config' , array('title' =>'product_report_note'))->row()->value;
    $recaptcha_enable                   =   $this->db->get_where('config' , array('title' =>'recaptcha_enable'))->row()->value;
    $report_success_message             = $this->session->flashdata('report_success');
    $report_error_message               = $this->session->flashdata('report_error');
 ?>

<div class="pull-right">
    <a data-toggle="modal" id="menu" class="btn" data-target="#report-modal" data-id="<?php echo base_url('home/view_modal/report/'.$watch_Products->product_id) ?>" style="text-transform: lowercase;font-size: 13px;color: yellow;" href="#"><i class="fa fa-warning"></i>&nbsp;report</a>
</div>

<!-- report modal  -->
  <div id="report-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content p-0 b-0">
        <div class="panel report-panel panel-color panel-primary">
          <div class="panel-heading">
            <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="panel-title text-light"><?php echo trans('report_product'); ?></h3>
          </div>
          <div class="modal-body">
            <?php if($report_success_message !=''): ?>
              <div class="alert alert-dsuccess"><?php echo $report_success_message; ?></div>
              <script>
                $(document).ready(function() {
                  $('#report-modal').modal('show');
                });
              </script>
            <?php endif; ?>

            <?php if($report_error_message !=''): ?>
              <div class="alert alert-danger"><?php echo $report_error_message; ?></div>
              <script>
                $(document).ready(function() {
                  $('#report-modal').modal('show');
                });
              </script>
            <?php endif; ?>

            <div id="modal-loader" style="display: none; text-align: center;"> <img src="<?php echo base_url(); ?>assets/images/preloader.gif" /> </div>
            
            <?php echo form_open(base_url() . 'user/report_product/'.$watch_Products->product_id , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data', 'id' =>'report_form'));?>
              <?php echo $product_report_note; ?>
              <div class="form-group">
                <label class="col-sm-3 control-label">To</label>
                <div class="col-sm-9">
                  <p class="m-t-10"><strong><?php echo $watch_Products->title;?></strong></p>
                </div>
                <!-- End col-6 -->
              </div>
              <!-- end form -group -->
              <input type="hidden" name="product_id" value="<?php echo $watch_Products->product_id;?>">
              <fieldset class="form-group">
                <legend class="col-sm-3 control-label"><?php echo trans('Product'); ?></legend>
                <div class="col-sm-9">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="Product" type="radio" name="Product" value="Broken" ><?php echo trans('broken'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="Product" type="radio" name="Product" value="Wrong Product" ><?php echo trans('wrong_product'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="Product" type="radio" name="Product" value="Others" ><?php echo trans('others'); ?>
                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset class="form-group">
                <legend class="col-sm-3 control-label"><?php echo trans('audio'); ?></legend>
                <div class="col-sm-9">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="audio" type="radio" name="audio" value="Not Synced" ><?php echo trans('not_synced'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="audio" type="radio" name="audio" value="Wrong Audio" ><?php echo trans('wrong_audio'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="audio" type="radio" name="audio" value="Others" ><?php echo trans('others'); ?>
                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset class="form-group">
                <legend class="col-sm-3 control-label"><?php echo trans('subtitle'); ?></legend>
                <div class="col-sm-9">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="subtitle" type="radio" name="subtitle" value="Not Synced" ><?php echo trans('not_synced'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="subtitle" type="radio" name="subtitle" value="Wrong Subtitle" ><?php echo trans('wrong_subtitle'); ?>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" id="subtitle" type="radio" name="subtitle" value="Missing Subtitle" ><?php echo trans('missing_subtitle'); ?>
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo trans('others_message'); ?></label>
                <div class="col-sm-9">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Describe the issue here(optional)" style="background-color: #2b2b2b;border-color: #424040;"></textarea>
                </div>
                <!-- End col-6 -->
              </div>
              <!-- end form -group -->
              <div id="response"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                  <?php if($recaptcha_enable == '1'): echo $this->recaptcha->create_box(); endif;?>
                </div>
              </div>
              
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9 m-t-15">
                <button type="submit" id="submit_btn" class="btn btn-sm btn-success waves-effect"><span class="btn-label"><i class="fa fa-paper-plane"></i></span><?php echo trans('send'); ?> </button>
                <button type="" class="btn btn-sm btn-white m-l-5 waves-effect" data-dismiss="modal"><?php echo trans('close'); ?> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END report modal -->
</form>
<script>
  $(document).on('click', '#submit_btn', function(e) {
    $('#submit_btn').html('<span class="btn-label"><i class="fa fa-spinner"></i></span>SENDING..');
  });
</script>

<?php endif; ?>