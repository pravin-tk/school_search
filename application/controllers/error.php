<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Error extends CI_Controller {

		function __construct() {
			parent::__construct();
		}

		function error_404() {
			header("HTTP/1.0 404 Not Found");
			$this->template->set('title','Edbuddy.com');
			$this->template->set('nofollow','<META NAME="ROBOTS" CONTENT="NOFOLLOW"><META NAME="ROBOTS" CONTENT="NOARCHIVE" />');
			$this->template->set('ga_step','error=404/');
			$this->template
						->set_layout('edbuddy')
								->title('404 page not found | Edbuddy.in')
								->set_partial('header','partials/header')
								->set_partial('footer','partials/footer')
								->build('404');
		}
		
		function email_notification() {
			$config = array (
				  'protocol' => 'smtp',
				'smtp_host' => 'smtp.sendgrid.net',
				'smtp_port' => 587,
				'smtp_user' => 'tastykhana',
				'smtp_pass' => 'empire@203',
                                'mailtype'  => 'html',
                                'smtp_timeout' => 30,
                                'crlf' => "\r\n",
                                'newline' => "\r\n");
				$this->load->library('email',$config);
				$this->email->from('info@edbuddy', 'Website fatal error '.date('H:i:s').' @ EdBuddy.com');
				$this->email->to('shinee.dcosta@housing.com');
				$this->email->subject('Website fatal error alert! '.date('Y-m-d'));
				$text_body  = $this->input->post('info',TRUE);
			    $this->email->message($text_body);
				$this->email->send();
		}
	}
?>