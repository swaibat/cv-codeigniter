<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	// CREATE A NEW POST
	function post_add()
	{
		if (isset($_POST) && !empty($_POST)) {
			$data['post_title']                 = $this->input->post('post_title');
			$data['content']                    = $this->input->post('content');
			$data['focus_keyword']              = $this->input->post('focus_keyword');
			$data['meta_description']           = $this->input->post('meta_description');
			$data['category_id']                = $this->input->post('category_id');
			$data['status']               		= $this->input->post('status');
			$data['slug']               		= $this->input->post('slug');
			$this->db->insert('posts', $data);
			$insert_id = $this->db->insert_id();
			$this->db->update('posts', $data, array('post_id' => $insert_id));
			$this->session->set_flashdata('success', trans('add_success'));
			redirect($this->agent->referrer());
		}
	}

	/** 
	 * UPDATE POST
	 * @param post_id
	 */
	function post_edit($post_id)
	{
		if (isset($_POST) && !empty($_POST)) {
			$data['post_title']                 = $this->input->post('post_title');
			$data['content']                    = $this->input->post('content');
			$data['focus_keyword']              = $this->input->post('focus_keyword');
			$data['meta_description']           = $this->input->post('meta_description');
			$data['category_id']                = $this->input->post('category_id');
			$data['status']               		= $this->input->post('status');
			$data['slug']               		= $this->input->post('slug');
			$this->db->update('posts', $data, array('post_id' => $post_id));
			$this->session->set_flashdata('success', trans('update_success'));
			redirect($this->agent->referrer());
		}
	}
}
