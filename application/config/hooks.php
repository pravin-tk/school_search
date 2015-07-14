<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
                                'class'    => 'Profiler',
                                'function' => 'enable_profiling',
                                'filename' => 'Profile.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );
/*$hook['post_controller_constructor'][] = array(
                                'class'    => 'Useragent',
                                'function' => 'switch_website',
                                'filename' => 'useragent.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );                                
*/
/*$hook['pre_system'][] =		 array(
							    'class'    => 'City_config',
							    'function' => 'setup_site',
							    'filename' => 'city.php',
							    'filepath' => 'hooks',
							    'params'   => array(
                                   parse_ini_file("/etc/php5/fpm/tastykhana.ini")['host'],
                                    'hobbit',
                                    'sbsd_9798',
                                    parse_ini_file("/etc/php5/fpm/tastykhana.ini")['database']
                                    )
							);*/

$hook['pre_system'][] = 	array(
							    'class'    => 'WebFatalError',
						        'function' => 'setHandler',
						        'filename' => 'WebFatalError.php',
						   	    'filepath' => 'hooks'
							);

// $hook['post_controller'] = array(
// 							   'class'  => 'SemTracker',
// 							   'function' => 'track_keyword',
// 							   'filename' => 'SemTracker.php',
// 							   'filepath' => 'hooks',
// 							   'params' => array()
// 							);	

$hook['post_controller_constructor'] = array(
								'class'  => 'Global_config',
								'function' => 'load_config',
								'filename' => 'global_config.php',
								'filepath' => 'hooks',
								'params' => array()
						);
							
/*$hook['post_controller_constructor'] = array(
                                'class'    => 'AppLogger',
                                'function' => 'request_logger',
                                'filename' => 'AppLogger.php',
                                'filepath' => 'hooks'
                            );*/							

/*$hook['pre_controller'] =   array(
							  'class'  => 'XHProf',
							  'function' => 'XHProf_Start',
							  'filename' => 'xhprof.php',
							  'filepath' => 'hooks',
							  'params' => array()
							);
 
$hook['post_controller'] = array(
							   'class'  => 'XHProf',
							   'function' => 'XHProf_End',
							   'filename' => 'xhprof.php',
							   'filepath' => 'hooks',
							   'params' => array()
							);*/							
							
/* End of file hooks.php */
/* Location: ./application/config/hooks.php */
