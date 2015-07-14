<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_Validation Class
 *
 * Extends Validation library
 *
 * Adds one validation rule, "unique" and accepts a
 * parameter, the name of the table and column that
 * you are checking, specified in the forum table.column
 */
class EBD_Form_validation extends CI_Form_validation {

	function __construct()	{
	    parent::__construct();
	}
	
	function recaptcha_matches()   {
        $CI =& get_instance();
        $CI->config->load('recaptcha');
        $CI->load->helper('recaptcha');
        $public_key = $CI->config->item('recaptcha_public_key');
        $private_key = $CI->config->item('recaptcha_private_key');
        $response_field = $CI->input->post('recaptcha_response_field');
        $challenge_field = $CI->input->post('recaptcha_challenge_field');
        $response = recaptcha_check_answer($private_key,
                                           $_SERVER['REMOTE_ADDR'],
                                           $challenge_field,
                                           $response_field);
        if ($response->is_valid)        {
            return TRUE;
        }
        else        {
            $CI->form_validation->recaptcha_error = $response->error;
            $CI->form_validation->set_message('recaptcha_matches', 'The %s is incorrect. Please try again.');
            return FALSE;
        }
    }

    public function kaptcha($value) {
    	$CI =& get_instance();
    	$CI->load->library('kaptcha');
        $answer = $CI->input->post('kaptcha_answer');
        if($CI->kaptcha->validate_kaptcha($value, $answer)) {
           return TRUE;
        }
        $CI->form_validation->set_message('kaptcha', 'The %s is incorrect. Please try again.');
        return FALSE;
    }
    
    public function alpha_numeric_space($str)
    {
    	$CI =& get_instance();
    	$CI->form_validation->set_message('alpha_numeric_space', 'The %s field may only contain alpha-numeric characters.');
    	if(preg_match("/^([a-z0-9\s])+$/i", $str)) {
    		return TRUE;
    	}
    	return FALSE;
    }
}
?>