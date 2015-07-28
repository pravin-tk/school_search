<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class WebFatalError {

	function setHandler()	{
		register_shutdown_function('shutdown_gracefully');
	}
}

function shutdown_gracefully() {
 	if (($error = error_get_last())) {
		$info = "[SHUTDOWN] file:".$error['file']." | ln:".$error['line']." | msg:".$error['message'] .PHP_EOL;
		$ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/error/email_notification');
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, 'info=' .$info);
	    curl_exec($ch);
	    curl_close($ch);
	}
}