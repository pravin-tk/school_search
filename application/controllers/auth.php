<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private $api_url ="";
	public function __construct(){
		parent::__construct();
		// To use site_url and redirect on this controller.
		$this->load->helper('url');
               
                $ebd_config = parse_ini_file(APPPATH."config/EBD.ini");
                $this->api_url = $ebd_config['api_url'];
              
	}
	
        public function index() {
            
	}
        /**
         * Function search
         */
	
        public function signup() {
           // $this->template->set('standards',$data);
            $this->template
                ->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header','partials/header')
                ->set_partial('footer','partials/footer');
               // ->set_partial('breadcrumb','../partials/breadcrumb');
       
                $this->template->build('school/register');
        }
        
        public function register() {
           // $this->template->set('standards',$data);
//            error_log(json_encode($this->upload->data()));
//            error_log('files---');
//            error_log(json_encode($_FILES));
       
            $map['firstName'] = $this->input->post('firstName');
            $map['lastName'] = $this->input->post('lastName');
            $map['mobile'] = $this->input->post('mobileNo');
            $map['email'] = $this->input->post('emailId');
            $map['image'] =  '@'. $_FILES['imageFile']['tmp_name']. ';filename=' . $_FILES['imageFile']['name'];
           // $register_key = 'user/signup.json?'.http_build_query($map);
            error_log('xxxxxx');
            //error_log(json_encode($map));
            error_log(http_build_query($map));
            $apicalls = array(array('url'=>'user/signup.json', 'params'=>http_build_query($map)));
           
            try {
                $apioutput = $this->apiclient->process($apicalls,'POST');
              
                foreach($apioutput as $key => $value ){
                    if (strpos($key,'user/signup.json') !== false) {
                         $data['data'] = $value;
                    }
                      
                }
                $data['status'];
             }catch(EBDApiException $e) {
                    echo $e->getMessage();
                    unset($apicalls);
                    unset($apioutput);
                   
                }
                echo  json_encode($data);
//            $this->template
//                ->set_layout('edbuddy')
//                ->title('Search for finest schools near you: Edbuddy.in')
//                ->set_partial('header','partials/header')
//                ->set_partial('footer','partials/footer');
//               // ->set_partial('breadcrumb','../partials/breadcrumb');
//       
//                $this->template->build('school/register');
        }
}
