<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Global_config {
	private $CI;
	private $tk_config;
	
	function load_config() {
		$this->CI = &get_instance();
                $this->CI->template->set('global_url',site_url());
                $this->CI->template->set('base_url',base_url());
                $this->CI->template->set('current_url',current_url());
                error_log('baseee=');
		//$this->tk_config = parse_ini_file("./config/EBD.ini");
		//$this->version = parse_ini_file("/etc/php5/fpm/version.ini");
//		if ( (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'com.android.browser' )
//		{
//                        error_log('globalconfig');
//			$this->initilize_config();
//		}
//		else 
//		{
//                        error_log('19xxxx');
//			
//			//$header = $this->CI->city->getHomepageHeader();
//			//$headerFromCache = $this->CI->cache->get_static('homeheader');
////			$headers = array();
////			foreach($header as $key=>$row){
////				$headers['header_url'] = $row['header_url'];
////				$headers['header_title'] = $row['header_title'];
////				$headers['header_image_path'] = $row['header_image_path'];
////			}
////			if($headers['header_image_path'] != $headerFromCache['header_image_path']){
////				$this->CI->cache->delete('homeheader');
////				$this->CI->cache->set_static('homeheader',$headers);
////			}else {
////				$headers = $this->CI->cache->get_static('homeheader');
////			}
////			$this->CI->template->set('header_image_url',$headers['header_url']);
////			$this->CI->template->set('header_image_title',$headers['header_title']);
////			$this->CI->template->set('header_image_name',$headers['header_image_path']);
//				
////			$this->CI->template->set('cdn',$this->tk_config['cdn']);
////			$this->CI->template->set('logo_cdn',$this->tk_config['cdn']);
////			$this->CI->template->set('assets',$this->tk_config['bootassets']);
//			//$this->CI->template->set('dev_cdn',$this->tk_config['dev_cdn']);
//			$this->CI->template->set('global_url',site_url());
//			$this->CI->template->set('base_url',base_url());
//			$this->CI->template->set('current_url',current_url());
//			if($this->tk_config['index_site'] == 'No')
//			{
//				$this->CI->template->set('nofollow','<META NAME="ROBOTS" CONTENT="NOFOLLOW"/><META NAME="ROBOTS" CONTENT="NOARCHIVE" /><meta http-equiv="cache-control" content="max-age=0" /><meta http-equiv="cache-control" content="no-cache" /><meta http-equiv="expires" content="0" /><meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /><meta http-equiv="pragma" content="no-cache" />');
//			}
////			$this->CI->template->set('css_version',$this->CI->cache->get_css('frontend1.0'.$this->version['version'].$this->tk_config['cachekey'].'css'));
////			$this->CI->template->set('js_version',$this->CI->cache->get_js('frontend1.0'.$this->version['version'].$this->tk_config['cachekey'].'javascript'));
////			$this->CI->template->set('version',($this->version['version']) ? $this->version['version'].'/' : '');
////			$userid = 	($this->CI->session->userdata('userID')) ? $this->CI->session->userdata('userID') : $this->CI->input->cookie('tkuserid');
////			$user_key = 'frontend/user.json?user_id='.$userid;
////			if($userid != '') {
////				$apicalls [] = $user_key;
////			}
////			try {
////				$apioutput = $this->CI->apiclient->process($apicalls);
////				$this->CI->template->set('user',$apioutput[$user_key]);
////			}catch(TastyKhanaApiException $e) {
////				unset($apicalls);
////			}
		//}
		/* mobile related */
		$this->CI->load->library('user_agent');
		if ($this->CI->agent->is_mobile()) {
			$this->CI->template->set('mobile',1);
			$ua = $_SERVER['HTTP_USER_AGENT'];
			$checker = array(
					'iphone'=>preg_match('/iPhone|iPod|iPad/', $ua),
					'blackberry'=>preg_match('/BlackBerry/', $ua),
					'android'=>preg_match('/Android/', $ua),
			);
			if($checker['blackberry']) {
				$this->CI->template->set('device','BB');
			}
		}
		if ($this->CI->agent->browser() == 'Internet Explorer') {
			$this->CI->template->set('IE',$this->CI->agent->version());
		}else {
			$this->CI->template->set('IE',40);
		}
	}
	
//	function initilize_config() {
//		$this->CI->template->set('base_url',base_url());
//// 		global $city_config_cityname;
//// 		global $city_config_cityid;
//		$this->CI->load->library('session');
//		$this->CI->load->helper('cookie');
//  		$this->CI->template->set('cityid',$_COOKIE['tkuserdefaultcityid']);
//  		$this->CI->template->set('cityname',$_COOKIE['tkuserdefaultcity']);
// 		$this->CI->template->set('d_cityname',$_COOKIE['tkuserdefaultcity']);
// 		$this->CI->session->set_userdata('cityid',$city_config_cityid);
// 		$this->CI->session->set_userdata('cityname',$city_config_cityname);
// 		setcookie("tkuserdefaultcityid", $city_config_cityid, time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
// 		setcookie("tkuserdefaultcity", $city_config_cityname, time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//		$userid = ($this->CI->session->userdata('userID')) ? $this->CI->session->userdata('userID') : $this->CI->input->cookie('tkuserid');
//		$this->CI->template->set('site_url',site_url().$_COOKIE['tkuserdefaultcity'].'/');
//		$this->CI->load->library('kaptcha');
//		$this->CI->template->set('captcha',$this->CI->kaptcha->display_kaptcha());
//		$this->CI->template->set('email',$this->CI->session->userdata('email'));
//		$this->CI->template->set('mobile',$this->CI->session->userdata('mobile'));
//		$this->CI->template->set('address',$this->CI->session->userdata('address'));
//		$this->CI->template->set('username',ucfirst($this->CI->session->userdata('username')));
//		$this->CI->template->set('userid',$userid);
//		$this->CI->template->set('cart_session',$this->CI->session->userdata('cartsession'));
//		$user_area = ($this->CI->session->userdata('areaid')) ? $this->CI->session->userdata('areaid') : $this->CI->input->cookie('tkuserlocation'.$this->CI->session->userdata('cityname'));
//		$this->CI->template->set('user_area',$user_area);
//		$this->CI->template->set('cookie_location',$this->CI->input->cookie('tksearchloc'.lcfirst($this->CI->session->userdata('cityname'))));
//		$this->CI->template->set('cookie_areaid',$this->CI->input->cookie('tksearchlocid'.lcfirst($this->CI->session->userdata('cityname'))));
//		
//		$this->CI->load->model('general/city_model','city');
//		$header = $this->CI->city->getHomepageHeader();
//		$headerFromCache = $this->CI->cache->get_static('homeheader');
//		$headers = array();
//		foreach($header as $key=>$row){
//			$headers['header_url'] = $row['header_url'];
//			$headers['header_title'] = $row['header_title'];
//			$headers['header_image_path'] = $row['header_image_path'];
//		}
//		if($headers['header_image_path'] != $headerFromCache['header_image_path']){
//			$this->CI->cache->delete('homeheader');
//			$this->CI->cache->set_static('homeheader',$headers);
//		}else {
//			$headers = $this->CI->cache->get_static('homeheader');
//		}
//			
//		$this->CI->template->set('header_image_url',$headers['header_url']);
//		$this->CI->template->set('header_image_title',$headers['header_title']);
//		$this->CI->template->set('header_image_name',$headers['header_image_path']);
//		
//		$notification = $this->CI->city->getSiteNotification();
//		
//		$this->CI->template->set('login_form',form_open(site_url().'/users/auth/login',array('id'=>'login_form','name'=>'login_form')));
//		$this->CI->template->set('forgotpwd_form',form_open(site_url().'/users/auth/forgot_password',array('id'=>'global_search_form','name'=>'global_search_form')));
//		$this->CI->template->set('signup_form',form_open(site_url().'/users/member/register',array('id'=>'signup_form','name'=>'signup_form')));
//		$this->CI->template->set('new_user_address',form_open(site_url().'/users/profile/address_add',array('id'=>'new_user_address','name'=>'new_user_address')));
//		$this->CI->template->set('new_user_contact',form_open(site_url().'/users/profile/contact_add',array('id'=>'new_user_contact','name'=>'new_user_contact')));
//		$this->CI->template->set('forgot_form',form_open(site_url().'/users/member/new_password',array('id'=>'new_user_password','name'=>'new_user_password')));
//		$this->CI->template->set('username_form',form_open(site_url().'/users/auth/forgot_username',array('id'=>'get_user_name','name'=>'get_user_name')));
//		$this->CI->template->set('activate_form',form_open(site_url().'/users/auth/partial_activation',array('id'=>'new_user_activate','name'=>'new_user_activate')));
//		$this->CI->template->set('search_from_open',form_open(site_url().'',array('id'=>'global_search_form','name'=>'global_search_form')));
//		$this->CI->template->set('payment_form',form_open(site_url().'/orders/delivery/checkout',array('id'=>'payment_form','name'=>'payment_form')));
//		$this->CI->template->set('contact_form',form_open(site_url().'/site/contact',array('id'=>'contact_form','name'=>'contact_form')));
//		$this->CI->template->set('trackorder_form',form_open(site_url().'/notifications/check_status',array('id'=>'trackorder_form','name'=>'trackorder_form')));
//		if($this->tk_config['index_site'] == 'No')
//		{
//			$this->CI->template->set('nofollow','<META NAME="ROBOTS" CONTENT="NOFOLLOW"/><META NAME="ROBOTS" CONTENT="NOARCHIVE" /><meta http-equiv="cache-control" content="max-age=0" /><meta http-equiv="cache-control" content="no-cache" /><meta http-equiv="expires" content="0" /><meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /><meta http-equiv="pragma" content="no-cache" />');
//		}
//		$this->CI->template->set('live_tracking',parse_ini_file("/etc/php5/fpm/tastykhana.ini")['tracking']);
//		$this->CI->template->set('pixel_tracking',parse_ini_file("/etc/php5/fpm/tastykhana.ini")['pixel_tracking']);
//		$this->CI->template->set('remarketing',parse_ini_file("/etc/php5/fpm/tastykhana.ini")['remarketing']);
//		$this->CI->template->set('domain',parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain']);
//	
//		$this->CI->template->set('cdn',$this->tk_config['cdn']);
//		$this->CI->template->set('logo_cdn',$this->tk_config['cdn']);
//		$this->CI->template->set('assets',$this->tk_config['bootassets']);
//		$this->CI->template->set('dev_cdn',$this->tk_config['dev_cdn']);
//		$this->CI->template->set('images',base_url());
//		$this->CI->template->set('message',$notification[0]['message']);
//		$url = ($this->CI->uri->uri_string() != '') ? $this->CI->uri->uri_string() : '/';
//		$this->CI->template->set('ga_uri',$url);
//	
//		$this->CI->load->config('city_config');
//		$suggestions = $this->CI->config->item($_COOKIE['tkuserdefaultcity'].'_location');
//		$signup_campaign = $this->CI->config->item($_COOKIE['tkuserdefaultcityid'].'_coupon_signup');
//		$new_years = $this->CI->config->item(date('Y-m-d').'_'.$_COOKIE['tkuserdefaultcityid']);
//		if($new_years) {
//			$this->CI->template->set('block_online_payments',$new_years['online_payments']);
//			$this->CI->template->set('billing_message',$new_years['menu']);
//			$this->CI->template->set('block_coupons',$new_years['coupons']);
//			$this->CI->template->set('service_guarantee',$new_years['service_guarantee']);
//		}else{
//			$this->CI->template->set('block_online_payments',0);
//			$this->CI->template->set('billing_message',0);
//			$this->CI->template->set('block_coupons',0);
//			$this->CI->template->set('service_guarantee',1);
//		}
//		
//		$this->CI->template->set('total_restaurants',$this->CI->config->item("total_restaurants"));
//		$this->CI->template->set('total_orders',$this->CI->config->item("total_orders"));
//		$this->CI->template->set('city_names',$this->CI->config->item("city_names"));
//		
//		$this->CI->template->set('coupon_signup',$signup_campaign['active']);
//		$key = array_rand($suggestions);
//		$suggestloc = $suggestions[$key];
//		unset($suggestions);
//		unset($key);
//	
//		//switch to actually include takeaway funnel in website.
//		$funnels = $this->CI->config->item($_COOKIE['tkuserdefaultcity'].'_funnels');
//		if( $funnels['takeaway'] === 1) {
//			$funnel = $this->CI->session->userdata('funnel');
//			if($funnel == '') {
//				$this->CI->session->set_userdata('funnel','delivery');
//				$this->CI->template->set('funnel',$funnel);
//			}else {
//				$this->CI->template->set('funnel',$funnel);
//			}
//			$this->CI->template->set('funnels',1);
//		}else {
//			$this->CI->session->set_userdata('funnel','delivery');
//			$this->CI->template->set('funnel','delivery');
//			$this->CI->template->set('funnels',0);
//		}
//	
//		$apicalls = array();
//		$apicalls [] = 'city.json';
//		if($_COOKIE['tkuserdefaultcityid'] != null)
//		{
//			$apicalls [] = 'city/'.$_COOKIE['tkuserdefaultcityid'].'.json';
//// 			$apicalls [] = 'city/subzones/'.$_COOKIE['tkuserdefaultcityid'].'.json';
//		}
//		$userid = 	($this->CI->session->userdata('userID')) ? $this->CI->session->userdata('userID') : $this->CI->input->cookie('tkuserid');
//		$user_key = 'frontend/user.json?user_id='.$userid;
//		if($userid != '') {
//			$apicalls [] = $user_key;
//		}
//		
//		try {
//			$apioutput = $this->CI->apiclient->process($apicalls);
//			$this->CI->template->set('user',$apioutput[$user_key]);
//			if($userid != '') 
//			{
//				setcookie("esiusername", $apioutput[$user_key]['name'], time()+60*60*24, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//				setcookie("esicity", lcfirst($apioutput[$user_key]['cityname']), time()+60*60*24, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//				setcookie("esiuserid", $apioutput[$user_key]['id'], time()+60*60*24, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//			}
//		}catch(TastyKhanaApiException $e) {
//			unset($apicalls);
//		}
//		if ($this->ssl_check()) {
//			$this->CI->template->set('ssl_global_url',str_replace('http://','https://',site_url()));
//			$this->CI->template->set('ssl_base_url',str_replace('http://','https://',base_url()));
//			$this->CI->template->set('cdn',$this->tk_config['cdn']);
//// 			$this->CI->template->set('logo_cdn','//6e259384626c6028694a-66203a3933afab3500f59dc1d1670c4e.r6.cf1.rackcdn.com/');
//			$this->CI->template->set('logo_cdn',$this->tk_config['cdn']);
//// 			$this->CI->template->set('home_images','//f6517b85b5d63540b708-d91caf00f4db2d160ad8801b5862e8dc.ssl.cf1.rackcdn.com/');
//		}else {
//			$this->CI->template->set('ssl_global_url',site_url());
//			$this->CI->template->set('ssl_base_url',base_url());
//		}
//	
//		$this->CI->template->set('global_url',site_url());
//		$this->CI->template->set('base_url',base_url());
//		$this->CI->template->set('current_url',current_url());
//		$helpline = $apioutput['city/'.$_COOKIE['tkuserdefaultcityid'].'.json'];
//		$this->CI->session->set_userdata('stdcode',$helpline[0]['stdcode']);
//		$this->CI->session->set_userdata('helpline',$helpline[0]['helpline']);
//		$this->CI->template->set('suggest_loc',$suggestloc);
//		$this->CI->template->set('city',$apioutput['city.json']);
//		$this->CI->template->set('cityarea',$apioutput['city/subzones/'.$_COOKIE['tkuserdefaultcityid'].'.json']);
//		$this->CI->template->set('helpline',$helpline[0]['helpline']);
//		$this->CI->template->set('city_latitude',$helpline[0]['latitude']);
//		$this->CI->template->set('city_longitude',$helpline[0]['longitude']);
//		$this->CI->template->set('stdcode',$helpline[0]['stdcode']);
//		$this->CI->template->set('css_version',$this->CI->cache->get_css('frontend1.0'.$this->version['version'].$this->tk_config['cachekey'].'css'));
//		$this->CI->template->set('js_version',$this->CI->cache->get_js('frontend1.0'.$this->version['version'].$this->tk_config['cachekey'].'javascript'));
//		$this->CI->template->set('version',($this->version['version']) ? $this->version['version'].'/' : '');
//		$this->CI->template->set('places_api',$this->tk_config['places_api']);
//		//$this->CI->template->set('ga_tracking',1,true);//SDA 12 June 2014 for dev ga testing
//			
//	}
//	
//	function ssl_check() {
//		$isSecure = false;
//		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
//			$isSecure = true;
//		}
//		elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
//			$isSecure = true;
//		}
//		return $isSecure;
//	}
}