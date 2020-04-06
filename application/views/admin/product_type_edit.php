<?php
  $Product_types    = $this->db->get_where('Product_type' , array('Product_type_id' => $param2) )->result_array();
  foreach ( $Product_types as $row):
?>

<?php echo form_open(base_url() . 'admin/Product_type/update/'.$param2 , array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data'));?>

<h4 class="text-center"><?php echo trans('edit_Product_type'); ?></h4>
<hr>
<div class="form-group">
  <label class="control-label"><?php echo trans('Product_type'); ?></label>
    <input type="text"  name="Product_type" value="<?php echo $row['Product_type']; ?>" class="form-control" required />
</div>

<div class="form-group">
  <label class="control-label"><?php echo trans('description'); ?></label>
    <input type="text"  name="Product_type_desc"  value="<?php echo $row['Product_type_desc']; ?>" class="form-control"  />
</div>

<div class="form-group">
  <label class="control-label"><?php echo trans('primary_menu'); ?></label>             
    <div class="animated-checkbox checkbox-inline">
      <label>
        <input type="checkbox" name='primary_menu' value="1"  <?php if($row['primary_menu']=='1'){ echo "checked";} ?>><span class="label-text"></span>
      </label>
    </div>
</div>

<div class="form-group">
  <label class="control-label"><?php echo trans('footer_menu'); ?></label>              
    <div class="animated-checkbox checkbox-inline">
      <label>
        <input type="checkbox" name='footer_menu' value="1"  <?php if($row['footer_menu']=='1'){ echo "checked";} ?>><span class="label-text"></span>
      </label>
    </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <button type="submit" class="btn btn-sm btn-primary waves-effect"> <span class="btn-label"><i class="fa fa-floppy-o"></i></span><?php echo trans('save') ?> </button>
    
  </div>
</div>
<?php echo form_close(); ?>
<?php endforeach; ?>
<script>
  jQuery(document).ready(function() {
    $('form').parsley();                            

    });
</script> 