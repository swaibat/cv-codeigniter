<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin extends Admin_Core_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('common_model');
		$this->load->model('email_model');
		$this->load->database();
		//cache controlling
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}

	//default index function, redirects to login/dashboard 
	public function index()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url() . 'login', 'refresh');
		if ($this->session->userdata('admin_is_login') == 1)
			redirect(base_url() . 'admin/dashboard', 'refresh');
	}

	//dashboard
	function dashboard()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['folder_name']           = 'dashboard';
		$data['page_name']             = 'dashboard';
		$data['page_title']            = trans('admin_dashboard');
		$this->load->view('admin/index', $data);
	}
	// VIEW ALL CATEGORIS
	function category(){
		$data['folder_name']   	= 'categories';
		$data['page_name']		= 'category';
		$data['page_title']		= 'Manage Categories';
		$data['categorys']      = $this->db->get('category')->result_array();
		$this->load->view('admin/index', $data);
	}

	// CREATE A NEW CATEGORY
	function category_create(){
		if (isset($_POST) && !empty($_POST)) {
			$data['name']           = $this->input->post('name');
	        $data['description']    = $this->input->post('description');
	        $data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
	        $data['featured']       = $this->input->post('featured');          
	        $data['publication']    = $this->input->post('publication');          

	        $this->db->insert('category', $data);
	        if($this->input->post('image_link')!=''){ 
	            $image_source           =   $this->input->post('image_link');
	            $save_to                =   'uploads/category/'.$insert_id.'.png';           
	            $this->common_model->grab_image($image_source,$save_to);
	        }
	        if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
	            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/category/'.$insert_id.'.png');
	        }
			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']    = 'categories';
		$data['page_name']		= 'category_create';
		$data['page_title']	= 'Create category';
		$this->load->view('admin/index', $data);
	}

	// CREATE A CATEGORY
	function category_edit($category_id = '')
	{
		if (isset($_POST) && !empty($_POST)) {
			$data['name']			=	$this->input->post('name');
			$this->db->update('category', $data,  array('category_id' => $category_id));
			redirect(base_url() . 'index.php?admin/category_list', 'refresh');
		}
		$data['category_id']		=	$category_id;
		$data['page_name']		=	'category_edit';
		$data['page_title']	=	'Edit category';
		$this->load->view('backend/index', $data);
	}

	/// DELETE CATEGORY
	function category_delete($category_id = '')
	{
		$this->db->delete('category',  array('category_id' => $category_id));
		redirect(base_url() . 'index.php?admin/category_list', 'refresh');
	}

	// slider setting
	function slider_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update') {
			$slider_type  = $this->input->post('slider_type');
			// update slider type
			$data['value']    =   $slider_type;
			$this->db->where('title', 'slider_type');
			$this->db->update('config', $data);

			// update slider fullwide
			$data['value']    =   $this->input->post('slider_fullwide');
			$this->db->where('title', 'slider_fullwide');
			$this->db->update('config', $data);

			// update slider height
			$data['value']    =   $this->input->post('slider_height');
			$this->db->where('title', 'slider_height');
			$this->db->update('config', $data);

			// update slider border radius
			$data['value']    =   $this->input->post('slider_border_radius');
			$this->db->where('title', 'slider_border_radius');
			$this->db->update('config', $data);

			// update slider arrow
			$data['value']    =   $this->input->post('slider_arrow');
			$this->db->where('title', 'slider_arrow');
			$this->db->update('config', $data);

			// update slider bullet
			$data['value']    =   $this->input->post('slider_bullet');
			$this->db->where('title', 'slider_bullet');
			$this->db->update('config', $data);

			if ($slider_type == 'product') {
				$data['value'] =   $this->input->post('total_product_in_slider');
				$this->db->where('title', 'total_product_in_slider');
				$this->db->update('config', $data);
			}
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']    = 'sliders';
		$data['page_name']      = 'slider_setting';
		$data['page_title']     = trans('slider_setting');
		$this->load->view('admin/index', $data);
	}

	// CREATE A CATEGORY
	function slider_add()
	{
		if (isset($_POST) && !empty($_POST)) {
			$data['title']              =   $this->input->post('title');
			$data['description']        =   $this->input->post('description');
			$data['order']              =   $this->input->post('order');
			$data['action_type']        =   $this->input->post('action_type');
			$data['action_btn_text']    =   $this->input->post('action_btn_text');
			$data['image_link']         =   base_url() . 'uploads/no_image.jpg';

			if ($data['action_type'] == 'product') :
				$data['action_id']        =   $this->input->post('product_id');
			elseif ($data['action_type'] == 'tvseries') :
				$data['action_id']        =   $this->input->post('tvseries_id');
			elseif ($data['action_type'] == 'external_browser' || $data['action_type'] == 'webview') :
				$data['action_url']       =   $this->input->post('action_url');
			endif;


			if ($this->input->post('image_link') != '') {
				$data['image_link']     =   $this->input->post('image_link');
			}

			$data['slug']               =   url_title($this->input->post('title'), 'dash', TRUE);
			$data['publication']        =   $this->input->post('publication');

			$this->db->insert('slider', $data);
			$insert_id = $this->db->insert_id();
			if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/slider-' . $insert_id . '.jpg');
				$data['image_link']     =       base_url() . 'uploads/sliders/slider-' . $insert_id . '.jpg';
			}
			$this->db->where('slider_id', $insert_id);
			$this->db->update('slider', $data);

			$this->session->set_flashdata('success', 'Slider added successed');
			redirect($this->agent->referrer());
		}
		$data['folder_name']	=	'sliders';
		$data['page_name']		=	'slider_add';
		$data['page_title']		=	'slider add';
		$this->load->view('backend/index', $data);
	}

	// slider
	function slider($param1 = '', $param2 = '')
	{
		if ($param1 == 'update') {
			$data['title']              =   $this->input->post('title');
			$data['description']        =   $this->input->post('description');
			$data['order']              =   $this->input->post('order');
			$data['action_type']        =   $this->input->post('action_type');
			$data['action_btn_text']    =   $this->input->post('action_btn_text');

			if ($data['action_type'] == 'product') :
				$data['action_id']        =   $this->input->post('product_id');
			elseif ($data['action_type'] == 'tvseries') :
				$data['action_id']        =   $this->input->post('tvseries_id');
			elseif ($data['action_type'] == 'external_browser' || $data['action_type'] == 'webview') :
				$data['action_url']       =   $this->input->post('action_url');
			endif;


			if ($this->input->post('image_link') != '') {
				$data['image_link']  = $this->input->post('image_link');
			}

			if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/slider-' . $param2 . '.jpg');
				$data['image_link']     =       base_url() . 'uploads/sliders/slider-' . $param2 . '.jpg';
			}
			$data['slug']               = url_title($this->input->post('title'), 'dash', TRUE);
			$data['publication']        = $this->input->post('publication');

			$this->db->where('slider_id', $param2);
			$this->db->update('slider', $data);
			$this->session->set_flashdata('success', 'Slider update successed.');
			redirect($this->agent->referrer());
		}
		$data['folder_name']        = 'sliders';
		$data['page_name']      = 'slider_manage';
		$data['page_title']     = 'Slider Management';
		$this->db->order_by('order', "DESC");
		$data['sliders']        = $this->db->get('slider')->result_array();
		$this->load->view('admin/index', $data);
	}

	// add products 
	function products_add()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['folder_name']    = 'products';
		$data['page_name']      = 'products_add';
		$data['page_title']     = trans('products_add');
		$this->load->view('admin/index', $data);
	}

	// edit products 
	function products_edit($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['param1']         = $param1;
		$data['param2']         = $param2;
		$data['folder_name']        = 'products';
		$data['page_name']      = 'products_edit';
		$data['page_title']     = trans('product_edit') . ' | ' . $this->common_model->get_title_by_products_id($param1);
		$this->load->view('admin/index', $data);
	}

	// add,edit products 
	function products($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'add') {
			$data['imdbid']                 = $this->input->post('imdbid');
			$data['title']                  = $this->input->post('title');
			$data['seo_title']              = $this->input->post('seo_title');
			$data['description']            = $this->input->post('description');
			$data['is_paid']                = $this->input->post('is_paid');
			$actors                         = $this->input->post('actor');
			$directors                      = $this->input->post('director');
			$writers                        = $this->input->post('writer');
			$countries                      = $this->input->post('country');
			$categorys                         = $this->input->post('category');
			if ($actors != '' && $actors != NULL) {
				$data['stars']              = implode(',', $actors);
			}
			if ($directors != '' && $directors != NULL) {
				$data['director']           = implode(',', $directors);
			}
			if ($writers != '' && $writers != NULL) {
				$data['writer']             = implode(',', $writers);
			}
			if ($countries != '' && $countries != NULL) {
				$data['country']            = implode(',', $countries);
			}
			if ($categorys != '' && $categorys != NULL) {
				$data['category']              = implode(',', $categorys);
			}

			$data['imdb_rating']        = $this->input->post('rating');
			$data['release']            = $this->input->post('release');


			$data['runtime']            = $this->input->post('runtime');
			$data['publication']        = '0';
			if (isset($_POST['publication'])) {
				$data['publication']    = '1';
			}

			$data['enable_download']    = '0';
			if (isset($_POST['enable_download'])) {
				$data['enable_download']    = '1';
			}

			$data['focus_keyword']      = $this->input->post('focus_keyword');
			$data['meta_description']   = $this->input->post('meta_description');
			$data['tags']               = $this->input->post('tags');

			$this->db->insert('products', $data);
			$insert_id = $this->db->insert_id();
			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$slug_num                   = $this->common_model->slug_num('products', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $insert_id;
			}
			$data_update['slug']        = $slug;
			if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['name'] != '') {
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'uploads/product_thumb/' . $insert_id . '.jpg');
			}

			if (isset($_FILES['poster_file']) && $_FILES['poster_file']['name'] != '') {
				move_uploaded_file($_FILES['poster_file']['tmp_name'], 'uploads/poster_image/' . $insert_id . '.jpg');
			}

			if ($this->input->post('thumb_link') != '') {
				$image_source           =   $this->input->post('thumb_link');
				$save_to                =   'uploads/product_thumb/' . $insert_id . '.jpg';
				$this->common_model->grab_image($image_source, $save_to);
			}

			if ($this->input->post('poster_link') != '') {
				$image_source       =   $this->input->post('poster_link');
				$save_to            =   'uploads/poster_image/' . $insert_id . '.jpg';
				$this->common_model->grab_image($image_source, $save_to);
			}

			$this->db->where('products_id', $insert_id);
			$this->db->update('products', $data_update);

			// email newslater
			if (isset($_POST['email_notify'])) {
				$this->load->model('email_model');
				$this->email_model->create_newslater_cron($insert_id);
			}
			// push notification
			if (isset($_POST['push_notify'])) {
				$this->load->model('notify_model');
				$this->notify_model->send_push_notification($insert_id);
			}
			$this->session->set_flashdata('success', trans('add_success'));
			redirect(base_url() . 'admin/file_and_download/' . $insert_id, 'refresh');
		} else if ($param1 == 'update') {
			$data['imdbid']                 = $this->input->post('imdbid');
			$data['title']                  = $this->input->post('title');
			$data['seo_title']              = $this->input->post('seo_title');
			$data['description']            = $this->input->post('description');
			$data['is_paid']                = $this->input->post('is_paid');
			$actors                         = $this->input->post('actor');
			$directors                      = $this->input->post('director');
			$writers                        = $this->input->post('writer');
			$countries                      = $this->input->post('country');
			$categorys                         = $this->input->post('category');
			$product_types                    = $this->input->post('product_type');
			if ($actors != '' && $actors != NULL) {
				$data['stars']              = implode(',', $actors);
			}
			if ($directors != '' && $directors != NULL) {
				$data['director']           = implode(',', $directors);
			}
			if ($writers != '' && $writers != NULL) {
				$data['writer']             = implode(',', $writers);
			}
			if ($countries != '' && $countries != NULL) {
				$data['country']            = implode(',', $countries);
			}
			if ($categorys != '' && $categorys != NULL) {
				$data['category']              = implode(',', $categorys);
			}

			$data['imdb_rating']        = $this->input->post('rating');
			$data['release']            = $this->input->post('release');
			$data['runtime']            = $this->input->post('runtime');
			$data['product_quality']      = $this->input->post('product_quality');
			$publication                = $this->input->post('publication');
			if ($publication == 'on') {
				$data['publication'] = '1';
			} else {
				$data['publication'] = '0';
			}

			$enable_download                = $this->input->post('enable_download');
			if ($enable_download == 'on') {
				$data['enable_download'] = '1';
			} else {
				$data['enable_download'] = '0';
			}

			$data['focus_keyword']      = $this->input->post('focus_keyword');
			$data['meta_description']   = $this->input->post('meta_description');
			$data['tags']               = $this->input->post('tags');
			$this->db->where('products_id', $param2);
			$this->db->update('products', $data);
			$this->db->where('products_id', $param2);

			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$slug_num                   = $this->common_model->slug_num('products', $slug);
			if ($slug_num > 1) {
				$slug = $slug . '-' . $param2;
			}
			$data_update['slug']               = $slug;
			if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['name'] != '') {
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'uploads/product_thumb/' . $param2 . '.jpg');
			}

			if (isset($_FILES['poster_file']) && $_FILES['poster_file']['name'] != '') {
				move_uploaded_file($_FILES['poster_file']['tmp_name'], 'uploads/poster_image/' . $param2 . '.jpg');
			}

			if ($this->input->post('thumb_link') != '') {
				$image_source = $this->input->post('thumb_link');
				$save_to = 'uploads/product_thumb/' . $param2 . '.jpg';
				$this->common_model->grab_image($image_source, $save_to);
			}

			if ($this->input->post('poster_link') != '') {
				$image_source = $this->input->post('poster_link');
				$save_to = 'uploads/poster_image/' . $param2 . '.jpg';
				$this->common_model->grab_image($image_source, $save_to);
			}

			$this->db->where('products_id', $param2);
			$this->db->update('products', $data_update);
			// email newslater
			if (isset($_POST['email_notify'])) {
				$this->load->model('email_model');
				$this->email_model->create_newslater_cron($param2);
			}
			// push notification
			if (isset($_POST['push_notify'])) {
				$this->load->model('notify_model');
				$this->notify_model->send_push_notification($param2);
			}
			$this->session->set_flashdata('success', trans('update_success'));
			redirect(base_url() . 'admin/products_edit/' . $param2, 'refresh');
			//redirect($this->agent->referrer());
		}
		// filter
		$title          = $this->input->get('title');
		$release        = $this->input->get('release');
		$publication    = $this->input->get('publication');
		$filter = array();
		$filter['is_tvseries '] = 0;
		$search_string = '';
		if ($title != "" && $title != NULL) {
			$filter['title '] = $title;
			$search_string .= 'title=' . $title . '&';
			$data['title'] = $title;
		}
		if ($release != "" && $release != NULL) {
			$filter['release'] = $release;
			$search_string .= 'release=' . $release . '&';
			$data['release'] = $release;
		}
		if ($publication != "" && $publication != NULL) {
			$filter['publication'] = $publication;
			$search_string .= '&&publication=' . $publication;
			$data['publication'] = $publication;
		}
		$total_rows = $this->common_model->get_products_num_rows($filter);
		// page
		$config                     = $this->common_model->pagination();
		$config["base_url"]         = base_url() . "admin/products?" . $search_string;
		$config["total_rows"]       = $total_rows;
		$config["per_page"]         = 10;
		$config["uri_segment"]      = 3;
		//$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$this->pagination->initialize($config);
		$data['last_row_num']       = $this->uri->segment(3);
		$page                       = $this->input->get('per_page'); //($this->uri->segment(3)) ? $this->uri->segment(3) : 0;   
		$data["products"]             = $this->common_model->get_products($filter, $config["per_page"], $page);
		$data["links"]              = $this->pagination->create_links();
		$data['total_rows']         = $config["total_rows"];
		$data['folder_name']          = 'products';
		$data['page_name']          = 'products_manage';
		$data['page_title']         = trans('products_manage');
		$this->load->view('admin/index', $data);
	}

	function file_and_download($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update') {
			$product_id = $param2;
			$file_type = 'upload';
			$product_file_type    = $this->input->post('product_file_type');
			$product_file         = $this->input->post('product_file');
			$link_name          = $this->input->post('link_name');
			$link               = $this->input->post('link');
			$this->db->where('products_id', $product_id);
			$this->db->delete('product_file');
			for ($i = 0; $i < sizeof($product_file_type); $i++) {
				$file_data['products_id']     = $product_id;
				$file_data['file_source']   = $product_file_type[$i];
				$file_data['source_type']   = 'link';
				if ($product_file_type[$i]     == 'upload') {
					$file_data['source_type'] = $this->common_model->get_extension($product_file[$i]);
					copy('uploads/temp/' . $product_file[$i], 'uploads/products/' . $product_file[$i]);
				}
				$file_data['file_url'] = $product_file[$i];
				$this->db->insert('product_file', $file_data);
				//var_dump($file_data);
			}
			$this->db->where('products_id', $product_id);
			$this->db->delete('download_link');
			for ($i = 0; $i < sizeof($link); $i++) {
				$download_data['products_id'] = $product_id;
				$download_data['link_name'] = $link_name[$i];
				$download_data['link']      = $link[$i];
			}
		}
		if ($param1 == 'change_order') :
			$products_id           = $this->input->post('products_id');
			$product_file_ids      = $this->input->post('product_file_id');
			$orders              = $this->input->post('order');
			$i = 0;
			for ($i = 0; $i < sizeof($orders); $i++) :
				$data['order'] = $orders[$i];
				$this->db->where('product_file_id', $product_file_ids[$i]);
				$this->db->update('product_file', $data);
			endfor;
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		endif;
		if ($param1 == 'edit') :
			$data['param1']         = $param1;
			$data['param2']         = $param2;
			$data['page_name']      = 'product_file_edit';
			$data['page_title']     = trans('edit_product_file');
			$data['product_file_info'] = $this->common_model->get_single_product_file_details_by_id($param2);
			$this->load->view('admin/index', $data);
		else :
			$data['param1']         = $param1;
			$data['param2']         = $param2;
			$data['slug']           = $this->common_model->get_slug_by_products_id($param1);
			$data['page_name']      = 'file_and_download';
			$data['page_title']     = trans('file_and_download') . ' | ' . $this->common_model->get_title_by_products_id($param1);
			$this->load->view('admin/index', $data);
		endif;
	}
	// subtitles
	function subtitle($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		$product_file_id              = $this->input->post('product_file_id');
		$products_id                  = $this->input->post('products_id');
		$language                   = $this->input->post('language');
		$srclang                    = $this->common_model->get_srclang($language);
		$kind                       = $this->input->post('kind');
		$vtt_file                   = $this->input->post('vtt_file');
		$vtt_url                    = $this->input->post('vtt_url');
		$is_subtitle                = FALSE;

		if (isset($_FILES['vtt_file']) && $_FILES['vtt_file']['name'] != '') {
			$ext = $this->common_model->get_extension($_FILES['vtt_file']['name']);
			if ($ext == 'vtt')
				$is_subtitle        = TRUE;
			$subtitle_path          = 'uploads/subtitles/' . $products_id . '_' . $product_file_id . '_' . $this->generate_random_string() . '.vtt';
			move_uploaded_file($_FILES['vtt_file']['tmp_name'], $subtitle_path);
			$data['src']            = base_url() . $subtitle_path;
		} else if (isset($vtt_url) && $vtt_url != '') {
			$data['src']            = $vtt_url;
			$is_subtitle            = TRUE;
		}
		if ($is_subtitle) {
			$data['product_file_id']  = $product_file_id;
			$data['products_id']      = $products_id;
			$data['language']       = $language;
			$data['kind']           = $kind;
			$data['srclang']        = $srclang;
			$this->db->insert('subtitle', $data);
			$this->session->set_flashdata('success', trans('add_success'));
			redirect(base_url() . 'admin/file_and_download/' . $products_id, 'refresh');
		} else {
			$this->session->set_flashdata('error', trans('vtt_support_only'));
			redirect(base_url() . 'admin/file_and_download/' . $products_id, 'refresh');
		}
	}

	// products or products types
	function product_type($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'add') {

			$data['product_type']             = $this->input->post('product_type');
			$data['product_type_desc']        = $this->input->post('product_type_desc');
			$data['primary_menu']           = $this->input->post('primary_menu');
			$data['footer_menu']            = $this->input->post('footer_menu');

			$this->db->insert('product_type', $data);

			$insert_id                      = $this->db->insert_id();
			$slug                           = url_title($this->input->post('product_type'), 'dash', TRUE);
			$slug_num                       = $this->common_model->slug_num('product_type', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $insert_id;
			}
			$data_update['slug']               = $slug;
			$this->db->where('product_type_id', $insert_id);
			$this->db->update('product_type', $data_update);

			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'update') {

			$data['product_type']             = $this->input->post('product_type');
			$data['product_type_desc']        = $this->input->post('product_type_desc');
			$data['primary_menu']           = $this->input->post('primary_menu');
			$data['footer_menu']            = $this->input->post('footer_menu');
			$this->db->where('product_type_id', $param2);
			$this->db->update('product_type', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']            = 'products';
		$data['page_name']              = 'product_type_manage';
		$data['page_title']             = 'Videos Type Management';
		$data['product_types']          = $this->db->get('product_type')->result_array();
		$this->load->view('admin/index', $data);
	}
	// products or products types
	function product_quality($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'add') {
			$data['quality']                = $this->input->post('quality');
			$data['description']            = $this->input->post('description');

			$this->db->insert('quality', $data);
			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'update') {
			$data['quality']                = $this->input->post('quality');
			$data['description']            = $this->input->post('description');

			$this->db->where('quality_id', $param2);
			$this->db->update('quality', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']                = 'products';
		$data['page_name']                  = 'product_quality_manage';
		$data['page_title']                 = trans('product_quality_manage');
		$data['quality']                    = $this->db->get('quality')->result_array();
		$this->load->view('admin/index', $data);
	}

	// products or products types
	function comments($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update_product') {
			$data['comment']             = $this->input->post('comment');
			$data['publication']        = $this->input->post('publication');
			$this->db->where('comments_id', $param2);
			$this->db->update('comments', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		} else if ($param1 == 'update_post') {
			$data['comment']             = $this->input->post('comment');
			$data['publication']        = $this->input->post('publication');
			$this->db->where('post_comments_id', $param2);
			$this->db->update('post_comments', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		} else if ($param1 == 'post_comments') {
			$this->session->unset_userdata('active_menu');
			$this->session->set_userdata('active_menu', '33');
			if ($param2 != '' && $param2 != NULL) {
				$data['type']      = $param2;
			} else {
				$data['type']      = '';
			}

			$data['page_name']      = 'post_comments_manage';
			$data['page_title']     = 'Post Comments Management';
			$this->load->view('admin/index', $data);
		} else {
			if ($param1 != '' && $param1 != NULL) {
				$data['type']      = $param1;
			} else {
				$data['type']      = '';
			}
			$data['folder_name']    = 'comments';
			$data['page_name']      = 'comments_manage';
			$data['page_title']     = trans('comments_manage');
			$this->load->view('admin/index', $data);
		}
	}

	function comments_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update') {
			$data['value'] = $this->input->post('comments_method');
			$this->db->where('title', 'comments_method');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('comments_approval');
			$this->db->where('title', 'comments_approval');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('facebook_comment_appid');
			$this->db->where('title', 'facebook_comment_appid');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('disqus_short_name');
			$this->db->where('title', 'disqus_short_name');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']    = 'comments';
		$data['page_name']      = 'comments_setting';
		$data['page_title']     = trans('comments_setting');
		$this->load->view('admin/index', $data);
	}



	// add custom page
	function pages_add()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['folder_name']      = 'pages';
		$data['page_name']      = 'pages_add';
		$data['page_title']     = trans('pages_add');
		$this->load->view('admin/index', $data);
	}

	// edit custom page
	function pages_edit($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['param1']         = $param1;
		$data['param2']         = $param2;
		$data['folder_name']      = 'pages';
		$data['page_name']      = 'pages_edit';
		$data['page_title']     = trans('pages_edit');
		$this->load->view('admin/index', $data);
	}

	// add,update custom page
	function pages($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'add') {
			$data['page_title']         = $this->input->post('page_title');
			$data['seo_title']          = $this->input->post('seo_title');
			$data['content']            = $this->input->post('content');
			$data['primary_menu']       = $this->input->post('primary_menu');
			$data['footer_menu']        = $this->input->post('footer_menu');
			$data['focus_keyword']      = $this->input->post('focus_keyword');
			$data['meta_description']   = $this->input->post('meta_description');
			$data['publication']        = $this->input->post('publication');

			$this->db->insert('page', $data);
			$insert_id = $this->db->insert_id();

			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$slug_num                   = $this->common_model->slug_num('page', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $insert_id;
			}
			$data['slug']               = $slug;
			$this->db->where('page_id', $insert_id);
			$this->db->update('page', $data);

			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		} else if ($param1 == 'update') {
			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$data['page_title']         = $this->input->post('page_title');
			$data['seo_title']          = $this->input->post('seo_title');
			$data['content']            = $this->input->post('content');
			$data['primary_menu']       = $this->input->post('primary_menu');
			$data['footer_menu']        = $this->input->post('footer_menu');
			$data['focus_keyword']      = $this->input->post('focus_keyword');
			$data['meta_description']   = $this->input->post('meta_description');
			$data['slug']               = $slug;
			$data['publication']        = $this->input->post('publication');


			$this->db->where('page_id', $param2);
			$this->db->update('page', $data);

			$slug_num                 = $this->common_model->slug_num('page', $slug);
			if ($slug_num > 1) {
				$slug = $slug . '-' . $param2;
			}
			$data['slug']               = $slug;
			$this->db->where('page_id', $param2);
			$this->db->update('page', $data);

			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		} else {
			if ($param1 != '' && $param1 != NULL) {
				$data['type']      = $param1;
			} else {
				$data['type']      = '';
			}
		}
		$data['folder_name']      = 'pages';
		$data['page_name']      = 'pages_manage';
		$data['page_title']     = trans('pages_manage');
		$this->load->view('admin/index', $data);
	}

	// CREATE A NEW POST
	function posts_add(){
		if (isset($_POST) && !empty($_POST)) {
			$data['post_title']                 = $this->input->post('post_title');
			$data['seo_title']                  = $this->input->post('seo_title');
			$data['content']                    = $this->input->post('content');
			$data['focus_keyword']              = $this->input->post('focus_keyword');
			$data['meta_description']           = $this->input->post('meta_description');
			$data['category_id']                = implode(',', $this->input->post('category_id'));
			$data['publication']                = $this->input->post('publication');
			if ($this->input->post('thumb_link') != '') {
				$data['image_link']     = $this->input->post('thumb_link');
			}

			$this->db->insert('posts', $data);
			$insert_id = $this->db->insert_id();

			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$slug_num                   = $this->common_model->slug_num('products', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $insert_id;
			}
			$data['slug']               = $slug;
			if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['name'] != '') {
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'uploads/post_thumb/' . $slug . '.jpg');
				$data['image_link']     = base_url() . 'uploads/post_thumb/' . $slug . '.jpg';
				$source                 = 'uploads/post_thumb/' . $slug . '.jpg';
				$destination            = 'uploads/post_thumb/small/' . $slug . '.jpg';
				$this->common_model->create_small_thumbnail($source, $destination, "150", "150");
			}
			$this->db->where('posts_id', $insert_id);
			$this->db->update('posts', $data);

			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']    = 'blog';
		$data['page_name']      = 'posts_add';
		$data['page_title']     = trans('posts_add');
		$this->load->view('admin/index', $data);
	}


	// add,update blog post
	function posts($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			$data['post_title']                 = $this->input->post('post_title');
			$data['seo_title']                  = $this->input->post('seo_title');
			$data['content']                    = $this->input->post('content');
			$data['focus_keyword']              = $this->input->post('focus_keyword');
			$data['meta_description']           = $this->input->post('meta_description');
			$data['category_id']                = implode(',', $this->input->post('category_id'));
			$data['publication']                = $this->input->post('publication');
			if ($this->input->post('thumb_link') != '') {
				$data['image_link']     = $this->input->post('thumb_link');
			}
			$this->db->where('posts_id', $param2);
			$this->db->update('posts', $data);
			$slug                       = url_title($this->input->post('slug'), 'dash', TRUE);
			$slug_num                   = $this->common_model->slug_num('products', $slug);
			if ($slug_num > 1) {
				$slug = $slug . '-' . $param2;
			}
			$data['slug']            = $slug;
			if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['name'] != '') {
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'uploads/post_thumb/' . $slug . '.jpg');
				$data['image_link']     = base_url() . 'uploads/post_thumb/' . $slug . '.jpg';
				$source = 'uploads/post_thumb/' . $slug . '.jpg';
				$destination = 'uploads/post_thumb/small/' . $slug . '.jpg';
				$this->common_model->create_small_thumbnail($source, $destination, "150", "150");
			}
			$this->db->where('posts_id', $param2);
			$this->db->update('posts', $data);


			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		} else {
			if ($param1 != '' && $param1 != NULL) {
				$data['type']      = $param1;
			} else {
				$data['type']      = '';
			}
		}
		$data['folder_name']      = 'blog';
		$data['page_name']      = 'posts_manage';
		$data['page_title']     = trans('posts_manage');
		$this->load->view('admin/index', $data);
	}

	// post category
	function post_category($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'add') {

			$data['category']             = $this->input->post('category');
			$data['category_desc']        = $this->input->post('category_desc');
			$slug                         = url_title($this->input->post('category'), 'dash', TRUE);
			$slug_num                     = $this->common_model->slug_num('post_category', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $param2;
			}
			$data_update['slug']               = $slug;

			$this->db->insert('post_category', $data);
			$insert_id                    = $this->db->insert_id();
			$slug                         = url_title($this->input->post('category'), 'dash', TRUE);
			$slug_num                     = $this->common_model->slug_num('post_category', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $insert_id;
			}
			$data_update['slug']               = $slug;
			$this->db->where('post_category_id', $insert_id);
			$this->db->update('post_category', $data_update);

			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'update') {

			$data['category']             = $this->input->post('category');
			$data['category_desc']        = $this->input->post('category_desc');
			$slug                         = url_title($this->input->post('category'), 'dash', TRUE);
			$slug_num                     = $this->common_model->slug_num('post_category', $slug);
			if ($slug_num > 0) {
				$slug = $slug . '-' . $param2;
			}
			$data['slug']                 = $slug;

			$this->db->where('post_category_id', $param2);
			$this->db->update('post_category', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}

		$data['folder_name']      = 'blog';
		$data['page_name']          = 'post_category_manage';
		$data['page_title']         = trans('post_category_manage');
		$data['post_categories']    = $this->db->get('post_category')->result_array();
		$this->load->view('admin/index', $data);
	}

	// ADD A NEW USER
	function user_add(){
		if (isset($_POST) && !empty($_POST)) {
			$data['name']           = $this->input->post('name');
			$data['username']       = $this->input->post('username');
			$data['password']       = md5($this->input->post('password'));
			$data['email']          = $this->input->post('email');
			$data['role']           = $this->input->post('role');
			$data['company']        = $this->input->post('company');
			$data['address']        = $this->input->post('address');
			$data['phone']        = $this->input->post('phone');

			$this->db->insert('user', $data);
			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'users';
		$data['page_name']      = 'user_add';
		$data['page_title']     = trans('user_add');
		$this->load->view('admin/index', $data);
	}

	// EDIT A USER
	function user_edit($param1 = '', $param2 = ''){
		if (isset($_POST) && !empty($_POST)) {
			$data['name']           = $this->input->post('name');
			$data['username']       = $this->input->post('username');
			if ($this->input->post('password') != '' || $this->input->post('password') != NULL) {
				$data['password']   = md5($this->input->post('password'));
			}
			$data['email']          = $this->input->post('email');
			$data['role']           = $this->input->post('role');
			$data['company']        = $this->input->post('company');
			$data['address']        = $this->input->post('address');
			$data['phone']        = $this->input->post('phone');

			$this->db->where('user_id', $param2);
			$this->db->update('user', $data);
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'users';
		$data['page_name']      = 'user_edit';
		$data['page_title']     = trans('user_edit');
		$this->load->view('admin/index', $data);
	}

	// users
	function manage_user($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['folder_name']      = 'users';
		$data['page_name']      = 'user_manage';
		$data['page_title']     = trans('user_manage');
		$data['users']          = $this->db->get('user')->result_array();
		$this->load->view('admin/index', $data);
	}

	// users
	function manage_star($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'add') {
			$star_name                      = trim($this->input->post('star_name'));
			if ($this->db->get_where('star', array('star_name' => $star_name))->num_rows() > 0) {
				$this->session->set_flashdata('error', 'Star Already exist.');
				redirect($this->agent->referrer());
			} else {
				$data['star_name']              = $star_name;
				$data['slug']                   = $this->common_model->get_seo_url($star_name);
				$data['star_type']              = $this->input->post('star_type');
				$data['star_desc']              = $this->input->post('star_desc');
				$this->db->insert('star', $data);
				$insert_id = $this->db->insert_id();
				if (isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
					move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/star_image/' . $insert_id . '.jpg');
				}
			}
			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'update') {
			$star_name                          = trim($this->input->post('star_name'));
			if ($this->db->get_where('star', array('star_name' => $star_name))->num_rows() > 1) {
				$this->session->set_flashdata('error', 'Duplicate Star exist.');
				redirect($this->agent->referrer());
			} else {
				$data['star_name']              = $star_name;
				$data['slug']                   = $this->common_model->get_seo_url($star_name);
				$data['star_type']              = $this->input->post('star_type');
				$data['star_desc']              = $this->input->post('star_desc');
				$this->db->where('star_id', $param2);
				$this->db->update('star', $data);
				if (isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
					move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/star_image/' . $param2 . '.jpg');
				}
				$this->session->set_flashdata('success', trans('update_success'));
				redirect($this->agent->referrer());
			}
		}
		$config = $this->common_model->pagination();
		$config["base_url"]                     = base_url() . "admin/manage_star";
		$config["total_rows"]                   = $this->db->get_where('star', array('status' => '1'))->num_rows();
		$config["per_page"]                     = 20;
		$config["uri_segment"]                  = 3;

		$this->pagination->initialize($config);
		$data['last_row_num']                   = $this->uri->segment(3);
		$page                                   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["stars"]                          = $this->common_model->get_stars($config["per_page"], $page);
		$data["links"]                          = $this->pagination->create_links();
		$data['total_rows']                     = $config["total_rows"];
		$data['page_name']                      = 'star_manage';
		$data['page_title']                     = trans('star_manage');
		$this->load->view('admin/index', $data);
	}

	// system setting
	function system_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {

			$data['value'] = $this->input->post('timezone');
			$this->db->where('title', 'timezone');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('site_name');
			$this->db->where('title', 'site_name');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('site_url');
			$this->db->where('title', 'site_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('system_email');
			$this->db->where('title', 'system_email');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('business_address');
			$this->db->where('title', 'business_address');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('business_phone');
			$this->db->where('title', 'business_phone');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('contact_email');
			$this->db->where('title', 'contact_email');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('registration_enable');
			$this->db->where('title', 'registration_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('frontend_login_enable');
			$this->db->where('title', 'frontend_login_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('blog_enable');
			$this->db->where('title', 'blog_enable');
			$this->db->update('config', $data);
			// country menu
			$country_to_primary_menu = $this->input->post('country_to_primary_menu');
			if ($country_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'country_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'country_to_primary_menu');
				$this->db->update('config', $data);
			endif;
			//category menu
			$category_to_primary_menu = $this->input->post('category_to_primary_menu');
			if ($category_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'category_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'category_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			//release menu
			$release_to_primary_menu = $this->input->post('release_to_primary_menu');
			if ($release_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'release_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'release_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			//contact menu
			$contact_to_primary_menu = $this->input->post('contact_to_primary_menu');
			if ($contact_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'contact_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'contact_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			$contact_to_footer_menu = $this->input->post('contact_to_footer_menu');
			if ($contact_to_footer_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'contact_to_footer_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'contact_to_footer_menu');
				$this->db->update('config', $data);
			endif;


			$az_to_primary_menu = $this->input->post('az_to_primary_menu');
			if ($az_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'az_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'az_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			$az_to_footer_menu = $this->input->post('az_to_footer_menu');
			if ($az_to_footer_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'az_to_footer_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'az_to_footer_menu');
				$this->db->update('config', $data);
			endif;


			//star image
			$show_star_image = $this->input->post('show_star_image');
			if ($show_star_image == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'show_star_image');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'show_star_image');
				$this->db->update('config', $data);
			endif;
			// product report
			$product_report_enable = $this->input->post('product_report_enable');
			if ($product_report_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'product_report_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'product_report_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('product_report_email');
			$this->db->where('title', 'product_report_email');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('product_report_note');
			$this->db->where('title', 'product_report_note');
			$this->db->update('config', $data);

			//product request
			$product_request_enable = $this->input->post('product_request_enable');
			if ($product_request_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'product_request_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'product_request_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('product_request_email');
			$this->db->where('title', 'product_request_email');
			$this->db->update('config', $data);


			//recaptcha_enable
			$recaptcha_enable = $this->input->post('recaptcha_enable');
			if ($recaptcha_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'recaptcha_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'recaptcha_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('recaptcha_site_key');
			$this->db->where('title', 'recaptcha_site_key');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('recaptcha_secret_key');
			$this->db->where('title', 'recaptcha_secret_key');
			$this->db->update('config', $data);


			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'settings';
		$data['page_name']      = 'system_setting';
		$data['page_title']     = trans('system_setting');
		$this->load->view('admin/index', $data);
	}

	function update($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['page_name']      = 'update';
		$data['page_title']     = trans('system_updater');
		$this->load->view('admin/index', $data);
	}


	// theme options
	function theme_options($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {

			$data['value'] = $this->input->post('map_api');
			$this->db->where('title', 'map_api');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('map_lat');
			$this->db->where('title', 'map_lat');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('map_lng');
			$this->db->where('title', 'map_lng');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('front_end_theme');
			$this->db->where('title', 'front_end_theme');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('landing_page_enable');
			$this->db->where('title', 'landing_page_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('dark_theme');
			$this->db->where('title', 'dark_theme');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('header_templete');
			$this->db->where('title', 'header_templete');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer_templete');
			$this->db->where('title', 'footer_templete');
			$this->db->update('config', $data);

			// landing page background image
			if (isset($_FILES['landing_page_image']['name']) && !empty($_FILES['landing_page_image']['name'])) :
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 0;
				$config['file_name']            = 'landing_bg_' . uniqid();
				$this->upload->initialize($config);
				//upload file to directory
				if ($this->upload->do_upload('landing_page_image')) :
					$uploadData                 = $this->upload->data();
					$file_name                  = $uploadData['file_name'];
					$file_ext                   = $uploadData['file_ext'];

					$data['value']              = $file_name;
					$this->db->where('title', 'landing_bg');
					$this->db->update('config', $data);
					$this->session->set_flashdata('success', trans('setting_update_success'));
				else :
					$this->session->set_flashdata('error', $this->upload->display_errors());
				endif;
			endif;

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'settings';
		$data['page_name']      = 'theme_options';
		$data['page_title']     = trans('theme_options');
		$this->load->view('admin/index', $data);
	}

	function regenerate_mobile_secret_key()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['value'] = $this->generate_random_string(24);
		$this->db->where('title', 'mobile_apps_api_secret_key');
		$this->db->update('config', $data);

		$this->session->set_flashdata('success', trans('setting_update_success'));
		redirect($this->agent->referrer());
	}
	function regenerate_cron_key()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$data['value'] = $this->generate_random_string(24);
		$this->db->where('title', 'cron_key');
		$this->db->update('config', $data);
		$this->session->set_flashdata('success', trans('setting_update_success'));
		redirect(base_url() . 'admin/cron_setting/', 'refresh');
	}

	// player setting
	function player_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');


		if ($param1 == 'update') {


			$data['value'] = $this->input->post('player_color_skin');
			$this->db->where('title', 'player_color_skin');
			$this->db->update('config', $data);

			$data['value'] = '0';
			if (!empty($this->input->post('player_volume_remember')) && $this->input->post('player_volume_remember') != '' && $this->input->post('player_volume_remember') != NULL) {
				$data['value'] = $this->input->post('player_volume_remember');
			}
			$this->db->where('title', 'player_volume_remember');
			$this->db->update('config', $data);

			$data['value'] = '0';
			if (!empty($this->input->post('player_watermark')) && $this->input->post('player_watermark') != '' && $this->input->post('player_watermark') != NULL) {
				$data['value'] = $this->input->post('player_watermark');
			}
			$this->db->where('title', 'player_watermark');
			$this->db->update('config', $data);

			if (!empty($_FILES['player_watermark_logo']) && $_FILES['player_watermark_logo']['name'] != '') {
				move_uploaded_file($_FILES['player_watermark_logo']['tmp_name'], 'uploads/watermark_logo.' . $this->common_model->get_extension($_FILES['player_watermark_logo']['name']));
				$data['value'] = 'uploads/watermark_logo.' . $this->common_model->get_extension($_FILES['player_watermark_logo']['name']);
				$this->db->where('title', 'player_watermark_logo');
				$this->db->update('config', $data);
			}

			$data['value'] = $this->input->post('player_watermark_url');
			$this->db->where('title', 'player_watermark_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('player_share');
			$this->db->where('title', 'player_share');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('player_share_fb_id');
			$this->db->where('title', 'player_share_fb_id');
			$this->db->update('config', $data);

			$data['value'] = '0';
			if (!empty($this->input->post('player_seek_button')) && $this->input->post('player_seek_button') != '' && $this->input->post('player_seek_button') != NULL) {
				$data['value'] = $this->input->post('player_seek_button');
			}
			$this->db->where('title', 'player_seek_button');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('player_seek_forward');
			$this->db->where('title', 'player_seek_forward');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('player_seek_back');
			$this->db->where('title', 'player_seek_back');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			//redirect(base_url() . 'admin/player_setting/', 'refresh');
		}
		$data['folder_name']      = 'settings';
		$data['page_name']      = 'player_setting';
		$data['page_title']     = trans('player_setting');
		$this->load->view('admin/index', $data);
	}

	// general setting
	function email_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update') {
			$protocol = $this->input->post('protocol');
			if ($protocol == 'smtp') {
				$data['value'] = $this->input->post('protocol');
				$this->db->where('title', 'protocol');
				$this->db->update('config', $data);

				$data['value'] = $this->input->post('smtp_host');
				$this->db->where('title', 'smtp_host');
				$this->db->update('config', $data);

				$data['value'] = $this->input->post('smtp_user');
				$this->db->where('title', 'smtp_user');
				$this->db->update('config', $data);


				$data['value'] = $this->input->post('smtp_pass');
				$this->db->where('title', 'smtp_pass');
				$this->db->update('config', $data);

				$data['value'] = $this->input->post('smtp_port');
				$this->db->where('title', 'smtp_port');
				$this->db->update('config', $data);

				$data['value'] = $this->input->post('smtp_crypto');
				$this->db->where('title', 'smtp_crypto');
				$this->db->update('config', $data);
			} else if ($protocol == 'sendmail') {
				$data['value'] = $this->input->post('protocol');
				$this->db->where('title', 'protocol');
				$this->db->update('config', $data);

				$data['value'] = $this->input->post('mailpath');
				$this->db->where('title', 'mailpath');
				$this->db->update('config', $data);
			}

			$data['value'] = $this->input->post('contact_email');
			$this->db->where('title', 'contact_email');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']    = 'settings';
		$data['page_name']      = 'email_setting';
		$data['page_title']     = trans('email_setting');
		$this->load->view('admin/index', $data);
	}


	// logo setting
	function logo_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			// logo
			if (isset($_FILES['website_logo']['name']) && !empty($_FILES['website_logo']['name'])) :
				$config['upload_path']          = './uploads/system_logo/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 512;
				$config['max_width']            = 512;
				$config['max_height']           = 512;
				$config['file_name']            = 'logo_' . uniqid();
				$this->upload->initialize($config);
				//upload file to directory
				if ($this->upload->do_upload('website_logo')) :
					$uploadData                 = $this->upload->data();
					$file_name                  = $uploadData['file_name'];
					$file_ext                   = $uploadData['file_ext'];

					$data['value']              = $file_name;
					$this->db->where('title', 'logo');
					$this->db->update('config', $data);
					$this->session->set_flashdata('success', trans('setting_update_success'));
				else :
					$this->session->set_flashdata('error', $this->upload->display_errors());
				endif;
			endif;
			// favicon
			if (isset($_FILES['website_favicon']['name']) && !empty($_FILES['website_favicon']['name'])) :
				$config['upload_path']          = './uploads/system_logo/';
				$config['allowed_types']        = 'jpg|png|ico';
				$config['max_size']             = 200;
				$config['max_width']            = 512;
				$config['max_height']           = 512;
				$config['file_name']            = 'favicon_' . uniqid();
				$this->upload->initialize($config);
				//upload file to directory
				if ($this->upload->do_upload('website_favicon')) :
					$uploadData                 = $this->upload->data();
					$file_name                  = $uploadData['file_name'];
					$file_ext                   = $uploadData['file_ext'];

					$data['value']              = $file_name;
					$this->db->where('title', 'favicon');
					$this->db->update('config', $data);
					$this->session->set_flashdata('success', trans('setting_update_success'));
				else :
					$this->session->set_flashdata('error', $this->upload->display_errors());
				endif;
			endif;

			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'settings';

		$data['page_name']      = 'logo_setting';
		$data['page_title']     = trans('logo_setting');
		$this->load->view('admin/index', $data);
	}

	//footer setting
	function footer_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			$data['value'] = $this->input->post('footer1_title');
			$this->db->where('title', 'footer1_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer1_content');
			$this->db->where('title', 'footer1_content');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer2_title');
			$this->db->where('title', 'footer2_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer2_content');
			$this->db->where('title', 'footer2_content');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer3_title');
			$this->db->where('title', 'footer3_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('footer3_content');
			$this->db->where('title', 'footer3_content');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('copyright_text');
			$this->db->where('title', 'copyright_text');
			$this->db->update('config', $data);


			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}

		$data['folder_name']      = 'settings';
		$data['page_name']      = 'footer_setting';
		$data['page_title']     = trans('footer_setting');
		$this->load->view('admin/index', $data);
	}

	//seo setting
	function seo_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			$data['value'] = $this->input->post('author');
			$this->db->where('title', 'author');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('home_page_seo_title');
			$this->db->where('title', 'home_page_seo_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('focus_keyword');
			$this->db->where('title', 'focus_keyword');
			$this->db->update('config', $data);


			$data['value'] = $this->input->post('meta_description');
			$this->db->where('title', 'meta_description');
			$this->db->update('config', $data);


			// product page
			$data['value'] = $this->input->post('product_page_seo_title');
			$this->db->where('title', 'product_page_seo_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('product_page_focus_keyword');
			$this->db->where('title', 'product_page_focus_keyword');
			$this->db->update('config', $data);


			$data['value'] = $this->input->post('product_page_meta_description');
			$this->db->where('title', 'product_page_meta_description');
			$this->db->update('config', $data);


			$data['value'] = $this->input->post('google_analytics_id');
			$this->db->where('title', 'google_analytics_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('blog_title');
			$this->db->where('title', 'blog_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('blog_meta_description');
			$this->db->where('title', 'blog_meta_description');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('blog_keyword');
			$this->db->where('title', 'blog_keyword');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('social_share_enable');
			$this->db->where('title', 'social_share_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('facebook_url');
			$this->db->where('title', 'facebook_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('twitter_url');
			$this->db->where('title', 'twitter_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('linkedin_url');
			$this->db->where('title', 'linkedin_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('vimeo_url');
			$this->db->where('title', 'vimeo_url');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('youtube_url');
			$this->db->where('title', 'youtube_url');
			$this->db->update('config', $data);

			// tv series
			$data['value'] = $this->input->post('tv_series_title');
			$this->db->where('title', 'tv_series_title');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('tv_series_keyword');
			$this->db->where('title', 'tv_series_keyword');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('tv_series_meta_description');
			$this->db->where('title', 'tv_series_meta_description');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'settings';
		$data['page_name']      = 'seo_setting';
		$data['page_title']     = trans('seo_setting');
		$this->load->view('admin/index', $data);
	}


	//copyright_privacy setting
	function copyright_privacy($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'update') {
			$privacy_policy_to_primary_menu = $this->input->post('privacy_policy_to_primary_menu');
			if ($privacy_policy_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'privacy_policy_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'privacy_policy_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			$privacy_policy_to_footer_menu = $this->input->post('privacy_policy_to_footer_menu');
			if ($privacy_policy_to_footer_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'privacy_policy_to_footer_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'privacy_policy_to_footer_menu');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('privacy_policy_content');
			$this->db->where('title', 'privacy_policy_content');
			$this->db->update('config', $data);


			$dmca_to_primary_menu = $this->input->post('dmca_to_primary_menu');
			if ($dmca_to_primary_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'dmca_to_primary_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'dmca_to_primary_menu');
				$this->db->update('config', $data);
			endif;

			$dmca_to_footer_menu = $this->input->post('dmca_to_footer_menu');
			if ($dmca_to_footer_menu == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'dmca_to_footer_menu');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'dmca_to_footer_menu');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('dmca_content');
			$this->db->where('title', 'dmca_content');
			$this->db->update('config', $data);



			$disclaimer_text_enable = $this->input->post('disclaimer_text_enable');
			if ($disclaimer_text_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'disclaimer_text_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'disclaimer_text_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('disclaimer_text');
			$this->db->where('title', 'disclaimer_text');
			$this->db->update('config', $data);



			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'pages';
		$data['page_name']      = 'copyright_privacy';
		$data['page_title']     = trans('copyright_privacy');
		$this->load->view('admin/index', $data);
	}

	function push_notification_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			$data['value'] = $this->input->post('push_notification_enable');
			$this->db->where('title', 'push_notification_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('onesignal_appid');
			$this->db->where('title', 'onesignal_appid');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('onesignal_api_keys');
			$this->db->where('title', 'onesignal_api_keys');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('onesignal_actionmessage');
			$this->db->where('title', 'onesignal_actionmessage');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('onesignal_acceptbuttontext');
			$this->db->where('title', 'onesignal_acceptbuttontext');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('onesignal_cancelbuttontext');
			$this->db->where('title', 'onesignal_cancelbuttontext');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['page_name']      = 'push_notification_setting';
		$data['page_title']     = trans('push_notification_setting');
		$this->load->view('admin/index', $data);
	}

	function send_web_notification($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($param1 == 'send') {
			$data['message']            = $this->input->post("message");
			$data['url']                = $this->input->post("url");
			$data['headings']           = $this->input->post("headings");
			$data['icon']               = $this->input->post("icon");
			$data['img']                = $this->input->post("img");
			$this->load->model('notify_model');
			$this->notify_model->send_web_notification($data);
			$this->session->set_flashdata('success', trans('notification_send_success'));
			redirect($this->agent->referrer());
		}
		$data['page_name']              = 'send_web_notification';
		$data['page_title']             = trans('send_web_notification');
		$this->load->view('admin/index', $data);
	}

	function send_product_notification($type = '', $products_id = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if (!empty($products_id) && $products_id != '' && $products_id != NULL && is_numeric($products_id)) :
			$verify                 = $this->common_model->verify_product_tvseries_id($products_id);
			if ($verify) :
				if ($type == 'email') :
					$this->load->model('email_model');
					$this->email_model->create_newslater_cron($products_id);
					$this->session->set_flashdata('success', trans('newsletter_send_success'));
				else :
					$this->load->model('notify_model');
					$this->notify_model->send_push_notification($products_id);
					$this->session->set_flashdata('success', trans('notification_send_success'));
				endif;
			else :
				$this->session->set_flashdata('error', trans('product_id_not_found'));
			endif;
		else :
			$this->session->set_flashdata('error', trans('invalid_product_id'));
		endif;
		if ($param2 == 'tv') :
			redirect($this->agent->referrer());
		else :
			redirect($this->agent->referrer());
		endif;
	}

	//seo setting
	function social_login_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update_facebook') {
			$facebook_login_enable = $this->input->post('facebook_login_enable');
			if ($facebook_login_enable == '') {
				$data['value'] = '0';
			} else {
				$data['value'] = $facebook_login_enable;
			}
			$this->db->where('title', 'facebook_login_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('facebook_app_id');
			$this->db->where('title', 'facebook_app_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('facebook_app_secret');
			$this->db->where('title', 'facebook_app_secret');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('facebook_graph_version');
			$this->db->where('title', 'facebook_graph_version');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'update_google') {
			$google_login_enable = $this->input->post('google_login_enable');
			if ($google_login_enable == '') {
				$data['value'] = '0';
			} else {
				$data['value'] = $google_login_enable;
			}
			$this->db->where('title', 'google_login_enable');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('google_application_name');
			$this->db->where('title', 'google_application_name');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('google_client_id');
			$this->db->where('title', 'google_client_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('google_client_secret');
			$this->db->where('title', 'google_client_secret');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('google_redirect_uri');
			$this->db->where('title', 'google_redirect_uri');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']      = 'settings';
		$data['page_name']      = 'social_login_setting';
		$data['page_title']     = trans('social_login_setting');
		$this->load->view('admin/index', $data);
	}

	//ads setting
	function ad_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($param1 == 'update') {
			$ads_type = $this->input->post('ads_type');
			if ($ads_type == '0') {
				$data['enable']     = '0';
				$this->db->where('ads_id', $param2);
				$this->db->update('ads', $data);
			} else {
				if ($ads_type == 'image') {
					//$data['ads_image_url']         = base_url().'uploads/no_image.jpg';
					if (isset($_FILES['ads_image']) && $_FILES['ads_image']['name'] != '') {
						move_uploaded_file($_FILES['ads_image']['tmp_name'], 'uploads/ads/' . $param2 . '.jpg');
						$data['ads_image_url']     = base_url() . 'uploads/ads/' . $param2 . '.jpg';
					}
					if ($this->input->post('ads_image_url') != '') {
						$data['ads_image_url']  = $this->input->post('ads_image_url');
					}
					if ($this->input->post('ads_url') != '') {
						$data['ads_url']  = $this->input->post('ads_url');
					}
					$data['enable']     = '1';
					$data['ads_type']   = 'image';
					$this->db->where('ads_id', $param2);
					$this->db->update('ads', $data);
				} else if ($ads_type == 'code') {
					$data['enable']     = '1';
					$data['ads_type']   = 'code';
					$data['ads_code']   = $this->input->post('ads_code');
					$this->db->where('ads_id', $param2);
					$this->db->update('ads', $data);
				} else {
					$data['enable']     = '0';
					$this->db->where('ads_id', $param2);
					$this->db->update('ads', $data);
				}
			}
			$this->session->set_flashdata('success', trans('setting_update_success'));
			redirect($this->agent->referrer());
		}
		if ($param1 == "edit") {
			$data['ads_info']    = $this->common_model->get_single_ads($param2);
			$data['page_name']      = 'ad_edit';
			$data['ads_id']         = $param2;
			$data['page_title']     = 'Edit Ads';
			$this->load->view('admin/index', $data);
		} else {
			$data['page_name']      = 'ad_setting';
			$data['page_title']     = trans('ad_setting');
			$this->load->view('admin/index', $data);
		}
	}

	function test_mail()
	{
		$email  =    $this->input->post('email');
		if ($email != '') {
			$this->load->model('email_model');
			if ($this->email_model->test_mail($email)) {
				$this->session->set_flashdata('success', trans('mail_setup_perfect'));
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('error', trans('mail_setup_error'));
				redirect($this->agent->referrer());
			}
		}
		$this->session->set_flashdata('error', trans('enter_valid_email'));
		redirect($this->agent->referrer());
	}

	// database backup and restore management
	function backup_restore($operation = '', $type = '')
	{

		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		if ($operation == 'create') {
			$this->common_model->create_backup();
			$this->session->set_flashdata('success', trans('backup_created'));
			redirect($this->agent->referrer());
		}
		if ($operation == 'download') {
			$this->load->helper('download');
			$file = FCPATH . 'db_backup/' . $type;
			force_download($file, NULL);
		}
		if ($operation == 'delete') {
			$this->load->helper('file');
			$path_to_file = 'db_backup/' . $type;
			if (unlink($path_to_file)) {
				$this->session->set_flashdata('success', trans('deleted'));
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('error', trans('file_not_found'));
				redirect($this->agent->referrer());
			}
		}
		if ($operation == 'restore') {
			$this->common_model->restore_backup();
			$this->session->set_flashdata('success', trans('backup_restored'));
			redirect($this->agent->referrer());
		}
		$data['folder_name']  = 'backup';
		$data['page_info']  = 'Create backup / restore from backup';
		$data['page_name']  = 'backup_restore';
		$data['page_title'] = trans('backup_restore');
		$this->load->view('admin/index', $data);
	}

	function view_modal( $folder_name= '', $page_name = '', $param2 = '', $param3 = '', $param4 = '')
	{
		log_message('error', 'Some variable did not contain a value.'); 
		$account_type       =   $this->session->userdata('login_type');
		$data['param2']     =   $param2;
		$data['param3']     =   $param3;
		$data['param4']     =   $param4;
		$this->load->view('admin/pages/'. $folder_name .'/' . $page_name . '.php', $data);
	}

	//profile
	function manage_profile()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		$data['page_name']      = 'manage_profile';
		$data['page_title']     = trans('manage_profile');
		$data['profile_info']   = $this->db->get_where('user', array(
			'user_id' => $this->session->userdata('user_id')
		))->result_array();
		$this->load->view('admin/index', $data);
	}

	// profile
	function profile($param1 = '', $param2 = '', $param3 = '')
	{

		$user_id = $this->session->userdata('user_id');
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url() . 'login', 'refresh');
		if ($param1 == 'update') {
			$data['name']  = $this->input->post('name');
			$data['email'] = $this->input->post('email');

			$this->db->where('user_id', $user_id);
			$this->db->update('user', $data);
			$this->common_model->clear_cache();
			move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/user_image/' . $user_id . '.jpg');
			$this->common_model->clear_cache();
			$this->session->set_flashdata('success', trans('profile_info_updated'));
			redirect($this->agent->referrer());
		}
		if ($param1 == 'change_password') {
			$password               = md5($this->input->post('password'));
			$new_password           = md5($this->input->post('new_password'));
			$retype_new_password    = md5($this->input->post('retype_new_password'));

			$current_password       = $this->db->get_where('user', array(
				'user_id' => $this->session->userdata('user_id')
			))->row()->password;

			if ($current_password == $password && $new_password == $retype_new_password) {
				$this->db->where('user_id', $this->session->userdata('user_id'));
				$this->db->update('user', array(
					'password' => $new_password
				));
				$this->session->set_flashdata('success', trans('password_changed'));
			} elseif ($current_password != $password) {
				$this->session->set_flashdata('error', trans('old_password_wrong'));
			} else {
				$this->session->set_flashdata('error', trans('password_not_match'));
			}
			redirect($this->agent->referrer());
		}
	}

	//universal delete function
	function delete_record()
	{
		$response           = array();
		$row_id             = $this->input->post('row_id');
		$table_name         = $this->input->post('table_name');
		$table_row_id       = $table_name . '_id';
		$this->db->where($table_row_id, $row_id);
		$query = $this->db->delete($table_name);
		if ($query == true) :
			$response['status']  = 'success';
			$response['message'] = trans('delete_success');
		else :
			$response['status']  = 'error';
			$response['message'] = trans('delete_fail');
		endif;
		echo json_encode($response);
	}

	//complete import function
	function complete_import()
	{
		$response                   = array();
		$id                         =   trim($_POST["tmdb_id"]);
		$from                       =   $_POST["to"];
		$this->load->model('tmdb_model');
		if ($from == 'tv') {
			$result = $this->tmdb_model->import_tvseries_info($id);
		} else {
			$result = $this->tmdb_model->import_product_info($id);
		}
		if ($result) :
			$response['status']         = 'success';
			$response['message']        = trans('import_success');
		else :
			$response['error']         = 'success';
			$response['message']        = trans('import_fail');
		endif;
		echo json_encode($response);
	}

	function product_file()
	{
		$response = array();
		$file_data['products_id']         = $_POST["products_id"];
		$file_data['file_source']       = $_POST["type"];
		$file_data['file_url']          = $_POST["url"];
		$file_data['source_type']       = 'link';
		$file_data['stream_key']        = $this->generate_random_string();
		$this->db->insert('product_file', $file_data);
		$response['row_id']             = $this->db->insert_id();
		$response['post_status']        = "success";
		$response['type']               = $_POST["type"];
		$response['url']                = $_POST["url"];
		$response['watch_url']          = base_url('watch/') . $this->common_model->get_slug_by_products_id($_POST["products_id"]) . '.html?key=' . $file_data['stream_key'];
		echo json_encode($response);
	}

	// rating
	function rating()
	{
		$response                   = array();
		$rate                       = $_POST["rate"];
		$product_id                   = $_POST["product_id"];
		$post_status                = $this->post_rating($rate, $product_id);
		$response['post_status']    = $post_status;
		$response['rate']           = $rate;
		$response['product_id']       = $product_id;
		echo json_encode($response);
	}

	// post rating
	function post_rating($rate, $product_id)
	{

		$ip = $_SERVER['REMOTE_ADDR'];

		$verify_data = array(
			'product_id'      => $product_id,
			'ip'            => $ip
		);

		$data = array(
			'product_id'            => $product_id,
			'rating'              => $rate,
			'ip'                 => $ip
		);

		$query = $this->db->get_where('rating', $verify_data);
		$rating = $query->result_array();
		$num_row = $query->num_rows();
		if ($num_row > 0) {
			$this->db->where($verify_data);
			$this->db->update('rating', $data);
		} else {
			$this->db->insert('rating', $data);
			$current_rating = $this->db->get_where('products', array('products_id' => $product_id))->row()->total_rating;
			$rating = $current_rating + 1;
			$this->db->where('products_id', $product_id);
			$this->db->update('products', array('total_rating' => $rating));
		}
		return "success";
	}

	public function product_upload()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		$products_id                  = $this->input->post('products_id');
		$label                      = $this->input->post('label');
		$order                      = $this->input->post('order');
		$source                     = $this->input->post('source');
		// validation rule
		$this->form_validation->set_rules('products_id', trans('product_id'), 'trim|required');
		$this->form_validation->set_rules('source', trans('source'), 'trim|required');

		//  data
		$data['products_id']      = $products_id;
		$data['label']          = $label;
		$data['order']          = $order;
		$data['stream_key']     = $this->generate_random_string();
		$insert_status          = FALSE;

		if ($source == 'upload') :
			if ($this->form_validation->run() == FALSE) :
				$this->session->set_flashdata('error', validation_errors());
			else :
				//upload configuration
				$NewFileName                = $products_id . '-' . uniqid(); //new file name
				$config['upload_path']      = 'uploads/products/';
				$config['allowed_types']    = 'mp4|webm|mkv|m3u8';
				$config['file_name']        = $NewFileName;
				$config['max_size']         = 0;
				//$this->load->library('upload', $config);
				$this->upload->initialize($config);
				//upload file to directory
				if ($this->upload->do_upload('productfile')) :
					$uploadData             = $this->upload->data();
					$file_name              = $uploadData['file_name'];
					$file_ext               = $uploadData['file_ext'];
					$file_ext               = str_replace('.', '', $file_ext);

					$data['file_source']    = $file_ext;
					$data['source_type']    = 'upload';
					$data['file_url']       = base_url() . 'uploads/products/' . $file_name;

					$this->db->insert('product_file', $data);
					$insert_id              = $this->db->insert_id();
					$insert_status          = TRUE;
					$this->session->set_flashdata('success', trans('product_add_success'));
				else :
					$this->session->set_flashdata('error', $this->upload->display_errors());

				endif;
			endif;
		else :
			$data['file_source']       = $source;
			$data['file_url']          = $this->input->post('url');
			$data['source_type']       = 'link';
			$this->form_validation->set_rules('url', trans('url'), 'trim|required');
			if ($this->form_validation->run() == FALSE) :
				$this->session->set_flashdata('error', validation_errors());
			else :
				$this->db->insert('product_file', $data);
				$insert_id              = $this->db->insert_id();
				$insert_status          = TRUE;
				$this->session->set_flashdata('success', trans('product_add_success'));
			endif;
		endif;
		redirect($this->agent->referrer());
	}

	public function product_file_update($product_file_id = "")
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		$products_id                  = $this->input->post('products_id');
		$label                      = $this->input->post('label');
		$order                      = $this->input->post('order');
		$source                     = $this->input->post('source');
		// validation rule
		$this->form_validation->set_rules('products_id', trans('product_id'), 'trim|required');
		$this->form_validation->set_rules('source', trans('source'), 'trim|required');

		//  data
		$data['products_id']      = $products_id;
		$data['label']          = $label;
		$data['order']          = $order;

		if ($source == 'upload') :
			if ($this->form_validation->run() == FALSE) :
				$this->session->set_flashdata('error', validation_errors());
			else :
				//upload configuration
				$NewFileName                = $products_id . '-' . uniqid(); //new file name
				$config['upload_path']      = 'uploads/products/';
				$config['allowed_types']    = 'mp4|webm|mkv|m3u8';
				$config['file_name']        = $NewFileName;
				$config['max_size']         = 0;
				//$this->load->library('upload', $config);
				$this->upload->initialize($config);
				//upload file to directory
				if ($this->upload->do_upload('productfile')) :
					$uploadData             = $this->upload->data();
					$file_name              = $uploadData['file_name'];
					$file_ext               = $uploadData['file_ext'];
					$file_ext               = str_replace('.', '', $file_ext);

					$data['file_source']    = $file_ext;
					$data['source_type']    = 'upload';
					$data['file_url']       = base_url() . 'uploads/products/' . $file_name;


					$this->db->where('product_file_id', $product_file_id);
					$this->db->update('product_file', $data);
					$this->session->set_flashdata('success', trans('product_update_success'));
				else :
					$this->session->set_flashdata('error', $this->upload->display_errors());

				endif;
			endif;
		else :
			$data['file_source']       = $source;
			$data['file_url']          = $this->input->post('url');
			$data['source_type']       = 'link';
			$this->form_validation->set_rules('url', trans('url'), 'trim|required');
			if ($this->form_validation->run() == FALSE) :
				$this->session->set_flashdata('error', validation_errors());
			else :
				$this->db->where('product_file_id', $product_file_id);
				$this->db->update('product_file', $data);
				$this->session->set_flashdata('success', trans('product_update_success'));
			endif;
		endif;
		redirect($this->agent->referrer());
	}


	public function load_stars()
	{
		$q                  = $this->input->get('q');
		$users_arr          = [];
		$this->db->limit(50);
		$this->db->like('star_name', $q, 'both');
		$stars          = $this->db->get('star')->result_array();
		foreach ($stars as $star) {
			$userid         = $star['star_id'];
			$name           = $star['star_name'];
			$users_arr[]    = ["id" => $userid, "text" => $name];
		}
		echo json_encode($users_arr);
	}

	public function load_product()
	{
		$q                          = $this->input->get('q');
		$users_arr                  = [];
		$this->db->limit(50);
		$this->db->where('is_tvseries !=', '1');
		$this->db->like('title', $q, 'both');
		$stars                      = $this->db->get('products')->result_array();
		foreach ($stars as $star) {
			$products_id         = $star['products_id'];
			$title           = $star['title'];
			$users_arr[]    = ["id" => $products_id, "text" => $title];
		}
		echo json_encode($users_arr);
	}

	function generate_random_string($length = 12)
	{
		$str = "";
		$characters = array_merge(range('a', 'z'), range('0', '9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}

	function generate_random_password($length = 12)
	{
		$str                  = "";
		$characters         = array_merge(range('a', 'z'), range('0', '9'), range('~', '|'));
		$max                = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}


	function texti()
	{
		$id = "60708";
		$this->load->model('tmdb_model');
		$result = $this->tmdb_model->import_tvseries_info($id);
		var_dump($result);
	}

	function admob_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		// active menu session
		$this->session->unset_userdata('active_menu');
		$this->session->set_userdata('active_menu', '79');

		if ($param1 == 'update') :
			$admob_ads_enable = $this->input->post('admob_ads_enable');
			if ($admob_ads_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'admob_ads_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'admob_ads_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('admob_publisher_id');
			$this->db->where('title', 'admob_publisher_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('admob_app_id');
			$this->db->where('title', 'admob_app_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('admob_banner_ads_id');
			$this->db->where('title', 'admob_banner_ads_id');
			$this->db->update('config', $data);

			$data['value'] = $this->input->post('admob_interstitial_ads_id');
			$this->db->where('title', 'admob_interstitial_ads_id');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('admob_setting_change'));
			redirect($this->agent->referrer());
		endif;
		$data['page_name']  = 'admob_setting';
		$data['page_title'] = trans('admob_setting');
		$this->load->view('admin/index', $data);
	}

	function ima_ads_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		// active menu session
		$this->session->unset_userdata('active_menu');
		$this->session->set_userdata('active_menu', '80');

		if ($param1 == 'update') :
			$preroll_ads_enable = $this->input->post('preroll_ads_enable');
			if ($preroll_ads_enable == 'on') :
				$data['value'] = '1';
				$this->db->where('title', 'preroll_ads_enable');
				$this->db->update('config', $data);
			else :
				$data['value'] = '0';
				$this->db->where('title', 'preroll_ads_enable');
				$this->db->update('config', $data);
			endif;

			$data['value'] = $this->input->post('preroll_ads_product');
			$this->db->where('title', 'preroll_ads_product');
			$this->db->update('config', $data);

			$this->session->set_flashdata('success', trans('ima_ads_setting_changed'));
			redirect($this->agent->referrer());
		endif;
		$data['page_name']  = 'ima_ads_setting';
		$data['page_title'] = trans('ima_ads_setting');
		$this->load->view('admin/index', $data);
	}

	function language_setting($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		$this->load->model('language_model');
		if ($param1 == 'change_default') :
			$d = array(
				'site_lang' => $this->input->post('site_lang', true),
			);
			$lang = $this->language_model->get_language($d["site_lang"]);
			if (!empty($lang)) :
				$data['value'] = $d["site_lang"];
				$this->db->where('title', 'active_language_id');
				$this->db->update('config', $data);
			endif;
			$this->session->set_flashdata('success', trans('language_change'));
			redirect($this->agent->referrer());
		endif;

		if ($param1 == 'add_language') :
			//validate
			$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|max_length[200]');
			if ($this->form_validation->run() === false) :
				$this->session->set_flashdata('error', validation_errors());
				redirect($this->agent->referrer());
			else :
				if ($this->language_model->add_language()) :
					$this->session->set_flashdata('success', trans('language_added'));
					redirect($this->agent->referrer());
				else :
					$this->session->set_flashdata('error', trans('language_add_fail'));
					redirect($this->agent->referrer());
				endif;
			endif;
		endif;

		$data['page_name']  = 'languages';
		$data['page_title'] = trans('language_setting');
		$this->load->model('language_model');
		$data["languages"] = $this->language_model->get_languages();
		$this->load->view('admin/index', $data);
	}


	function language_edit($param1 = '', $param2 = '')
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$this->load->model('language_model');

		if ($param1 == 'update') :
			//validate
			$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|max_length[200]');
			$id = $this->input->post('id', true);
			if ($this->form_validation->run() === false) :
				$this->session->set_flashdata('error', validation_errors());
				redirect($this->agent->referrer());
			else :
				if ($this->language_model->update_language($id)) :
					$this->session->set_flashdata('success', trans('language_added'));
					redirect($this->agent->referrer());
				else :
					$this->session->set_flashdata('error', trans('language_add_fail'));
					redirect($this->agent->referrer());
				endif;
			endif;
		endif;

		$data['language'] = $this->language_model->get_language($param1);
		if (empty($data['language'])) {
			redirect($this->agent->referrer());
		}

		$data['page_name']  = 'language_edit';
		$data['page_title'] = trans('language_edit');
		$this->load->model('language_model');
		$data["languages"] = $this->language_model->get_languages();
		$this->load->view('admin/index', $data);
	}
	public function delete_language()
	{
		$response                       = array();
		$id                             = $this->input->post('id');
		if ($this->language_model->delete_language($id)) :
			$response['status']     = 'success';
			$response['message']    = trans('delete_success');
		else :
			$response['error']     = 'success';
			$response['message']    = trans('delete_fail');
		endif;

		echo json_encode($response);
	}

	public function update_phrases($id)
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');

		//get language
		$data['language'] = $this->language_model->get_language($id);

		if (empty($data['language'])) {
			redirect($this->agent->referrer());
		}
		$data["phrases"] = $this->language_model->get_phrases($data['language']->folder_name);
		$this->session->unset_userdata('phrases');
		$this->session->set_userdata("phrases", $data["phrases"]);
		$data['page_name']  = 'phrases';
		$data['page_title'] = trans('phrase_edit');
		$this->load->view('admin/index', $data);
	}

	public function save_phrases()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		$id = $this->input->post("id");
		$data['language'] = $this->language_model->get_language($id);

		if (empty($data['language'])) {
			redirect($this->agent->referrer());
		}

		$phrases = $this->input->post(array('phrase'));
		$labels = $this->input->post(array('label'));

		$this->language_model->update_language_file($data['language']->folder_name, $phrases, $labels);

		$this->session->set_flashdata('success', trans('update_success'));
		sleep(3);
		redirect($this->agent->referrer());
	}
	public function generator_sitemap()
	{
		if ($this->session->userdata('admin_is_login') != 1)
			redirect(base_url(), 'refresh');
		if ($this->common_model->generator_sitemap()) :
			$this->session->set_flashdata('success', trans('update_success'));
		else :
			$this->session->set_flashdata('error', trans('update_fail'));
		endif;
		redirect($this->agent->referrer());
	}
	public function get_single_product_details_by_id()
	{
		$response                       = array();
		$id                             = $this->input->post('products_id');
		$this->db->where('products_id', $id);
		$product                          =   $this->db->get('products')->row();
		$response['products_id']          = $product->products_id;
		$response['title']              = $product->title;
		$response['description']        = strip_tags($product->description);
		$response['thumbnail_url']      = $this->common_model->get_product_thumb_url($product->products_id);
		$response['poster_url']         = $this->common_model->get_product_poster_url($product->products_id);
		echo json_encode($response);
	}
	public function get_product_by_search_title()
	{
		$q                          = $this->input->get('q');
		$products                     = [];
		$this->db->limit(50);
		$this->db->like('title', $q, 'both');
		$products                      = $this->db->get('products')->result_array();
		foreach ($products as $product) {
			$products_id          = $product['products_id'];
			$title              = $product['title'];
			$products[]           = ["id" => $products_id, "text" => $title];
		}
		echo json_encode($products);
	}


	public function get_transaction_details()
	{
		$data = "";
		$subscription_id        = $this->input->post('subscription_id');
		$this->db->where('subscription_id', $subscription_id);
		$query                  = $this->db->get('subscription');
		if ($query->num_rows() > 0) :
			if ($this->common_model->is_json($query->first_row()->payment_info, TRUE)) :
				$payment_info   = json_decode($query->first_row()->payment_info);
				$data           = $this->common_model->jsonToTable($payment_info);
			else :
				$data = $query->first_row()->payment_info;
			endif;
		endif;
		echo $data;
	}
}

//  country
function country($param1 = '', $param2 = '')
{
	if ($this->session->userdata('admin_is_login') != 1)
		redirect(base_url(), 'refresh');
	// start menu active/inactive section
	$this->session->unset_userdata('active_menu');
	$this->session->set_userdata('active_menu', '2');
	// end menu active/inactive section

	if ($param1 == 'add') {
		$data['name']           = $this->input->post('name');
		$data['description']    = $this->input->post('description');
		$data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
		$data['publication']    = $this->input->post('publication');

		$this->db->insert('country', $data);
		if ($this->input->post('image_link') != '') {
			$image_source           =   $this->input->post('image_link');
			$save_to                =   'uploads/country/' . $insert_id . '.png';
			$this->common_model->grab_image($image_source, $save_to);
		}
		if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/country/' . $insert_id . '.png');
		}
		$this->session->set_flashdata('success', trans('add_success'));
		redirect($this->agent->referrer());
	}

	if ($param1 == 'update') {
		$data['name']           = $this->input->post('name');
		$data['description']    = $this->input->post('description');
		$data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
		$data['publication']    = $this->input->post('publication');

		$this->db->where('country_id', $param2);
		$this->db->update('country', $data);
		if ($this->input->post('image_link') != '') {
			$image_source           =   $this->input->post('image_link');
			$save_to                =   'uploads/country/' . $param2 . '.png';
			$this->common_model->grab_image($image_source, $save_to);
		}
		if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/country/' . $param2 . '.png');
		}

		$this->session->set_flashdata('success', trans('update_success'));
		redirect($this->agent->referrer());
	}
	$data['folder_name']          = 'countries';
	$data['page_name']          = 'country_manage';
	$data['page_title']         = trans('country_management');
	$data['countries']          = $this->db->get('country')->result_array();
	$this->load->view('admin/index', $data);
}
