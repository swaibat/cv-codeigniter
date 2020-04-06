<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Az extends Home_Core_Controller { 
    public function __construct(){
        parent::__construct();
        /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index($param1 = '09',$param2=''){
        // filter
        $title      = '09';
        if($param1 !="" && $param1 !=NULL){          
            $title = $param1;
        }
        $product_per_page             =   $this->db->get_where('config' , array('title'=>'product_per_page'))->row()->value;      
        $total_rows                 =   $this->common_model->get_az_Products_num_rows($title);        
        // page
        $config                     = array();
        $config["base_url"]         = base_url() . "az-list/".$title.'/page/';
        $config["total_rows"]       = $total_rows;
        $config["per_page"]         = $product_per_page;
        $config["uri_segment"]      = 4;
        $config['full_tag_open']    = '<!--pagination--><div class="paging"><div class="mt"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div></div><!--pagination-->';
        $config['first_link']       = '«';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_link']        = '»';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['next_link']        = '&rarr;';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_link']        = '&larr;';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><span>';
        $config['cur_tag_close']    = '</span></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['suffix']           = '.html'; 
        $config['use_page_numbers'] = TRUE;      

        $this->pagination->initialize($config);        
        $data['last_row_num']           = $this->uri->segment(4);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $page_offset                    = 0;
        if(is_numeric($page) && $page !="")
            $page_offset                = ($page * $product_per_page)-$product_per_page;   
        $data["all_Products"]             = $this->common_model->get_az_Products($title,$product_per_page,$page_offset);
        //var_dump($total_rows);
        //var_dump($this->db->last_query());
        $data["links"]                  = $this->pagination->create_links();
        $data['total_rows']             = $config["total_rows"];
        $data['product_per_page']         = $config["per_page"];
        $data['page_name']              = 'az';
        $data['param1']                 = $param1;
        $data['title']                  = 'All A-Z Products Directory';             
        //$this->load->view('fproducts/index', $data);
        $this->load->view('theme/'.$this->active_theme.'/index',$data);
        //var_dump($this->db->last_query());
    }

}
