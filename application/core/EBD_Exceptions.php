<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EBD_Exceptions extends CI_Exceptions {
   
//    function show_404($page = '', $log_error = false)
//    {
//       $code = '404';
//       $text = 'Page not found';
     
//       $server_protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : FALSE;
//       $segments = explode('/',$_SERVER['REQUEST_URI']);
//       $file = '/var/log/404.txt';
// 	  $data = file_get_contents($file);
// 	  file_put_contents($file,$data.$_SERVER['REQUEST_URI']);
   
//       if (substr(php_sapi_name(), 0, 3) == 'cgi')
//       {
//          header("Status: {$code} {$text}", TRUE);
//       }
//       elseif ($server_protocol == 'HTTP/1.1' OR $server_protocol == 'HTTP/1.0')
//       {
//          header($server_protocol." {$code} {$text}", TRUE, $code);
//       }
//       else
//       {
//          header("HTTP/1.1 {$code} {$text}", TRUE, $code);
//       }
//       $ch = curl_init();
//       curl_setopt($ch, CURLOPT_URL, 'http://' . $_SERVER['HTTP_HOST']. '/'.$segments[1].'/error/error_404/');
//       curl_setopt($ch, CURLOPT_HEADER, 0);
//       curl_setopt($ch, CURLOPT_POST, 1);
//       curl_setopt($ch, CURLOPT_POSTFIELDS, 'originalURL=' . urlencode($_SERVER['REQUEST_URI']));
//       curl_exec($ch);
//       curl_close($ch);
//    }

 	public function show_404($page = '', $log_error = true)
    {
        $CI =& get_instance();
        header("HTTP/1.0 404 Not Found");
		$CI->template->set('title','Edbuddy.com');
		$CI->template->set('nofollow','<META NAME="ROBOTS" CONTENT="NOFOLLOW"><META NAME="ROBOTS" CONTENT="NOARCHIVE" />');
		$CI->template->set('ga_step','error=404/');
		$buffer = $CI->template
					->set_layout('tastykhana')
							->title('404 page not found | TastyKhana.in')
							->set_partial('header','partials/header')
							->set_partial('footer','partials/footer')
							->build('404',true);
		echo $buffer;
		exit;
    }
}