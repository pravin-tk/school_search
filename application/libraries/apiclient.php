<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * API client wrapper library to school api
 *
 */
require_once APPPATH."third_party/api/EBDApiClient.php";

class Apiclient
{	
	
	private $api;
// 	private $api_url = "http://54.68.33.139:8080/edbuddy/webapi/api1.0/";
        private $api_url = "http://192.168.5.116:8080/edbuddy/webapi/api1.0/";
       //private $api_url = "http://192.168.1.110:8080/edbuddy/webapi/api1.0/";
	private $userid;
	public $expire = 86400;
	private $output = array();
	private $CI;
	 
	function __construct() {
		$this->CI = get_instance();
		//$tk_config = parse_ini_file("/etc/php5/fpm/tastykhana.ini");
		//$this->api_url = $tk_config['api_url_v2'];
                $this->api_url = 'http://localhost/edbuddy-proj/';
	}
	
	public function process( $apicall, $method = 'GET', $user_name_space = null) {
		$this->api = new EBDApiClient(array($this, 'format'));
		$this->api->window_size = 20;
		switch($method) {
			case 'GET':
                                     
                                   /* cache request in redis */
                                   // $key = substr($apicall,strlen($this->api_url));
                                    foreach ($apicall as $url) 
                                    {
                                            $request = new EBDApiRequest($url);
                                            $this->api->add($request);
                                    }
                                    break;
			case 'POST':
                                    foreach ($apicall as $url) 
                                    {
                                        $request = new EBDApiRequest($url['url'],'POST', $url['params'],$url['headers']);
                                        $this->api->add($request);
                                    }
                                    break;
				
		}
                
		$this->api->execute();
		return $this->output;
	}
	
	public function format($response, $info,$request) {
		$key = substr($info['url'],strlen($this->api_url));
		$method = 'show_'.$info['http_code'];
		if(method_exists($this,$method)) 
		{
			$this->$method($key,$response,$request);
		}
	}
	
	protected function show_200($key,$response,$request) {
		if($request->method == 'GET')
		{
			//$this->CI->apicache->set(md5($key),$response); 
			$this->output[$key] = json_decode($response,true);
		}
		else 
		{
			$this->output[$key] = json_decode($response,true);
		}
	}
	
	protected function show_400($key,$response,$request) {
                $error['error'] = 400;
		if($request->method == 'GET') 
		{
			$this->output[$key] = json_decode($response,true);
		}
		else
		{
			$this->output[$key] = json_decode($response,true);
                         error_log("PANKS RESP=".$this->output[$key]);
			throw new EBDApiException($error['error']);
		}
	}
	
	protected function show_404($key,$response,$request) {
                $error['error'] = 404;
		if($request->method == 'GET') 
		{
			$this->output[$key] = json_decode($response,true);
		}
		else
		{
			$this->output[$key] = json_decode($response,true);
                        error_log("PANKS RESP=".$this->output[$key]);
			throw new EBDApiException($error['error']);
		}
	}
	
	protected function show_500($key,$response,$request) {
                $error['error'] = 500;
		if($request->method == 'GET') 
		{
			$this->output[$key] = json_decode($response,true);
		}
		else
		{
			$this->output[$key] = json_decode($response,true);
			throw new EBDApiException($error['error']);
		}
	}
	
	protected function show_0($key,$response,$request) {
                $error['error'] = 0;
		if($request->method == 'GET') 
		{
			$this->output[$key] = json_decode($response,true);
		}
		else
		{
			$this->output[$key] = json_decode($response,true);
			throw new EBDApiException($error['error']);
		}
	}
	
	public function get_output() {
		return $this->output;
	}
}
