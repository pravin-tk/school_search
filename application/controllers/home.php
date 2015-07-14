<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	private $api_url ="";
	public function __construct(){
		parent::__construct();
		// To use site_url and redirect on this controller.
		$this->load->helper('url');
               
                $ebd_config = parse_ini_file(APPPATH."config/EBD.ini");
                $this->api_url = $ebd_config['api_url'];
              
	}
	
//	public function index()
//	{
//            
//            $api_key = 'standardlist.json';
//            $apicalls = array($api_key);
//            try {
//                $apioutput = $this->apiclient->process($apicalls);	
//                $data = $apioutput;
//                error_log(json_encode($apioutput));
//
//                unset($apicalls);
//                }catch(EBDApiException $e) {
//                    unset($apicalls);
//                    unset($apioutput);
//                   
//                }	
//                 $data['data'] = $data;
//               //  $this->template->set('standardList',$apioutput);
//                // $this->template->build('index');
//                 
//               $this->load->view('index',$data);
//	}
        
        public function index() {
            header("Cache-Control: private, max-age=60");
            header("Expires: ".gmdate('r', time()+60));
            header("Content-Type: text/html");
            
            $api_key = 'standardlist.json';
            $apicalls = array($api_key);
            try {
                $apioutput = $this->apiclient->process($apicalls);
                error_log(json_encode($apioutput),0);
                $data = $apioutput;
               

                
                }catch(EBDApiException $e) {
                    echo $e->getMessage();
                    unset($apicalls);
                    unset($apioutput);
                   
                }	
                
        $this->template->set('standards',$data);
        $this->template
                ->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header','partials/header')
                ->set_partial('footer','partials/footer');
               // ->set_partial('breadcrumb','../partials/breadcrumb');
       
                $this->template->build('school/ebdhome');
                unset($apicalls);
	}
        /**
         * Function search
         */
	public function search()
	{
            $map['latitude'] = $this->input->post('latitude');
            $map['longitude'] = $this->input->post('longitude');
            //$address = $this->post('address');
            $map['standardId'] = $this->input->post('stdList');
            $map['mediumId'] = $this->input->post('mediumList');
            $map['infraId'] = $this->input->post('infraList');
            $map['latitude'] = "12.98642";
            $map['longitude'] = "23.97532";
            $map['standardId'] = 0;
            $sch_key = 'schoollist.json?'.http_build_query($map);
            $filter_key =  'schoolfilter.json';
            $apicalls = array($sch_key,$filter_key);
            try {
                $apioutput = $this->apiclient->process($apicalls);
              
                foreach($apioutput as $key => $value ){
                    if (strpos($key,'schoollist.json') !== false) {
                         $this->template->set('schoolList',$value);
                    }elseif(strpos($key,'schoolfilter.json')!== false) {
                         $this->template->set('filtersList',$value);
                    }
                      
                }
                $this->template->set('latitude',$map['latitude']);
                $this->template->set('longitude',$map['longitude']);
                $this->template->set('standardId',$map['standardId']);
               
                unset($apicalls);
                }catch(EBDApiException $e) {
                    unset($apicalls);
                    unset($apioutput);
                }	
                
                
                $this->template
                                ->set_layout('edbuddy')
                                ->title('Search for finest schools near you: Edbuddy.in')
                                ->set_partial('header','partials/header')
                                ->set_partial('footer','partials/footer');
               // ->set_partial('breadcrumb','../partials/breadcrumb';
                $this->template->build('school/list');
                unset($apicalls);
		//$this->load->view('search/school_list.php',$data);
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

	public function logout(){
		$this->load->library('facebook');
		// Logs off session from website
		$this->facebook->destroySession();
		// Make sure you destory website session as well.
		redirect('welcome/login');
	}
        
        public function schoolContact() {
            $school_id = 4;//$this->input->post('id');
            $api_key = 'school/contact.json/'.$school_id;
            $apicalls = array($api_key);
            try {
                $apioutput = $this->apiclient->process($apicalls);	
                //$data = $apioutput;
                error_log(json_encode($apioutput));
               
                foreach($apioutput as $key =>$value){
                    $data = $value;
                }
                 $data['status'] = 1;
                unset($apicalls);
                }catch(EBDApiException $e) {
                    $data['status'] = 0;
                    $data['data'] = $data;
                    unset($apicalls);
                    unset($apioutput);
             
                }	
                echo json_encode($data);
        }
        
        public function schoolJSON() {
//            $map['boardId'] = $this->input->post('boardId');
//            $map['mediumId'] = $this->input->post('mediumId');
//            $map['typeId'] = $this->input->post('typeId');
//            $map['categoryId'] = $this->input->post('categoryId');
//            $map['classificationId'] = $this->input->post('classificationId');
//             
//            $map['infraId'] = $this->input->post('infraId');
//            $map['activityId'] = $this->input->post('activityId');
//            $map['safetyId'] = $this->input->post('safetyId');
            
//            $map['latitude'] = $this->input->post('latitude');
//            $map['longitude'] = $this->input->post('longitude');
//            $map['standardId'] = $this->input->post('standardId');
            $map['latitude'] = "12.98642";
            $map['longitude'] = "23.97532";
            $map['standardId'] = 0;
            $sch_key = 'schoollist.json?'.http_build_query($map);
         
            $apicalls = array($sch_key);
            error_log('-------------');
            error_log($sch_key);
            try {
                $apioutput = $this->apiclient->process($apicalls);
                foreach($apioutput as $key => $value ){
                    if (strpos($key,'schoollist.json') !== false) 
                         $this->template->set('schools',$value);
                }
              
                $data['status'] = 1;
            }catch(EBDApiException $e) {
                    $data['status'] = 0;
                    $data['data'] = $apioutput;
                    unset($apicalls);
                    unset($apioutput);
            }   
            $data['html'] =  $this->template
            			 ->set_layout(false)
            			 ->build('partials/search',true);
            echo json_encode($data);
            
        }
        
       public function schoolDetail($id,$standardId) {
            $map['standardId'] = $id;
            $school_basic_key = 'school/basic.json/'.$id;
            $school_other_key = 'school.json/'.$id.'?'.http_build_query($map);
         
            $apicalls = array($school_basic_key,$school_other_key);
            error_log(json_encode($apicalls));
            try {
                $apioutput = $this->apiclient->process($apicalls);
                foreach($apioutput as $key => $value ){
                    if (strpos($key,$school_basic_key) !== false) {
                        $data['basicInfo'] = $value;
                    }elseif(strpos($key,$school_other_key)!== false) {
                         $data['otherInfo'] = $value;
                         
                    }
                      
                }
                $data['status'] = 1;
            }catch(EBDApiException $e) {
                    $data['status'] = 0;
                    $data['data'] = $data;
                    unset($apicalls);
                    unset($apioutput);
            }   
            $data['data'] = $data;
            $this->template
                                ->set_layout('edbuddy')
                                ->title('Search for finest schools near you: Edbuddy.in')
                                ->set_partial('header','partials/header')
                                ->set_partial('footer','partials/footer');
               // ->set_partial('breadcrumb','../partials/breadcrumb';
                $this->template->build('school/school-detail');
            
        }
        
}
