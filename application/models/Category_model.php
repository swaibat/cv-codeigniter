<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set(app_config('timezone'));
	}
	/* clear cache*/
	function clear_cache()
	{
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}




	public function all_published_category()
	{

		return  $this->db->get_where('category', array('publication' => '1'))->result();
	}

	public function category_exist($slug)
	{
		$status = FALSE;
		$num_rows = $this->db->get_where('category', array('slug' => $slug))->num_rows();
		if ($num_rows > 0) {
			$status = TRUE;
		}
		return $status;
	}


	public function total_category_found($slug)
	{
		$category_id = $this->db->get_where('category', array('slug' => $slug))->row()->category_id;
		$this->db->where("find_in_set(" . $category_id . ",category) >", 0);
		$query = $this->db->get('Products');
		return $query->num_rows();
	}

	public function get_category_ids($name = '')
	{
		$names          = explode(',', $name);
		$ids            = '';
		$i = 0;
		foreach ($names as $name) {
			$i++;
			if ($i > 1) {
				$ids .= ',';
			}
			$ids .= $this->get_category_id_by_name($name);
		}
		return $ids;
	}


	public function get_category_id_by_name($name)
	{
		$result =   count($this->db->get_where('category', array('name' => $name))->result_array());
		if ($result >    0) {
			$category_id = $this->db->get_where('category', array('name' => $name))->row();
			return $category_id->category_id;
		} else {
			$data['name']           = $name;
			$data['description']    = $name;
			$data['slug']           = url_title($name, 'dash', TRUE);
			$data['publication']    = '1';
			$this->db->insert('category', $data);
			return $this->db->insert_id();
		}
	}

	public function get_category_name_by_id($category_id)
	{
		$result = count($this->db->get_where('category', array('category_id' => $category_id))->result_array());
		if ($result > 0) {
			return $this->db->get_where('category', array('category_id' => $category_id))->row()->name;
		} else {
			return "Unknown";
		}
	}
	public function get_category_url_by_id($category_id)
	{
		$result = $this->db->get_where('category', array('category_id' => $category_id))->num_rows();
		if ($result > 0) {
			return site_url() . 'category/' . $this->db->get_where('category', array('category_id' => $category_id))->row()->slug . '.html';
		} else {
			return "#";
		}
	}


	public function fetch_category_Product_by_slug($limit = 16, $start = 0, $slug)
	{
		$category_id   = $this->db->get_where('category', array('slug' => $slug))->row()->category_id;
		$this->db->order_by('product_id', 'DESC');
		$this->db->where("find_in_set(" . $category_id . ",category) >", 0);
		$this->db->limit($limit, $start);
		return $this->db->get('Products')->result_array();
	}


	public function fetch_category_Product_by_slug_record_count($slug)
	{
		$category_id = $this->db->get_where('category', array('slug' => $slug))->row()->category_id;
		$this->db->where("find_in_set(" . $category_id . ",category) >", 0);
		$query = $this->db->get('Products');
		return $query->num_rows();
	}

	public function get_Product_by_category_id($category_id = '', $limit = 12)
	{
		//$category_id = $this->db->get_where('category', array('slug' => $slug))->row()->category_id;
		$this->db->where("is_tvseries !=", '1');
		$this->db->where("find_in_set(" . $category_id . ",category) >", 0);
		$this->db->limit($limit);
		$this->db->order_by('product_id', "desc");
		$query = $this->db->get('Products');
		return $query->result_array();
	}

	public function get_tvseries_by_category_id($category_id = '', $limit = 12)
	{
		//$category_id = $this->db->get_where('category', array('slug' => $slug))->row()->category_id;
		$this->db->where("is_tvseries", '1');
		$this->db->where("find_in_set(" . $category_id . ",category) >", 0);
		$this->db->limit($limit);
		$this->db->order_by('product_id', "desc");
		$query = $this->db->get('Products');
		return $query->result_array();
	}

	public function generate_categorys_anchor($ids)
	{
		$result = '';
		if ($ids != '' && $ids != NULL) :
			$i = 0;
			$categorys = explode(',', $ids);
			foreach ($categorys as $category_id) :
				if ($i > 0) :
					$result .= ',';
				endif;
				$i++;
				$result .= '<a href="' . $this->category_model->get_category_url_by_id($category_id) . '">' . $this->category_model->get_category_name_by_id($category_id) . '</a>';
			endforeach;
		endif;
		return $result;
	}
}
