<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		// To use site_url and redirect on this controller.
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('school/home.php');
	}
	public function search()
	{
		$this->load->view('school/list-search.php');
	}
	public function schoolDetails()
	{
		$this->load->view('school/grid-search.php');
	}
	public function grid()
	{
		$this->load->view('school/grid-search.php');
	}
	public function schoolDetailsTest()
	{
		$this->load->view('school/school-details.php');
	}

	public function schoollistTest()
	{
		$this->load->view('search/compaire.php');
	}
	public function login()
	{
		$this->load->library('facebook'); // Automatically picks appId and secret from config
		// OR
		// You can pass different one like this
		//$this->load->library('facebook', array(
		//    'appId' => 'APP_ID',
		//    'secret' => 'SECRET',
		//    ));
		$user = $this->facebook->getUser();
		
		if ($user) {
			try {
				$data['user_profile'] = $this->facebook->api('/me');
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}else {
			$this->facebook->destroySession();
		}
		if ($user) {
			$data['logout_url'] = site_url('welcome/logout'); // Logs off application
			// OR
			// Logs off FB!
			// $data['logout_url'] = $this->facebook->getLogoutUrl();
		} else {
			$data['login_url'] = $this->facebook->getLoginUrl(array(
					'redirect_uri' => site_url('welcome/login'),
					'scope' => array("email") // permissions here
			));
		}
		$this->load->view('search/login.php',$data);
		
		//$this->load->view('search/login.php');
	}
	public function read_data()
	{
		//$map['login_session'] = $this->session->userdata('loginsession');
		$map['school_id'] = 1;
		$map['city_id'] = 1;
		$map['locality_id'] = 0;
		// $sch_key = 'users/mralexgray/repos?'.http_build_query($map);
		$api_key = 'albums';
		//$api_key = "htmllist/1/1/0";
		// $api_key ="'htmllist?".http_build_query($map);
		$apicalls = array($api_key);
		try {
			$apioutput = $this->apiclient->process($apicalls);
			//                echo "hiya";
			var_dump($apioutput);
			unset($apicalls);
		}catch(SchoolApiException $e) {
			unset($apicalls);
			unset($apioutput);
		}
		$this->load->view('search/school_list.php');
	}
	public function logout(){
		$this->load->library('facebook');
		// Logs off session from website
		$this->facebook->destroySession();
		// Make sure you destory website session as well.
		redirect('welcome/login');
	}
}
