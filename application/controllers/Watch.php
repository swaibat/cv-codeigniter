<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watch extends Home_Core_Controller{
    public function index($slug='',$param1='',$param2=''){
        $error = $this->common_model->check_product_accessability($slug);
        if($error == FALSE):            
            $data['Products_id']              = $this->common_model->get_Products_id_by_slug($slug);
            $accessibility                  = $this->subscription_model->check_Product_accessibility($data['Products_id']);
            if($accessibility == "allowed"):
                $this->common_model->watch_count_by_slug($data['Products_id']);
                $data['watch_Products']           = $this->common_model->get_Products_by_slug($slug);            
                $data['download_links']         = $this->db->get_where('download_link', array("Products_id"=>$data['Products_id']))->result_array();
                $data['total_download_links']   = count($data['download_links']);
                $data['Product_files']            = $this->db->get_where('Product_file', array('Products_id'=> $data['Products_id']))->result_array();
                $data['total_Product_files']      = count($data['Product_files']);
                $data['total_episodes']         = $this->db->get_where('episodes', array('Products_id'=> $data['Products_id']))->num_rows();
                $data['slug']                   = $slug;
                $data['param1']                 = $param1;
                $data['param2']                 = $param2;
                $data['page_name']              = 'watch';
                // opengraph for social
                $data['og_title']               = !empty(trim($data['watch_Products']->seo_title)) ? $data['watch_Products']->seo_title : $data['watch_Products']->title;
                $data['og_url']                 = base_url('watch/'.$data['watch_Products']->slug.'.html');
                $data['og_description']         = !empty(trim($data['watch_Products']->meta_description)) ? strip_tags($data['watch_Products']->meta_description) : strip_tags($data['watch_Products']->description);
                $data['og_image_url']           = $this->common_model->get_Product_thumb_url($data['watch_Products']->Products_id);
                // end opengraph

                // seo
                $data['title']                  = !empty(trim($data['watch_Products']->seo_title)) ? $data['watch_Products']->seo_title : $data['watch_Products']->title;
                $data['meta_description']       = !empty(trim($data['watch_Products']->meta_description)) ? strip_tags($data['watch_Products']->meta_description) : strip_tags($data['watch_Products']->description);
                $data['focus_keyword']          = $data['watch_Products']->focus_keyword;
                $data['canonical']              = base_url('watch/'.$data['watch_Products']->slug.'.html');
                // end seo
                //$this->load->view('front_end/index', $data);
                $this->load->view('theme/'.$this->active_theme.'/index',$data);
            elseif($accessibility =="login_required"):
                $this->session->set_flashdata('login_error', 'You must login to access premium product & Tv Channel.');
                redirect(base_url() .'user/login', 'refresh');
            elseif($accessibility =="denied"):
                $this->session->set_flashdata('error', 'Please Purchase a membership to access premium products & Tv Channels.');
                redirect(base_url('subscription/upgrade'), 'refresh');
            endif;

        else:
            redirect('notfound');
        endif;
    }

}
