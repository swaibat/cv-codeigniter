<div class="row card">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php echo base_url() . 'admin/Products_add'; ?>" class="btn btn-sm btn-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-plus"></i></span><?php echo trans('add_Product'); ?></a> <br>
        <br>
      </div>
      <div class="col-md-9">
        <form class="form-inline pull-right" method="get" action="<?php echo base_url('admin/Products') ?>">
          <div class="form-group mx-sm-3 mb-2 ">
            <label for="title" class="sr-only"><?php echo trans('title'); ?></label>
            <input type="text" name="title" value="<?php if (isset($title)) {
                                                      echo $title;
                                                    } ?>" class="form-control" id="title" placeholder="<?php echo trans('title'); ?>">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="release" class="sr-only"><?php echo trans('release'); ?></label>
            <select class="form-control select2 " name="release" id="release">
              <option value=""><?php echo trans('all_release'); ?></option>
              <?php $current_year = date("Y");
              $end_year = $current_year - 200;
              for ($i = $current_year; $i > $end_year; $i--) :
                ?>
                <option value="<?php echo $i; ?>" <?php if (isset($release) && $release == $i) {
                                                      echo 'selected';
                                                    } ?>><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="release" class="sr-only"><?php echo trans('publication'); ?></label>
            <select class="form-control select2" name="publication" id="publication">
              <option value="">All</option>
              <option value="1" <?php if (isset($publication) && $publication == '1') {
                                  echo 'selected';
                                } ?>><?php echo trans('published'); ?></option>
              <option value="0" <?php if (isset($publication) && $publication == '0') {
                                  echo 'selected';
                                } ?>><?php echo trans('unpublished'); ?></option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mb-2"><span class="btn-label"><i class="fa fa-search"></i></span><?php echo trans('search'); ?></button>
        </form>
      </div>
    </div>
  </div>
  <?php if (count($this->db->get('Products')->result_array()) > 0) : ?>
    <table class="table table-striped" id="datatablessd">
      <thead>
        <tr>
          <th>#</th>
          <th>###</th>
          <th><?php echo trans('thumbnail'); ?></th>
          <th><?php echo trans('name'); ?></th>
          <th><?php echo trans('description'); ?></th>
          <th><?php echo trans('Product_type'); ?></th>
          <th><?php echo trans('status'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php $sl = 1;
          if ($last_row_num)
            $sl = $last_row_num + 1;
          foreach ($Products as $Products) :
            ?>
          <tr id='row_<?php echo $Products['Products_id']; ?>'>
            <td><?php echo $sl++; ?></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-white btn-sm dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-item" target="_blank" href="<?php echo base_url() . 'watch/' . $Products['slug']; ?>"><?php echo trans('preview'); ?></a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url() . 'admin/file_and_download/' . $Products['Products_id']; ?>"><?php echo trans('uploads_and_downloads'); ?></a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url() . 'admin/Products_edit/' . $Products['Products_id']; ?>"><?php echo trans('edit_Product'); ?></a></li>
                  <li><a class="dropdown-item" title="<?php echo trans('delete'); ?>" href="#" onclick="delete_row(<?php echo " 'Products' " . ',' . $Products['Products_id']; ?>)" class="delete"><?php echo trans('delete'); ?></a> </li>
                  <li><a class="dropdown-item" href="<?php echo base_url() . 'admin/send_product_notification/push/' . $Products['Products_id']; ?>"><?php echo trans('send_push_notification'); ?></a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url() . 'admin/send_product_notification/email/' . $Products['Products_id']; ?>"><?php echo trans('send_email_newslater'); ?></a></li>

                </ul>
              </div>
            </td>
            <td><img src="<?php echo $this->common_model->get_Product_thumb_url($Products['Products_id']); ?>" class="img-fluid" style="max-width: 185"></td>
            <td><a target="_blank" href="<?php echo base_url() . 'watch/' . $Products['slug']; ?>"><strong><?php echo $Products['title']; ?></strong></a></td>
            <td><?php echo $Products['description']; ?></td>
            <td>
              <?php
                  $Products_types = explode(',', $Products['Product_type']);
                  foreach ($Products_types as $Products_type) :
                    $Product_type_name = $this->common_model->get_Product_type($Products_type);
                    echo '<span class="label label-primary label-xs">' . $Product_type_name . '</span>&nbsp;';
                  endforeach;
                  ?>
            </td>
            <td>
              <?php
                  if ($Products['publication'] == '1') {
                    echo '<span class="label label-primary label-xs">Published</span>';
                  } else {
                    echo '<span class="label label-warning label-mini">Unublished</span>';
                  }
                  ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <div class="text-center">
      <h2><?php echo trans('no_Product_found'); ?></h2>
    </div>
  <?php endif; ?>
  <?php echo $links; ?>

</div>
<script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function() {
    $(".select2").select2();
  });
</script>