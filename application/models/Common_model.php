<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	/* clear cache*/
	function clear_cache()
	{
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}


	function check_email_username($username = '', $email = '')
	{
		$this->db->where('email', $email);
		$this->db->or_where('username', $username);
		$rows = count($this->db->get('user')->result_array());
		if ($rows > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function check_email($email = '')
	{
		$result = FALSE;
		if ($email != '' && $email != NULL) :
			$this->db->where('email', $email);
			$rows = $this->db->get('user')->num_rows();
			if ($rows > 0) :
				$result = TRUE;
			endif;
		endif;
		return $result;
	}

	function check_token($token = '')
	{
		$this->db->where('token', $token);
		$rows = count($this->db->get('user')->result_array());
		if ($rows > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	function slug_exist($table = '', $slug = '')
	{
		$rows = count($this->db->get_where($table, array('slug' => $slug))->result_array());
		if ($rows > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function slug_num($table = '', $slug = '')
	{
		return count($this->db->get_where($table, array('slug' => $slug))->result_array());
	}

	function get_Product_type($Product_type_id = '')
	{
		$query = $this->db->get_where('Product_type', array('Product_type_id' => $Product_type_id));
		$res = $query->result_array();
		foreach ($res as $row)
			return $row['Product_type'];
	}

	function get_category_name($category_id = '')
	{
		$query = $this->db->get_where('post_category', array('post_category_id' => $category_id));
		$res = $query->result_array();
		foreach ($res as $row)
			return $row['category'];
	}

	function get_user_name($user_id)
	{
		$query = $this->db->get_where('user', array('user_id' => $user_id));
		$res = $query->result_array();
		foreach ($res as $row)
			return $row['name'];
	}

	/* get image url */
	function get_img($type = '', $id = '')
	{
		if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
			$image_url  =   base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
		else
			$image_url  =   base_url() . 'uploads/user.jpg';

		return $image_url;
	}

	function get_category_image_url($id = '')
	{
		if (file_exists('uploads/category/' . $id . '.png'))
			$image_url  =   base_url() . 'uploads/category/' . $id . '.png';
		else
			$image_url  =   base_url() . 'uploads/default_image/category.png';
		return $image_url;
	}
	function get_country_image_url($id = '')
	{
		if (file_exists('uploads/country/' . $id . '.png'))
			$image_url  =   base_url() . 'uploads/country/' . $id . '.png';
		else
			$image_url  =   base_url() . 'uploads/default_image/country.png';
		return $image_url;
	}

	/* create and download database backup*/
	function create_backup()
	{
		$this->load->dbutil();
		$options = array(
			'format'      => 'txt',
			'add_drop'    => TRUE,
			'add_insert'  => TRUE,
			'newline'     => "\n"
		);
		$tables   = array();
		$file_name  =   'db_backup_' . date('Y-m-d-H-i-s');
		$backup = $this->dbutil->backup(array_merge($options, $tables));
		$this->load->helper('file');
		write_file('db_backup/' . $file_name . '.sql', $backup);
		//$this->load->helper('download');
		//force_download($file_name.'.sql', $backup);
		return 'done';
	}


	/* restore database backup*/
	function restore_backup()
	{

		move_uploaded_file($_FILES['backup_file']['tmp_name'], 'uploads/backup.sql');

		$prefs = array(
			'filepath'                      => 'uploads/backup.sql',
			'delete_after_upload'           => TRUE,
			'delimiter'                     => ';'
		);

		$schema = htmlspecialchars(file_get_contents($prefs['filepath']));

		$query = rtrim(trim($schema), "\n;");

		$query_list = explode(";", $query);
		$this->truncate();


		foreach ($query_list as $query) {
			$this->db->query($query);
		}
		//$restore =& $this->dbutil->restore($prefs);
		unlink($prefs['filepath']);
	}

	/* empty data from table */
	function truncate()
	{
		$this->db->truncate('access');
		$this->db->truncate('accessories');
		$this->db->truncate('apps');
		$this->db->truncate('brand');
		$this->db->truncate('category');
		$this->db->truncate('computer');
		$this->db->truncate('ip');
		$this->db->truncate('device');
		$this->db->truncate('os');
		$this->db->truncate('supplier');
	}

	function set_custom_value()
	{
		$data['value'] = "SpaGreen Creative";
		$this->db->where('title', 'company_name');
		$this->db->update('config', $data);

		$data['value'] = "Gulshan, Dhaka-1200";
		$this->db->where('title', 'address');
		$this->db->update('config', $data);

		$data['value'] = "880100000000";
		$this->db->where('title', 'phone');
		$this->db->update('config', $data);

		$data['value'] = "support@spagreen.net";
		$this->db->where('title', 'system_email');
		$this->db->update('config', $data);
	}

	function reset_database()
	{
		$this->set_custom_value();
		$this->truncate();
		$prefs = array(
			'filepath'                      => 'uploads/data.sql',
			'delete_after_upload'           => FALSE,
			'delimiter'                     => ';'
		);

		$schema = htmlspecialchars(file_get_contents($prefs['filepath']));

		$query = rtrim(trim($schema), "\n;");

		$query_list = explode(";", $query);
		$this->truncate();
		foreach ($query_list as $query) {
			$this->db->query($query);
		}
		unlink($prefs['filepath']);
	}


	public function all_published_slider()
	{
		$this->db->order_by("order", "ASC");
		return $this->db->get_where('slider', array('publication' => '1'), 8)->result();
	}

	public function all_published_Products($limit = '', $page = '')
	{
		$offset = ($page * $limit) - $limit;
		if ($offset < 0) {
			$offset = 0;
		}
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit, $offset);
		return $this->db->get('Products')->result_array();
	}

	public function most_watched_Products($limit = '', $page = '')
	{
		$offset = ($page * $limit) - $limit;
		if ($offset < 0) {
			$offset = 0;
		}
		$this->db->where('publication', '1');
		$this->db->order_by("total_view", "DESC");
		$this->db->limit($limit, $offset);
		return $this->db->get('Products')->result_array();
	}


	public function get_hot_Products($limit = 12)
	{
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("total_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function get_today_hot_Products($limit = 12)
	{
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("today_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}


	public function get_weekly_hot_Products($limit = 12)
	{
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("weekly_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function get_monthly_hot_Products($limit = 12)
	{
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("monthly_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}


	public function get_top_rated_Products($limit = 12)
	{
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("total_rating", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function get_hot_tvseries($limit = 12)
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("total_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function get_today_hot_tvseries($limit = 12)
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("today_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}


	public function get_weekly_hot_tvseries($limit = 12)
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("weekly_view", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}


	public function get_top_rated_tvseries($limit = 12)
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("total_rating", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}


	public function get_features_categorys($limit = 5)
	{
		$this->db->where('featured', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("category_id", "desc");
		$this->db->limit($limit);
		return $this->db->get('category')->result_array();
	}


	public function new_published_Products($limit = '', $page = '')
	{
		$this->db->where('publication', '1');
		$this->db->where('is_tvseries', '0');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(12);
		return $this->db->get('Products')->result_array();
	}

	public function latest_published_Products($limit = 12, $page = '')
	{
		$this->db->where('publication', '1');
		$this->db->where('is_tvseries', '0');
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function new_published_tv_series($limit = '', $page = '')
	{
		$this->db->where('publication', '1');
		$this->db->where('is_tvseries', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(12);
		return $this->db->get('Products')->result_array();
	}

	public function latest_published_tv_series($limit = 16, $page = '')
	{
		$this->db->where('publication', '1');
		$this->db->where('is_tvseries', '1');
		$this->db->order_by("last_ep_added", "DESC");
		$this->db->limit($limit);
		return $this->db->get('Products')->result_array();
	}

	public function all_published_tv_series()
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("last_ep_added", "DESC");
		$this->db->limit(12);
		$query_result = $this->db->get('Products');
		$result = $query_result->result();
		return $result;
	}

	public function all_published_request_products()
	{
		$this->db->where("FIND_IN_SET(left(3,10),Product_type)>0");
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(12);
		$query_result = $this->db->get('Products');
		$result = $query_result->result();
		return $result;
	}

	public function all_page_on_primary_menu()
	{
		$this->db->where('primary_menu', '1');
		$this->db->order_by("page_id", "ASC");
		$query_result = $this->db->get('page');
		$result = $query_result->result();
		return $result;
	}

	public function all_Product_type_on_primary_menu()
	{
		$this->db->where('primary_menu', '1');
		$this->db->order_by("Product_type_id", "ASC");
		$query_result = $this->db->get('Product_type');
		$result = $query_result->result();
		return $result;
	}
	public function all_Product_type_on_footer_menu()
	{
		$this->db->where('footer_menu', '1');
		$this->db->order_by("Product_type_id", "ASC");
		$query_result = $this->db->get('Product_type');
		$result = $query_result->result();
		return $result;
	}

	public function all_page_on_footer_menu()
	{
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where('footer_menu', '1');
		$this->db->order_by("page_id", "ASC");
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function all_published_trailers()
	{
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->where('is_tvseries', '0');
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(6);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}


	public function get_Products_by_slug($slug)
	{
		return $this->db->get_where('Products', array('slug' => $slug))->row();
	}
	public function get_product_id_by_slug($slug)
	{
		return $this->db->get_where('Products', array('slug' => $slug))->row()->product_id;
	}
	public function watch_count_by_slug($product_id = '')
	{
		//$product_id          =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->product_id;
		$today_view         =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->today_view;
		$weekly_view        =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->weekly_view;
		$monthly_view       =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->monthly_view;
		$total_view         =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->total_view;

		$data['today_view'] =    $today_view +   1;
		$this->db->where('product_id', $product_id);
		$this->db->update('Products', $data);


		$data['weekly_view'] =    $weekly_view +   1;
		$this->db->where('product_id', $product_id);
		$this->db->update('Products', $data);

		$data['monthly_view'] =    $monthly_view +   1;
		$this->db->where('product_id', $product_id);
		$this->db->update('Products', $data);


		$data['total_view'] =    $total_view +   1;
		$this->db->where('product_id', $product_id);
		$this->db->update('Products', $data);
	}

	public function type_is_exist($slug)
	{
		$num_rows = $this->db->get_where('Product_type', array('slug' => $slug))->num_rows();
		if ($num_rows > 0) :
			return true;
		else :
			return false;
		endif;
	}

	public function get_star_id_by_slug($slug)
	{
		if (count($this->db->get_where('star', array('slug' => $slug))->result_array()) > 0) :
			$star_id = $this->db->get_where('star', array('slug' => $slug))->row()->star_id;
		else :
			$star_id = 0;
		endif;
		return $star_id;
	}

	public function get_Product_by_star($limit, $start, $star_id)
	{
		$data = array();
		$this->db->group_start();
		$this->db->where("FIND_IN_SET($star_id,stars)>0");
		$this->db->or_where("FIND_IN_SET($star_id,director)>0");
		$this->db->or_where("FIND_IN_SET($star_id,writer)>0");
		$this->db->group_end();
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get('Products');
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		return $data;
	}

	public function convert_star_ids_to_names($ids = '')
	{
		$names = '';
		if ($ids != '' && $ids != NULL) :
			$i = 0;
			$stars = explode(',', $ids);
			foreach ($stars as $star_id) :
				if ($i > 0) {
					$names .= ',';
				}
				$i++;
				$names .= $this->common_model->get_star_name_by_id($star_id);
			endforeach;
		endif;
		return $names;
	}

	public function get_Product_by_star_record_count($star_id)
	{
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->group_start();
		$this->db->where("FIND_IN_SET($star_id,stars)>0");
		$this->db->or_where("FIND_IN_SET($star_id,director)>0");
		$this->db->or_where("FIND_IN_SET($star_id,writer)>0");
		$this->db->group_end();
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_Product_by_director($limit, $start, $director)
	{

		$this->db->select('*');
		$this->db->from('Products');
		$this->db->like('director', $director);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(24);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return '';
	}

	public function get_Products_num_rows($array = array())
	{
		if ($array != '' && $array != NULL && !empty($array))
			$this->db->like($array);
		$query = $this->db->get('Products');
		return $query->num_rows();
	}

	public function get_Products($array = array(), $limit = NULL, $start = NULL)
	{
		if ($array != '' && $array != NULL && !empty($array))
			$this->db->like($array);
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get('Products');
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}
	}

	public function get_stars($limit = 10, $start = 0)
	{
		$this->db->order_by("star_id", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get_where('star', array('status' => '1'));
		$data = $query->result_array();
		if ($query->num_rows() > 0) {
			return $data;
		}
	}



	public function get_tvseries($limit = NULL, $start = NULL)
	{
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->where('is_tvseries', '1');
		$this->db->order_by("last_ep_added", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
	}

	public function get_Product_by_director_record_count($director)
	{
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->like('director', $director);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(24);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_Product_by_tags($limit, $start, $tags)
	{
		$this->db->like('tags', $tags);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get("Products");
		return $query->result_array();
	}

	public function get_Product_by_year($limit, $start, $year)
	{
		//$start = ($limit * $start) - $limit;
		$this->db->like('release', $year);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get("Products");
		return $query->result_array();
	}
	public function get_Product_by_year_record_count($year)
	{
		$this->db->like('release', $year);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$query = $this->db->get("Products");
		return $query->num_rows();
	}

	public function get_Product_by_tags_record_count($tag)
	{
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->like('tags', $tag);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(24);
		$query = $this->db->get();
		return $query->num_rows();
	}

	// star product import
	public function get_star_ids_for_product_import($type = '', $stars = '')
	{
		$stars          = explode(',', $stars);
		$data           = array();
		$i = 0;
		foreach ($stars as $star) {
			$data[$i]['id']      =   $this->get_star_id_by_name($type, trim($star));
			$data[$i]['text']     =   trim($star);
			$i++;
		}
		return $data;
	}

	// star
	public function get_star_ids($type = '', $stars = '')
	{
		$stars          = explode(',', $stars);
		$ids            = '';
		$i = 0;
		foreach ($stars as $star) {
			$i++;
			if ($i > 1) {
				$ids .= ',';
			}
			$ids .= $this->get_star_id_by_name($type, $star);
		}
		return $ids;
	}

	function get_star_name_by_id($star_id)
	{
		if (is_numeric($star_id) && $star_id != '') :
			$query  =   $this->db->get_where('star', array('star_id' => $star_id));
			$res    =   $query->result_array();
			foreach ($res as $row)
				return $row['star_name'];
		else :
			return $star_id;
		endif;
	}

	function get_star_slug_by_id($star_id)
	{
		$query  =   $this->db->get_where('star', array('star_id' => $star_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['slug'];
	}

	public function get_star_id_by_name($type, $name)
	{
		$name = $this->get_filtered_string($name);
		$result =   count($this->db->get_where('star', array('star_name' => $name))->result_array());
		if ($result >    0) {
			$star_id = $this->db->get_where('star', array('star_name' => $name))->row();
			return $star_id->star_id;
		} else {
			$data['slug']                   = $this->get_seo_url($name);
			$data['star_name']              = $name;
			$data['star_type']              = $type;
			$data['star_desc']              = ' ';
			$data['status']                 = '1';
			$this->db->insert('star', $data);
			return $this->db->insert_id();
		}
	}


	public function products_record_count()
	{
		$this->db->where("is_tvseries !=", "1");
		$this->db->where("publication", "1");
		$query = $this->db->get('Products');
		return $query->num_rows();
	}
	public function search_products_record_count($search = '')
	{
		$query = $this->db->like('title', $search)->get('Products');

		return $query->num_rows();
	}

	public function tv_series_record_count()
	{
		return $this->db->get_where('Products', array('is_tvseries' => '1'))->num_rows();
	}

	public function is_Product_published($product_id)
	{
		$publication                    =   $this->db->get_where('Products', array('product_id' => $product_id))->row()->publication;

		if ($publication == '1')
			return true;
		else
			return false;
	}

	public function requested_product_record_count()
	{
		$query = $this->db->where("FIND_IN_SET(left(3,10),Product_type)>0")->get('Products');
		//$query = $this->db->where('Product_type', '3')->get('Products');

		return $query->num_rows();
	}

	public function trailers_record_count()
	{
		$query = $this->db->where("FIND_IN_SET(left(4,10),Product_type)>0")->get('Products');
		//$query = $this->db->where('Product_type', '4')->get('Products');

		return $query->num_rows();
	}

	public function fetch_Products($limit, $start)
	{
		$this->db->limit($limit, $start);

		$this->db->select('*');
		$this->db->from('Products');
		//$this->db->where('Product_type', '1');
		$this->db->where("FIND_IN_SET(left(1,10),Product_type)>0");
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(24);
		$query = $this->db->get();


		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function fetch_search_Products($limit, $start, $search)
	{
		$this->db->limit($limit, $start);
		$this->db->like('title', $search);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		return $this->db->get('Products')->result_array();
	}


	public function fetch_tv_series($limit, $start)
	{
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("last_ep_added", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get("Products");
		return $query->result_array();
	}

	public function fetch_request_products($limit, $start)
	{
		$this->db->limit($limit, $start);

		$this->db->select('*');
		$this->db->from('Products');
		$this->db->where("FIND_IN_SET(left(3,10),Product_type)>0");
		//$this->db->where('Product_type', '3');
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(32);
		$query = $this->db->get();


		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function fetch_trailers($limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->where("FIND_IN_SET(left(4,10),Product_type)>0");
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(32);
		$query = $this->db->get('Products');


		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function fetch_Product_type_Product_by_slug($limit, $start, $slug)
	{
		$Product_type = $this->db->get_where('Product_type', array('slug' => $slug))->row()->Product_type_id;
		$this->db->limit($limit, $start);
		$this->db->where("find_in_set(" . $Product_type . ",Product_type) >", 0);
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");;
		$query = $this->db->get("Products");
		return $query->result_array();
	}

	public function fetch_Product_type_Product_by_slug_record_count($slug)
	{
		$Product_type = $this->db->get_where('Product_type', array('slug' => $slug))->row();
		$query = $this->db->where(array('Product_type' => $Product_type->Product_type_id))->get('Products');
		return $query->num_rows();
	}

	public function fetch_country_Product_by_slug($limit, $start, $slug)
	{
		$country_id = $this->db->get_where('country', array('slug' => $slug))->row();
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('Products');
		$this->db->where("FIND_IN_SET(left($country_id->country_id,10),country)>0");
		//$this->db->where('country', $country_id->country_id);
		//$this->db->where('Product_type', '3');
		$this->db->where('publication', '1');
		$this->db->order_by("product_id", "desc");
		$this->db->limit(24);
		$query = $this->db->get();


		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return '';
	}

	public function fetch_country_Product_by_slug_record_count($slug)
	{
		$country_id = $this->db->get_where('country', array('slug' => $slug))->row();
		$query = $this->db->where(array('country' => $country_id->country_id))->get('Products');

		return $query->num_rows();
	}


	public function fetch_blog_post($limit = 10, $page = 1)
	{
		$result = array();
		$offset = ($page * $limit) - $limit;
		if ($offset < 0) {
			$offset = 0;
		}
		$this->db->limit($limit, $offset);
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->where('publication', '1');
		$this->db->order_by("post_id", "DESC");
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->result();
		}
		return $result;
	}

	public function get_latest_post($limit)
	{
		$result = array();
		$this->db->limit($limit);
		$this->db->where('publication', '1');
		$this->db->order_by("post_id", "DESC");
		$query = $this->db->get('posts');

		if ($query->num_rows() > 0) {
			$result = $query->result_array();
		}
		return $result;
	}

	public function fetch_blog_post_record_count()
	{

		$query = $this->db->where(array('publication' => '1'))->get('posts');

		return $query->num_rows();
	}
	public function post_comments_record_count_by_id($id = '')
	{

		$query = $this->db->where(array('post_id' => $id, 'comment_type' => '1', 'publication' => '1'))->get('post_comments');

		return $query->num_rows();
	}

	public function fetch_blog_post_by_category_record_count($slug)
	{
		$category_id = $this->db->get_where('post_category', array('slug' => $slug))->row();
		$this->db->where("FIND_IN_SET(left($category_id->post_category_id,10),category_id)>0");
		$this->db->where('publication', '1');
		$query = $this->db->get('posts');
		return $query->num_rows();
	}
	public function fetch_blog_post_by_category($limit, $start, $slug)
	{
		$category_id = $this->db->get_where('post_category', array('slug' => $slug))->row();
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->where("FIND_IN_SET(left($category_id->post_category_id,10),category_id)>0");
		$this->db->where('publication', '1');
		$this->db->order_by("post_id", "desc");
		$this->db->limit(10);
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return '';
	}

	public function fetch_blog_post_by_author_record_count($slug)
	{
		$author_id = $this->db->get_where('user', array('slug' => $slug))->row();
		$this->db->where('user_id', $author_id->user_id);
		$this->db->where('publication', '1');
		$query = $this->db->get('posts');
		return $query->num_rows();
	}
	public function fetch_blog_post_by_author($limit, $start, $slug)
	{
		$author_id = $this->db->get_where('user', array('slug' => $slug))->row();
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->where('user_id', $author_id->user_id);
		$this->db->where('publication', '1');
		$this->db->order_by("post_id", "desc");
		$this->db->limit(10);
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return '';
	}

	public function search_result($search)
	{
		$this->db->like('title', $search);
		$query  =   $this->db->get('Products');
		return $query->result();
	}


	function get_image_url($type = '', $id = '')
	{
		if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
			$image_url  =   base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
		else
			$image_url  =   base_url() . 'uploads/user.jpg';

		return $image_url;
	}

	function get_Product_thumb_url($product_id = '')
	{
		if (file_exists('uploads/Product_thumb/' . $product_id . '.jpg'))
			$image_url  =   base_url() . 'uploads/Product_thumb/' . $product_id . '.jpg';
		else
			$image_url  =   "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23fff;%7D.b,.e,.g%7Bfill:none;%7D.b,.e%7Bstroke:%23e3e3e3;%7D.b%7Bstroke-dasharray:1 2;%7D.c%7Bfill:%23f7f7f7;%7D.d%7Bfill:%23e3e3e3;%7D.f%7Bstroke:none;%7D%3C/style%3E%3C/defs%3E%3Cg transform='translate(-886 -624)'%3E%3Crect class='a' width='120' height='120' transform='translate(886 624)'/%3E%3Cg transform='translate(23 123.33)'%3E%3Cg transform='translate(882 522)'%3E%3Cg class='b' transform='translate(0 16.67)'%3E%3Crect class='f' width='67' height='55'/%3E%3Crect class='g' x='0.5' y='0.5' width='66' height='54'/%3E%3C/g%3E%3Crect class='c' width='64' height='63' transform='translate(16 -0.33)'/%3E%3Cellipse class='d' cx='11' cy='10.5' rx='11' ry='10.5' transform='translate(21 9.67)'/%3E%3Crect class='a' width='25' height='23' transform='matrix(1, -0.017, 0.017, 1, 31.014, 23.2)'/%3E%3Cpath class='d' d='M11,0,22,16H0Z' transform='translate(48 30.67)'/%3E%3Cline class='e' x2='38.108' y2='0.212' transform='translate(21.5 50.17)'/%3E%3Cline class='e' x2='12' transform='translate(64.657 50.382)'/%3E%3Cline class='e' x2='27' transform='translate(21.5 54.17)'/%3E%3Cline class='e' x2='17' transform='translate(55.657 54.382)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E";

		return $image_url;
	}

	function get_Product_poster_url($product_id = '')
	{
		if (file_exists('uploads/poster_image/' . $product_id . '.jpg'))
			$image_url  =   base_url() . 'uploads/poster_image/' . $product_id . '.jpg';
		else if (file_exists('uploads/Product_thumb/' . $product_id . '.jpg'))
			$image_url  =   base_url() . 'uploads/Product_thumb/' . $product_id . '.jpg';
		else
			$image_url  =   base_url() . 'uploads/default_image/poster.jpg';
		return $image_url;
	}

	function get_Product_original_poster_url($product_id = '')
	{
		if (file_exists('uploads/poster_image/' . $product_id . '.jpg'))
			$image_url  =   base_url() . 'uploads/poster_image/' . $product_id . '.jpg';
		else
			$image_url  =   base_url() . 'uploads/default_image/poster.jpg';
		return $image_url;
	}


	function get_Product_poster_admin_url($product_id = '')
	{
		if (file_exists('uploads/poster_image/' . $product_id . '.jpg'))
			$image_url  =   base_url() . 'uploads/poster_image/' . $product_id . '.jpg';

		else
			$image_url  =   base_url() . 'uploads/default_image/poster.jpg';

		return $image_url;
	}


	function get_name_by_id($user_id)
	{
		$query  =   $this->db->get_where('user', array('user_id' => $user_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['name'];
	}



	function get_slug_by_user_id($user_id)
	{
		$query  =   $this->db->get_where('user', array('user_id' => $user_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['slug'];
	}

	function get_category_name_by_id($category_id)
	{
		$query  =   $this->db->get_where('post_category', array('post_category_id' => $category_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['category'];
	}

	function get_slug_by_category_id($category_id)
	{
		$query  =   $this->db->get_where('post_category', array('post_category_id' => $category_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['slug'];
	}

	public function post_is_exist($slug = '')
	{
		$num_rows = $this->db->get_where('posts', array('slug' => $slug))->num_rows();
		if ($num_rows > 0) :
			return true;
		else :
			return false;
		endif;
	}

	public function get_posts_by_slug($slug)
	{
		return $this->db->get_where('posts', array('slug' => $slug))->row();
	}

	public function related_posts($id = '')
	{
		$this->db->select('*');
		$this->db->from('posts');
		if ($id != '' && $id != NULL && is_numeric($id)) :
			$this->db->where("FIND_IN_SET(left($id,10),category_id)>0");
		endif;
		$this->db->where('publication', '1');
		$this->db->order_by("post_id", "desc");
		$this->db->limit(2);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	public function create_small_thumbnail($source = '', $destination = '', $width = '', $height = '')
	{
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['height']   = $height;
		$config['width'] = $width;
		$config['new_image'] = $destination; //you should have write permission here..
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	public function resize_image($source = '', $destination = '', $width = 110, $height = 110)
	{
		//$filename = $this->input->post('new_val');
		//$source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/avatar/tmp/' . $filename;
		//$target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/avatar/';
		$config_manip = array(
			'image_library' => 'gd2',
			'source_image' => $source,
			'new_image' => $destination,
			'maintain_ratio' => FALSE,
			'width' => $width,
			'height' => $height
		);
		$this->load->library('image_lib', $config_manip);
		if (!$this->image_lib->crop()) {
			echo $this->image_lib->display_errors();
		}
		// clear //
		$this->image_lib->clear();
	}

	public function get_page_details_by_slug($slug = '')
	{
		return $this->db->get_where('page', array('slug' => $slug))->row();
	}

	public function page_is_exist($slug = '')
	{
		$num_rows = $this->db->get_where('page', array('slug' => $slug))->num_rows();
		if ($num_rows > 0) :
			return true;
		else :
			return false;
		endif;
	}

	function get_Product_title_by_id($product_id)
	{
		$query  =   $this->db->get_where('Products', array('product_id' => $product_id));
		$res    =   $query->result_array();
		foreach ($res as $row)
			return $row['title'];
	}


	function escapeString($val)
	{
		$db = get_instance()->db->conn_id;
		$val = mysqli_real_escape_string($db, $val);
		return $val;
	}

	function time_ago($datetime, $full = false)
	{
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);

		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;

		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}

		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}

	public function grab_image($file_url, $save_to)
	{

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $file_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 140);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		$output = curl_exec($ch);
		$file = fopen($save_to, "w+");
		fputs($file, $output);
		fclose($file);
	}
	function get_extension($file)
	{
		$extension = explode(".", $file);
		$ext = end($extension);
		return $ext ? $ext : 'link';
	}
	function get_filtered_string($string)
	{
		$string = trim($string);
		$string = preg_replace("/[^ \w]+/", "", $string);
		return $string;
	}
	function get_seo_url($string)
	{
		//Lower case everything
		$string = strtolower($string);
		//Make alphanumeric (removes all other characters)
		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
		//Clean up multiple dashes or whitespaces
		$string = preg_replace("/[\s-]+/", " ", $string);
		//Convert whitespaces and underscore to dash
		$string = preg_replace("/[\s_]/", "-", $string);
		return $string;
	}

	function get_title_by_product_id($product_id = '')
	{
		$Product = $this->db->get_where('Products', array('product_id' => $product_id));
		if ($Product->num_rows() > 0) {
			return $Product->row()->title;
		} else {
			return 'Title Not Found';
		}
	}

	function get_srclang($language = '')
	{
		$languages = $this->db->get_where('languages_iso', array('name' => $language));
		if ($languages->num_rows() > 0) {
			return $languages->row()->iso;
		} else {
			return 'en';
		}
	}

	function get_slug_by_product_id($product_id = '')
	{
		$Product = $this->db->get_where('Products', array('product_id' => $product_id));
		if ($Product->num_rows() > 0) {
			return $Product->row()->slug;
		} else {
			return '';
		}
	}

	function get_title_by_post_id($post_id)
	{
		$total = count($this->db->get_where('posts', array('post_id' => $post_id))->result_array());
		if ($total > 0) {
			return $this->db->get_where('posts', array('post_id' => $post_id))->row()->post_title;
		} else {
			return "Not Found";
		}
	}

	function get_ads_status($unique_name = '')
	{
		return $this->db->get_where('ads', array('unique_name' => $unique_name), 1)->row()->enable;
	}

	function get_ads($unique_name = '')
	{
		$ads_content    =   '';
		$ads      =   $this->db->get_where('ads', array('unique_name' => $unique_name), 1)->row();
		if ($ads->ads_type == 'image' && $ads->enable != '0') {
			$ads_content .= "<a href='" . $ads->ads_url . "'><img src='" . $ads->ads_image_url . "'class='img-fluid'></a>";
		} else if ($ads->ads_type == 'code' && $ads->enable != '0') {
			$ads_content .= $ads->ads_code;
		}
		return $ads_content;
	}

	function get_all_ads($unique_name = '')
	{
		return $this->db->get('ads')->result_array();
	}

	function get_single_ads($ads_id = '')
	{
		return $this->db->get_where('ads', array('ads_id' => $ads_id), 1)->row();
	}

	function generate_slug($table = '', $slug = '')
	{
		$slug = url_title($slug, 'dash', TRUE);
		$rows = $this->db->get_where($table, array('slug' => $slug))->num_rows();
		if ($rows > 0) {
			$slug = $slug . '-' . $this->generate_random_string();
		}
		return $slug;
	}

	function regenerate_slug($table = '', $id = '', $slug = '')
	{
		$column_name = $table . '_id !=';
		$slug = url_title($slug, 'dash', TRUE);
		$rows = $this->db->get_where($table, array('slug' => $slug, $column_name => $id))->num_rows();
		if ($rows > 0) {
			$slug = $slug . '-' . $this->generate_random_string();
		}
		return $slug;
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

	function get_base64_code($str = "")
	{
		return base64_encode($str);
	}

	function pagination()
	{
		$config['full_tag_open']    = '<ul class ="pagination">';
		$config['full_tag_close']   = '</ul><!--pagination-->';
		$config['first_link']       = '«';
		$config['first_tag_open']   = '<li class="page-item page-link">';
		$config['first_tag_close']  = '</li>';
		$config['last_link']        = '»';
		$config['last_tag_open']    = '<li class="page-item page-link">';
		$config['last_tag_close']   = '</li>';
		$config['next_link']        = '&rarr;';
		$config['next_tag_open']    = '<li class="page-item page-link">';
		$config['next_tag_close']   = '</li>';
		$config['prev_link']        = '&larr;';
		$config['prev_tag_open']    = '<li class="page-item page-link">';
		$config['prev_tag_close']   = '</li>';
		$config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['num_tag_open']     = '<li class="page-item page-link">';
		$config['num_tag_close']    = '</li>';
		return $config;
	}

	function check_product_accessability($slug = '')
	{
		$error = FALSE;
		if ($slug != '' && $slug != NULL) :
			if ($this->product_exist($slug)) :
				$product_id          = $this->get_product_id_by_slug($slug);
				if ($this->check_product_visiability($product_id) == FALSE) :
					$error = TRUE;
				endif;
			else :
				$error = TRUE;
			endif;

		else :
			$error = TRUE;
		endif;
		return $error;
	}


	function product_exist($slug = '')
	{
		$result = FALSE;
		$rows = $this->db->get_where('Products', array('slug' => $slug))->num_rows();
		if ($rows > 0) :
			$result = TRUE;
		endif;
		return $result;
	}

	function check_product_visiability($product_id)
	{
		$result = TRUE;
		$publication = $this->db->get_where('Products', array('product_id' => $product_id))->row()->publication;
		if ($publication == '0') :
			if ($this->session->userdata('admin_is_login') != '1')
				$result = FALSE;
		endif;
		return $result;
	}

	function formatSizeUnits($bytes)
	{
		if ($bytes >= 1073741824) {
			$bytes = number_format($bytes / 1073741824, 2) . ' GB';
		} elseif ($bytes >= 1048576) {
			$bytes = number_format($bytes / 1048576, 2) . ' MB';
		} elseif ($bytes >= 1024) {
			$bytes = number_format($bytes / 1024, 2) . ' KB';
		} elseif ($bytes > 1) {
			$bytes = $bytes . ' bytes';
		} elseif ($bytes == 1) {
			$bytes = $bytes . ' byte';
		} else {
			$bytes = '0 bytes';
		}

		return $bytes;
	}

	public function verify_product_tvseries_id($id = '')
	{
		//var_dump($id);
		$result =   FALSE;
		$rows   =   $this->db->get_where('Products', array('product_id' => $id))->num_rows();
		if ($rows >    0) :
			$result =   TRUE;
		endif;
		return $result;
	}
	function get_related_product($product_id = '', $category_ids = '')
	{
		//var_dump($category_ids);
		$response   =   array();
		$this->db->where('product_id !=', $product_id);
		$this->db->where('is_tvseries !=', '1');
		$this->db->where('publication', '1');
		$this->db->limit(12);
		if ($category_ids != NULL && $category_ids != '') :
			$categorys     =   explode(',', $category_ids);
			$i          =   0;
			$this->db->group_start();
			foreach ($categorys as $category_id) :
				if ($i > 0) :
					$this->db->or_where("FIND_IN_SET($category_id,category)>0");
				else :
					$this->db->where("FIND_IN_SET($category_id,category)>0");
				endif;
				$i++;
			endforeach;
			$this->db->group_end();
		endif;
		$response     = $this->db->get('Products')->result_array();
		//var_dump($this->db->last_query());
		return $response;
	}

	function get_related_tvseries($product_id = '', $category_ids = '')
	{
		$response   =   array();
		$this->db->where('product_id !=', $product_id);
		$this->db->where('is_tvseries', '1');
		$this->db->where('publication', '1');
		$this->db->order_by("last_ep_added", "DESC");
		$this->db->limit(12);

		if ($category_ids != NULL && $category_ids != '') :
			$categorys     =   explode(',', $category_ids);
			$i          =   0;
			$this->db->group_start();
			foreach ($categorys as $category_id) :
				if ($i > 0) :
					$this->db->or_where("FIND_IN_SET($category_id,category)>0");
				else :
					$this->db->where("FIND_IN_SET($category_id,category)>0");
				endif;
				$i++;
			endforeach;
			$this->db->group_end();
		endif;
		$response     = $this->db->get('Products')->result_array();
		return $response;
	}

	public function check_cron_key($user_cron_key = '')
	{
		$result         =   FALSE;
		$cron_key       =   app_config('cron_key');
		if ($cron_key == $user_cron_key) :
			$result     =  TRUE;
		endif;
		return $result;
	}

	public function html2text($html)
	{
		require_once(__DIR__ . "/html2text/Html2Text.php");
		require_once(__DIR__ . "/html2text/Html2TextException.php");
		return Html2Text\Html2Text::convert($html);
	}

	public function generate_stars_anchor($ids)
	{
		$result = '';
		if ($ids != '' && $ids != NULL) :
			$i = 0;
			$stars = explode(',', $ids);
			foreach ($stars as $star_id) :
				if ($i > 0) :
					$result .= ',';
				endif;
				$i++;
				$result .= $this->common_model->get_star_name_by_id($star_id);
			endforeach;
		endif;
		return $result;
	}

	public function get_az_Products_num_rows($title = '')
	{
		$result = array();
		if ($title == '09') :
			for ($i = 0; $i < 10; $i++) :
				if ($i > 0) :
					$this->db->or_like('title', $i, 'after');
				else :
					$this->db->like('title', $i, 'after');
				endif;
			endfor;
		else :
			$this->db->like('title', $title, 'after');
		endif;
		$query = $this->db->get('Products');
		return $query->num_rows();
	}

	public function get_az_Products($title = '', $limit = 16, $start = 0)
	{

		$result = array();
		if ($title == '09') :
			for ($i = 0; $i < 10; $i++) :
				if ($i > 0) :
					$this->db->or_like('title', $i, 'after');
				else :
					$this->db->like('title', $i, 'after');
				endif;
			endfor;
		else :
			$this->db->like('title', $title, 'after');
		endif;
		$this->db->limit($limit, $start);
		$query = $this->db->get('Products');

		if ($query->num_rows() > 0) {
			$result = $query->result_array();
		}
		return $result;
	}

	public function get_config($title = '')
	{
		$result   = $title;
		$query  = $this->db->get_where('config', array('title' => $title));
		if ($query->num_rows() > 0) :
			$result = $query->row()->value;
		else :
			$data['title'] = $title;
			$data['value'] = $title;
			$this->db->insert('config', $data);
		endif;
		return $result;
	}
	public function get_active_theme()
	{
		$theme = 'default';
		$query  = $this->db->get_where('config', array('title' => "active_theme"));
		if ($query->num_rows() > 0) :
			$db_theme_name = $query->row()->value;
			if (is_dir(APPPATH . 'views/theme/' . $db_theme_name)) :
				$theme = $query->row()->value;
			endif;
		endif;
		return $theme;
	}

	public function generator_sitemap()
	{
		$products             = $this->db->get_where('Products', array('publication' => '1'))->result_array();
		$product_types         = $this->db->get('Product_type')->result_array();
		$pages                 = $this->db->get_where('page', array('publication' => '1'))->result_array();
		$posts                 = $this->db->get_where('posts', array('publication' => '1'))->result_array();
		$countries             = $this->db->get_where('country', array('publication' => '1'))->result_array();
		$categorys             = $this->db->get_where('category', array('publication' => '1'))->result_array();
		$blog_enable        = app_config('blog_enable');
		$landing_page_enable = app_config('landing_page_enable');

		$xml = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8' ?>\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
		// home page page
		$url = $xml->addChild('url');
		$url->addChild('loc', base_url());
		$url->addChild('priority', '1.0');
		// landing page page
		if ($landing_page_enable == '1') :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url('all-products.html'));
			$url->addChild('priority', '1.0');
		endif;

		// product page
		$url = $xml->addChild('url');
		$url->addChild('loc', base_url('products.html'));
		$url->addChild('priority', '0.9');

		// privacy page
		$url = $xml->addChild('url');
		$url->addChild('loc', base_url('privacy-policy.html'));
		$url->addChild('priority', '0.8');

		// dmca page
		$url = $xml->addChild('url');
		$url->addChild('loc', base_url('dmca.html'));
		$url->addChild('priority', '0.8');

		// contact page
		$url = $xml->addChild('url');
		$url->addChild('loc', base_url('contact-us.html'));
		$url->addChild('priority', '0.9');

		// country page
		foreach ($countries as $country) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("country/" . $country['slug'] . ".html"));
			$url->addChild('priority', '0.5');
		endforeach;


		// category page
		foreach ($categorys as $category) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("category/" . $category['slug'] . ".html"));
			$url->addChild('priority', '0.5');
		endforeach;
		//  year page
		$current_year = date("Y");
		$end_year = $current_year - 108;
		for ($i = $current_year; $i > $end_year; $i--) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("year/" . $i . ".html"));
			$url->addChild('priority', '0.5');
		endfor;

		// product page
		foreach ($products as $product) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("watch/" . $product['slug'] . ".html"));
			$url->addChild('priority', '0.9');
		endforeach;


		foreach ($product_types as $product_type) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("type/" . $product_type['slug'] . ".html"));
			$url->addChild('priority', '0.9');
		endforeach;

		foreach ($pages as $page) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("page/" . $page['slug'] . ".html"));
			$url->addChild('priority', '0.9');
		endforeach;

		foreach ($pages as $page) :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url("page/" . $page['slug'] . ".html"));
			$url->addChild('priority', '0.9');
		endforeach;

		if ($blog_enable == '1') :
			$url = $xml->addChild('url');
			$url->addChild('loc', base_url('blog.html'));
			$url->addChild('priority', '0.9');
			foreach ($posts as $post) :
				$url = $xml->addChild('url');
				$url->addChild('loc', base_url("blog/" . $post['slug'] . ".html"));
				$url->addChild('priority', '0.9');
			endforeach;
		endif;
		$this->load->helper('file');
		if (!write_file('sitemap.xml', $xml->asXML())) :
			return true;
		else :
			return true;
		endif;
	}

	// product file
	public function Product_file_order()
	{
		// season order
		$season_order   =   app_config('Product_file_order');
		if ($season_order == 'DESC') :
			$season_order = 'DESC';
		else :
			$season_order = 'ASC';
		endif;
		return $season_order;
	}
	public function get_Product_file_by_product_id($product_id = '')
	{
		$this->db->order_by('order', $this->Product_file_order());
		return $this->db->get_where('Product_file', array('product_id' => $product_id))->result_array();
	}
	public function get_first_Product_details_product_id($product_id = '')
	{
		$this->db->order_by('order', $this->Product_file_order());
		$this->db->limit(1);
		return $this->db->get_where('Product_file', array('product_id' => $product_id))->row();
	}
	public function get_single_Product_file_details_by_id($id = '')
	{
		$this->db->order_by('order', $this->Product_file_order());
		$this->db->limit(1);
		$query = $this->db->get_where('Product_file', array('Product_file_id' => $id));
		if ($query->num_rows() > 0) :
			return $this->db->get_where('Product_file', array('Product_file_id' => $id))->row();
		endif;
	}

	public function get_single_Product_file_details_by_key($key = '')
	{
		$this->db->order_by('order', $this->Product_file_order());
		$this->db->limit(1);
		$query = $this->db->get_where('Product_file', array('stream_key' => $key));
		if ($query->num_rows() > 0) :
			return $this->db->get_where('Product_file', array('stream_key' => $key))->row();
		endif;
	}

	public function get_user_name_by_id($user_id = '')
	{
		$name = 'Unknown';
		$query = $this->db->get_where('user', array('user_id' => $user_id));
		if ($query->num_rows() > 0) :
			$name = $query->row()->name;
		endif;
		return $name;
	}

	public function exchange_rate_update()
	{
		// Fetching JSON
		$req_url = 'https://api.exchangerate-api.com/v4/latest/USD';
		$response_json = file_get_contents($req_url);

		// Continuing if we got a result
		if (false !== $response_json) {

			// Try/catch for json_decode operation
			try {
				// Decoding
				$response_object = json_decode($response_json);
				$i = 0;
				foreach ((array) $response_object->rates as $key => $value) :
					$this->db->where('iso_code', $key);
					$data['exchange_rate'] = $value;
					//$data['symbol'] = $key;
					//$data['iso_code'] = $key;
					$this->db->update('currency', $data);
				//$this->db->insert('currency',$data);
				endforeach;
				echo 'process done.';

				// YOUR APPLICATION CODE HERE, e.g.
				// $base_price = 12; // Your price in USD
				// $EUR_price = round(($base_price * $response_object->rates->EUR), 2);
			} catch (Exception $e) {
				echo 'process fail!!';
				// Handle JSON parse error...
			}
		}
	}

	public function get_usd_exchange_rate($iso_code = 'USD')
	{
		$rate = 1;
		$this->db->where('iso_code', $iso_code);
		$query = $this->db->get('currency');
		if ($query->num_rows() > 0) :
			$rate = $query->first_row()->exchange_rate;
		endif;
		return $rate;
	}

	public function exchange_rate_update_by_iso_code($iso_code, $exchange_rate)
	{
		$this->db->where('iso_code', $iso_code);
		$data['exchange_rate'] = $exchange_rate;
		$this->db->update('currency', $data);
		return true;
	}

	public function jsonToTable($data)
	{
		$table = '
        <table class="table table-responsive table-bordered">
        ';
		foreach ($data as $key => $value) :
			$table .= '
            <tr valign="top">
            ';
			if (!is_numeric($key)) :
				$table .= '
                <td>
                    <strong>' . $key . ':</strong>
                </td>
                <td>
                ';
			else :
				$table .= '
                <td colspan="2">
                ';
			endif;
			if (is_object($value) || is_array($value)) :
				$table .= $this->jsonToTable($value);
			else :
				$table .= $value;
			endif;
			$table .= '
                </td>
            </tr>
            ';
		endforeach;
		$table .= '
        </table>
        ';
		return $table;
	}

	function is_json($string, $return_data = false)
	{
		$data = json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE) ? ($return_data ? $data : TRUE) : FALSE;
	}
}
