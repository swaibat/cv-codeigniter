<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Director extends Home_Core_Controller
{
        public function __construct()
        {
                parent::__construct();
        }

        public function index($director)
        {
                $director = str_replace("%20", " ", $director);
                $config = array();
                $config["base_url"] = base_url() . "director/" . $director;
                $config["total_rows"] = $this->common_model->get_Product_by_director_record_count($director);
                $config["per_page"] = 24;
                $config["uri_segment"] = 3;
                $config['full_tag_open'] = '<div class="pagination-container text-center"><ul class ="pagination">';
                $config['full_tag_close'] = '</ul></div><!--pagination-->';

                $config['first_link'] = '«';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';

                $config['last_link'] = '»';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';

                $config['next_link'] = '&rarr;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';

                $config['prev_link'] = '&larr;';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';

                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a><div class="pagination-hvr"></div></li>';

                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '<div class="pagination-hvr"></div></li>';

                $config['suffix'] =        '.html';

                $this->pagination->initialize($config);
                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $data["all_published_Products"] = $this->common_model->get_Product_by_director($config["per_page"], $page, $director);
                $data["links"] = $this->pagination->create_links();
                $data['total_rows'] = $config["total_rows"];
                $data['director_name'] = $director;
                $data['all_published_category'] = $this->common_model->all_published_category();
                $data['all_published_country'] = $this->common_model->all_published_country();
                $data['title'] = "Watch " . $director . "'s" . " products & TV-Series online";
                $data['page_name'] = 'director';
                $this->load->view('theme/' . $this->active_theme . '/index', $data);
        }
}
