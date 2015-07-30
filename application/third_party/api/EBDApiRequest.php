<?php 

/**
 * API Request wrapper
 *
 */

class EBDApiRequest {
    public $url = false;
    public $method = 'GET';
    public $post_data = null;
    public $headers = null;
    public $options = null;
   
   private $api_url = "http://54.68.33.139:8080/edbuddy/webapi/api1.0/";
   // private $api_url = "http://192.168.1.110:8080/edbuddy/webapi/api1.0/";
    
    /**
     * @param string $url
     * @param string $method
     * @param  $post_data
     * @param  $headers
     * @param  $options
     * @return void
     */
    function __construct($url, $method = "GET", $post_data = null, $headers = null, $options = null) {
    	//$tk_config = parse_ini_file("/etc/php5/fpm/tastykhana.ini");
    	//$this->api_url = $tk_config['api_url_v2'];
        
        $this->url = $this->api_url.$url;
        $this->method = $method;
        $this->post_data = $post_data;
        $this->headers = $headers;
        if($method == 'GET')
        {
        	$this->options = array(CURLOPT_HEADER => true);
        }
        else
        {
        	$this->options = array(CURLOPT_HEADER => true);
        }
    }

    /**
     * @return void
     */
    public function __destruct() {
        unset($this->url, $this->method, $this->post_data, $this->headers, $this->options);
    }
}
