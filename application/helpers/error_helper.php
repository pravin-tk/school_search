<?php
	/* A simple delivery helper for getting preperation time
	 * temporary solution
	 * */
function custom_error( $status_code ) {
 	$method_name = 'error_'.$status_code;
    include(APPPATH.'controllers/error.php');
    $error = new Error();
    $error->$method_name(); 
}