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
	
    public function index() {
		header ( "Cache-Control: private, max-age=60" );
		header ( "Expires: " . gmdate ( 'r', time () + 60 ) );
		header ( "Content-Type: text/html" );
		
		$api_key = 'standardlist.json';
		$apicalls = array (
				$api_key 
		);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			error_log ( json_encode ( $apioutput ), 0 );
			$data = $apioutput;
		} catch ( EBDApiException $e ) {
			echo $e->getMessage ();
			unset ( $apicalls );
			unset ( $apioutput );
		}
		$this->template->set('page','home');
		$this->template->set ( 'standards', $data );
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )->set_partial ( 'header', 'partials/header' )->set_partial ( 'footer', 'partials/footer' );
		$this->template->build ( 'school/ebdhome' );
		unset ( $apicalls );
	}
        /**
         * Function search
         */
	public function search()
	{
      	$map['latitude'] = $this->input->post('latitude');
        $map['longitude'] = $this->input->post('longitude');
       	$map['standardId'] = $this->input->post('standardId');
        $map['mediumId'] = $this->input->post('mediumList');
        $map['infraId'] = $this->input->post('infraList');
        $sch_key = 'schoollist.json?'.http_build_query($map);
        $filter_key =  'schoolfilter.json';
        $api_key = 'standardlist.json';
        $apicalls = array($sch_key,$filter_key,$api_key);
        try {
           	$apioutput = $this->apiclient->process($apicalls);
            foreach($apioutput as $key => $value ){
              	if (strpos($key,'schoollist.json') !== false) {
                  	$this->template->set('schoolList',$value);
                }elseif(strpos($key,'schoolfilter.json')!== false) {
                    $this->template->set('filtersList',$value);
                }elseif (strpos($key,'standardlist.json')!== false) {
                    $this->template->set('standard',$value);
                }
            }
            $this->template->set('page','search');
            $this->template->set('latitude',$map['latitude']);
            $this->template->set('longitude',$map['longitude']);
            $this->template->set('standardId',$map['standardId']);
            $this->template->set('location',$this->input->post('searchtxt'));
            unset($apicalls);
     	}catch(EBDApiException $e) {
           	unset($apicalls);
           	unset($apioutput);
      	}	
        $this->template
                   	->set_layout('edbuddy')
                   	->title('Search for finest schools near you: Edbuddy.in')
                    ->set_partial('header','partials/searchheader')
                   	->set_partial('footer','partials/footer');
       	$this->template->build('school/list');
        unset($apicalls);
	}
	public function schoolDetails()
	{
		$this->template
			->set_layout('edbuddy')
			->title('Search for finest schools near you: Edbuddy.in')
			->set_partial('header','partials/header')
			->set_partial('footer','partials/footer');
		$this->template->build('school/school-details.php');
	}

	public function login()
	{
		$this->load->view('search/login.php');
	}

	public function logout(){
		redirect('home/login');
	}
        
    public function schoolContact() {
		$this->input->post('id');
		$api_key = 'school/contact.json/' . $school_id;
		$apicalls = array (
				$api_key 
		);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			error_log ( json_encode ( $apioutput ) );
			foreach ( $apioutput as $key => $value ) {
				$data = $value;
			}
			$data ['status'] = 1;
			unset ( $apicalls );
		} catch ( EBDApiException $e ) {
			$data ['status'] = 0;
			$data ['data'] = $data;
			unset ( $apicalls );
			unset ( $apioutput );
		}
		echo json_encode ( $data );
	}
        
   	public function schoolJSON() {
   		if(!empty($this->input->post ( 'boardId' )))
			$map ['boardId'] = $this->input->post ( 'boardId' );
		if(!empty($this->input->post ( 'mediumId' )))
			$map ['mediumId'] = $this->input->post ( 'mediumId' );
		if(!empty($this->input->post ( 'typeId' )))
			$map ['typeId'] = $this->input->post ( 'typeId' );
		if(!empty($this->input->post ( 'categoryId' )))
			$map ['categoryId'] = $this->input->post ( 'categoryId' );
		if(!empty($this->input->post ( 'classificationId' )))
			$map ['classificationId'] = $this->input->post ( 'classificationId' );
		if(!empty($this->input->post ( 'infraId' )))
			$map ['infraId'] = $this->input->post ( 'infraId' );
		if(!empty($this->input->post ( 'activityId' )))
			$map ['activityId'] = $this->input->post ( 'activityId' );
		if(!empty($this->input->post ( 'safetyId' )))
			$map ['safetyId'] = $this->input->post ( 'safetyId' );
		$map ['latitude'] = $this->input->post ( 'latitude' );
		$map ['longitude'] = $this->input->post ( 'longitude' );
		if(!empty($this->input->post ( 'standardId' )))
			$map ['standardId'] = $this->input->post ( 'standardId' );
		if(!empty($this->input->post ( 'classFee' )))
			$map ['classFee'] = $this->input->post ( 'classFee' );
		if(!empty($this->input->post ( 'distance' )))
			$map ['distance'] = $this->input->post ( 'distance' );
		if(!empty($this->input->post ( 'rating' )))
			$map ['rating'] = $this->input->post ( 'rating' );
		if(!empty($this->input->post ( 'seats' )))
			$map ['seats'] = $this->input->post ( 'seats' );
		$sch_key = 'schoollist.json?' . http_build_query ( $map );
		$apicalls = array (
				$sch_key 
		);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			error_log(json_encode($apioutput),0);
// 			foreach ( $apioutput as $key => $value ) {
// 				if (strpos ( $key, 'schoollist.json' ) !== false) {
// 					$this->template->set ( 'schools', $value );
// 				}
// 			}
			$output = $this->template->set ( 'schools', $apioutput['y/webapi/api1.0/'.$sch_key] )
			 					->set('standardId',$map['standardId'])
								->set_layout ( false )
								->build ( 'partials/search','', true );
			$outputMin = $this->template->set ( 'schools', $apioutput['y/webapi/api1.0/'.$sch_key] )
				->set('standardId',$map['standardId'])
				->set_layout ( false )
				->build ( 'partials/search-map','', true );
			$data ['html'] = $output;
			$data ['htmlmap'] = $outputMin;
			$data ['jsondata'] = $apioutput['y/webapi/api1.0/'.$sch_key];
			$data ['status'] = 1;
		} catch ( EBDApiException $e ) {
			$data ['status'] = 0;
			$data ['data'] = $apioutput;
			unset ( $apicalls );
			unset ( $apioutput );
		}
		echo json_encode($data);
	}
	public function schoolDetail($id) {
		$map ['standardId'] = $id;
		$school_basic_key = 'school/basic.json/' . $id;
		$school_other_key = 'school.json/' . $id . '?' . http_build_query ( $map );
		$school_contact_key = 'school/contact.json/' . $id;
		$apicalls = array (
				$school_basic_key,
				$school_other_key,
				$school_contact_key 
		);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			foreach ( $apioutput as $key => $value ) {
				if (strpos ( $key, $school_basic_key ) !== false) {
					$this->template->set ( 'basicInfo', $value );
				} elseif (strpos ( $key, $school_other_key ) !== false) {
					$this->template->set ( 'otherInfo', $value );
				} elseif (strpos ( $key, $school_contact_key ) !== false) {
					$this->template->set ( 'contactInfo', $value );
				}
			}
			$data ['status'] = 1;
		} catch ( EBDApiException $e ) {
			$data ['status'] = 0;
			$data ['data'] = $data;
			unset ( $apicalls );
			unset ( $apioutput );
		}
		$data ['data'] = $data;
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )->set_partial ( 'header', 'partials/header' )->set_partial ( 'footer', 'partials/footer' );
		$this->template->build ( 'school/school-detail' );
	}
	
	public function testLogin(){
		$errmsg = "";
		$url = "http://54.68.33.139:8080/edbuddy/webapi/api1.0/user/forgot.json";
		$headers = array("EBD-API-KEY: PANKY YWRtaW46YWRtaW4="); // cURL headers for file uploading
		//$postfields = array("filedata" => "@$filedata", "filename" => $filename);
		$postfields = array("email" => "er.pradeep007@gmail.com");
		$postfields = http_build_query($postfields);
		$ch = curl_init();
		$options = array(
				CURLOPT_URL => $url,
				CURLOPT_HEADER => true,
				CURLOPT_POST => 1,
				CURLOPT_HTTPHEADER => $headers,
				CURLOPT_POSTFIELDS => $postfields,
				CURLOPT_RETURNTRANSFER => true
		); // cURL options
		curl_setopt_array($ch, $options);
		curl_exec($ch);
		if(!curl_errno($ch))
		{
			$info = curl_getinfo($ch);
			var_dump($info);
			if ($info['http_code'] == 200)
				$errmsg = "File uploaded successfully";
		}
		else
		{
			$errmsg = curl_error($ch);
		}
		curl_close($ch);
		echo $errmsg;
	}
	
}
