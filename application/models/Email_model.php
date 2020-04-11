<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set(app_config('timezone'));
	}

	function test_mail($email = NULL)
	{
		//var_dump($email,$token);
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"Test Mail";
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		$test_message = 'Email Configuration is Perfect..';
		$send_mail = $this->send_email($test_message, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($send_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function send_confirmation_to_subscriber($email = NULL)
	{
		//var_dump($email,$token);
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"Subscription successfuly";
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		//$test_message ='Subscription successfuly..';
		include(APPPATH . 'views/email_templete/send_confirmation_to_subscriber.php');
		$send_mail = $this->send_email($welcome_message, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($send_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	function account_opening_email($email = '', $password = '')
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"Welcome to " . $site_name;
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/account_opening_email.php');
		//message,subject,to,from,replay_to
		$welcome_mail = $this->send_email($welcome_message, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($welcome_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	function contact_email($name = '', $email = '', $message = '')
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email_sub 	= 	'Contact Message( ' . $email . ' )';
		$client_email_sub 	= 	'Contact Message Send';
		$admin_email_from 	=	NULL;
		$client_name 		= 	$name;
		$client_email 		= 	$email;
		$client_message 	= 	$message;
		include(APPPATH . 'views/email_templete/contact_message.php');
		//message,subject,to,from,replay_to
		$admin_mail = $this->send_email($admin_message, $admin_email_sub, $admin_email, $admin_email_from, $client_email);
		include(APPPATH . 'views/email_templete/contact_response.php');
		//message,subject,to,from,replay_to
		$client_mail = $this->send_email($client_message, $client_email_sub, $client_email, $admin_email_from, $admin_email);
		if ($admin_mail == TRUE && $client_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	function send_product_request($name = '', $email = '', $message = '', $product_name = '')
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email_sub 	= 	'Product Request ( ' . $product_name . ' )';
		$client_email_sub 	= 	'Product Request Sent';
		$product_request_email =	$this->db->get_where('config', array('title' => 'product_request_email'))->row()->value;
		$admin_email 		= 	!empty(trim($product_request_email)) ? $product_request_email : $admin_email;
		$admin_email_from 	=	NULL;
		$client_name 		= 	$name;
		$client_email 		= 	$email;
		$client_message 	= 	$message;
		include(APPPATH . 'views/email_templete/product_requiest.php');
		//message,subject,to,from,replay_to
		$admin_mail = $this->send_email($admin_message, $admin_email_sub, $admin_email, $admin_email_from, $client_email);
		// include(APPPATH.'views/email_templete/contact_response.php');
		// //message,subject,to,from,replay_to
		$client_mail  = $this->send_email($client_message, $client_email_sub, $client_email, $admin_email_from, $admin_email);
		if ($admin_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}



	function password_reset_email($email = NULL, $token = NULL)
	{
		//var_dump($email,$token);
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"Password recovery " . $site_name;
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/password_reset_email.php');
		//message,subject,to,from,replay_to

		$send_mail = $this->send_email($password_reset_message, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($send_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	function android_password_reset_email($email = '', $password = '')
	{
		//var_dump($email,$token);
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"[IMPORTANT] Password recovery - " . $site_name;
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/android_password_reset_email.php');
		//message,subject,to,from,replay_to

		$send_mail = $this->send_email($password_reset_message, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($send_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function password_reset_confirmation($email = NULL)
	{
		//var_dump($email,$token);
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$email_sub		=	"Password has changed..";
		$email_to		=	$email;
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/password_reset_confirmation.php');
		//message,subject,to,from,replay_to

		$send_mail = $this->send_email($password_reset_confirmation, $email_sub, $email_to, $admin_email_from, $admin_email);
		if ($send_mail == TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function new_product_notification($Product_id = NULL)
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$Product 				= 	$this->db->get_where('Products', array('product_id' => $Product_id))->row();
		$logo				= 	base_url('uploads/system_logo/logo.png');
		$thumb_image		= 	$this->common_model->get_Product_thumb_url($Product->product_id);
		$actor 				= 	$this->common_model->convert_star_ids_to_names($Product->stars);
		$director			= 	$this->common_model->convert_star_ids_to_names($Product->director);
		$watch_url			=	base_url() . 'watch/' . $Product->slug;
		$email_sub			=	"New Product [ " . $Product->title . " ] Waiting for You.";
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/new_product.php');

		$subscribers = $this->db->get_where('user', array('role' => 'subscriber'))->result_array();
		foreach ($subscribers as $subscriber) {
			$email_to = $subscriber['email'];
			$send_mail = $this->send_email($message, $email_sub, $email_to, $admin_email_from, $admin_email);
		}
		return TRUE;
	}

	function create_newslater_cron($Product_id = NULL)
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$Product 				= 	$this->db->get_where('Products', array('product_id' => $Product_id))->row();
		$logo				= 	base_url('uploads/system_logo/logo.png');
		$thumb_image		= 	$this->common_model->get_Product_thumb_url($Product->product_id);
		$actor 				= 	$this->common_model->convert_star_ids_to_names($Product->stars);
		$director			= 	$this->common_model->convert_star_ids_to_names($Product->director);
		$watch_url			=	base_url() . 'watch/' . $Product->slug;
		$email_sub			=	"New Product [ " . $Product->title . " ] Waiting for You.";
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/new_product.php');

		$subscribers = $this->db->get_where('user', array('role' => 'subscriber'))->result_array();
		foreach ($subscribers as $subscriber) {
			$email_to = $subscriber['email'];
			$cron_data['type'] 				= "email";
			$cron_data['action'] 			= "send";
			$cron_data['admin_email'] 		= $admin_email;
			$cron_data['admin_email_from'] 	= $admin_email_from;
			$cron_data['email_to'] 			= $email_to;
			$cron_data['email_sub'] 		= $email_sub;
			$cron_data['message'] 			= $message;
			$this->db->insert('cron', $cron_data);
		}
		return TRUE;
	}

	function send_push_notification($Product_id = NULL)
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$Product 				= 	$this->db->get_where('Products', array('product_id' => $Product_id))->row();
		$logo				= 	base_url('uploads/system_logo/logo.png');
		$thumb_image		= 	$this->common_model->get_Product_thumb_url($Product->product_id);
		$actor 				= 	$this->common_model->convert_star_ids_to_names($Product->stars);
		$director			= 	$this->common_model->convert_star_ids_to_names($Product->director);
		$watch_url			=	base_url() . 'watch/' . $Product->slug;
		$email_sub			=	"New Product [ " . $Product->title . " ] Waiting for You.";
		$admin_email_from 	=	NULL;
		include(APPPATH . 'views/email_templete/new_product.php');

		$subscribers = $this->db->get_where('user', array('role' => 'subscriber'))->result_array();
		foreach ($subscribers as $subscriber) {
			$email_to = $subscriber['email'];
			$cron_data['type'] 				= "email";
			$cron_data['action'] 			= "send";
			$cron_data['admin_email'] 		= $admin_email;
			$cron_data['admin_email_from'] 	= $admin_email_from;
			$cron_data['email_to'] 			= $email_to;
			$cron_data['email_sub'] 		= $email_sub;
			$cron_data['message'] 			= $message;
			$this->db->insert('cron', $cron_data);
			//$send_mail = $this->send_email($message , $email_sub , $email_to, $admin_email_from, $admin_email);
		}
		return TRUE;
	}



	//send_email($msg='hello', $sub='test', $to='cvcv@hdfd.com', $from=NULL, $replay_to=NULL)
	/***custom email sender****/
	function send_email($msg = '', $sub = NULL, $to = NULL, $from = NULL, $replay_to = NULL)
	{

		$config = array();
		$config['useragent']	= "CodeIgniter";
		$protocol		=	$this->db->get_where('config', array('title' => 'protocol'))->row()->value;
		if ($protocol == 'smtp') {
			$config['protocol']		= "smtp";
			$smtp_crypto			=	$this->db->get_where('config', array('title' => 'smtp_crypto'))->row()->value;
			$config['smtp_crypto']	= $smtp_crypto;
			$smtp_host				=	$this->db->get_where('config', array('title' => 'smtp_host'))->row()->value;
			$config['smtp_host']	= $smtp_host;
			$smtp_user				=	$this->db->get_where('config', array('title' => 'smtp_user'))->row()->value;
			$config['smtp_user']	= $smtp_user;
			$smtp_pass				=	$this->db->get_where('config', array('title' => 'smtp_pass'))->row()->value;
			$config['smtp_pass']	= $smtp_pass;
			$smtp_port				=	$this->db->get_where('config', array('title' => 'smtp_port'))->row()->value;
			$config['smtp_port']	= $smtp_port;
			$config['smtp_timeout']	= "30";
		} else {
			$config['protocol']		= "sendmail";
			$config['mailpath']		= "/usr/sbin/sendmail"; // or "/usr/sbin/sendmail" 
		}
		$config['mailtype']		= 'html';
		$config['charset']		= 'utf-8';
		$config['newline']		= "\r\n";
		$config['wordwrap']		= TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
		if ($sub == NULL || $sub == '')
			$sub = 'No Subject';
		if ($from == NULL)
			$from		=	$this->db->get_where('config', array('title' => 'system_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$this->email->from($from, $system_name);
		$this->email->to($to);
		if ($replay_to != NULL)
			$this->email->reply_to($replay_to);
		$this->email->subject($sub);
		$this->email->message($msg);
		if ($this->email->send()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function send_product_report_to_admin($Product_id = "", $message = array())
	{
		$site_name			=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$admin_email		=	$this->db->get_where('config', array('title' => 'contact_email'))->row()->value;
		$system_name		=	$this->db->get_where('config', array('title' => 'site_name'))->row()->value;
		$Product 				= 	$this->db->get_where('Products', array('product_id' => $Product_id))->row();
		$email_sub 			= 	'New Product Report ( ' . $Product->title . ' )';
		$email_from 		=	NULL;
		$client_name 		= 	"Abdul Mannan";
		$product_report_email	=	$this->db->get_where('config', array('title' => 'product_report_email'))->row()->value;
		$email 				= 	!empty(trim($product_report_email)) ? $product_report_email : $admin_email;
		$Product_msg 			= 	'Not Specified';
		$audio_msg 			= 	'Not Specified';
		$subtitle_msg 		= 	'Not Specified';
		$client_message		=   'Not Specified';
		$message_msg		=   'Not Specified';
		if (isset($message['Product'])) {
			$Product_msg 			= 	$message['Product'];
		}
		if (isset($message['audio'])) {
			$audio_msg 			= 	$message['audio'];
		}
		if (isset($message['subtitle'])) {
			$subtitle_msg 			= 	$message['subtitle'];
		}
		if (isset($message['message'])) {
			$message_msg 			= 	$message['message'];
		}
		include(APPPATH . 'views/email_templete/report_message.php');

		$report_mail =	$this->send_email($message, $email_sub, $email, $email_from, $admin_email);
		return true;
	}
}
