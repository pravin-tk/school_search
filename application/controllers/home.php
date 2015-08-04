<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	private $api_url ="";
	public function __construct(){
		parent::__construct();
		// To use site_url and redirect on this controller.
		$this->load->helper('url');
                $this->load->helper('cookie');
                $ebd_config = parse_ini_file(APPPATH."config/EBD.ini");
                $this->api_url = $ebd_config['api_url'];
              
	}
	

    public function index() {
// 		header ( "Cache-Control: private, max-age=60" );
// 		header ( "Expires: " . gmdate ( 'r', time () + 60 ) );
// 		header ( "Content-Type: text/html" );
		
		$standard_key = 'standardlist.json';
        $top_school_key = 'topschools.json';
		$apicalls = array ($standard_key,$top_school_key);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
                        foreach($apioutput as $key => $value ){
                            if (strpos($key,$standard_key) !== false) {
                                    $this->template->set('standardlist',$value);
                            }elseif(strpos($key,$top_school_key)!== false) {
                                    $this->template->set('topschools',$value);
                            }
                        }
			$data = $apioutput;
                        
		} catch ( EBDApiException $e ) {
			echo $e->getMessage ();
			unset ( $apicalls );
			unset ( $apioutput );
		}
		$this->template->set('page','home');
		//$this->template->set ( 'standards', $data );
		$this->template->set_layout ( 'edbuddy' )
                                ->title ( 'Search for finest schools near you: Edbuddy.in' )
                                ->set_partial ( 'header', 'partials/header_home' )
                                ->set_partial ( 'footer', 'partials/footer' );
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
        $address = $this->input->post('address');
        //echo "ADDRESS =".$address;   exit;
        $this->session->set_userdata('permLink',$address);
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
            $this->template->set('permlink',$address);
            
            $this->template->set('page','search');
            $this->input->set_cookie("ebdsearchgeocode",$map['latitude'].",".$map['longitude'], 60*60*24);
            $this->input->set_cookie("ebdsearchgeoloc",$address, 60*60*24);
            $this->input->set_cookie("ebdstdid",$map['standardId'], 60*60*24);
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
        
        /**
         * Function name schoolDetails
         */
	public function schoolDetails($id)
	{
		$this->template->set('page','detail');
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )
		->set_partial ( 'header', 'partials/header_home' )
		->set_partial ( 'footer', 'partials/footer' );
		//$this->template->build ( 'school/school-detail' );
		$this->template->build ( 'school/school-details' );
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
                $schoollist ="";
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
                        $permlink =$this->session->userdata('permlink');
			$apioutput = $this->apiclient->process ( $apicalls );

			foreach($apioutput as $key => $value ){
				if (strpos($key,'schoollist.json') !== false) {
					$schoollist = $value;
				}
			}
                        $output = $this->template->set ( 'schools', $schoollist)
                                                ->set('standardId',$map['standardId'])
                                                ->set('permlink',$permlink)
                                                ->set_layout ( false )
                                                ->build ( 'partials/search','', true );
			$outputMin = $this->template->set ( 'schools', $schoollist)
                                                    ->set('standardId',$map['standardId'])
                                                    ->set('permlink',$permlink)
                                                    ->set_layout ( false )
                                                    ->build ( 'partials/search-map','', true );
                        foreach ( $apioutput as $key => $value ) 
				if (strpos ( $key, $sch_key ) !== false) 
					$data ['jsondata'] =  $value ;
                                
			$data ['html'] = $output;
			$data ['htmlmap'] = $outputMin;
			$data ['jsondata'] = $schoollist;
			$data ['status'] = 1;
		} catch ( EBDApiException $e ) {
			$data ['status'] = 0;
			$data ['data'] = $apioutput;
			unset ( $apicalls );
			unset ( $apioutput );
		}
		echo json_encode($data);
	}
	public function schoolDetail($id,$standardId) {
		//$standardId = $_COOKIE['ebdstdid'];
		$school_basic_key = 'school/basiclist.json/' . $id.'/'.$standardId;
		$school_other_key = 'school.json/' . $id;
		$standard_key = 'standardlist.json';
		
		
		$apicalls = array($school_basic_key,
						  $school_other_key,
						  $standard_key);
		
		$schoolInfo = null;
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			foreach ( $apioutput as $key => $value ) {
				if (strpos ( $key, $school_basic_key ) !== false) {
					$this->template->set ( 'basicInfo', $value );
				} elseif (strpos ( $key, $school_other_key ) !== false) {
					$this->template->set ( 'otherInfo', $value );
					$schoolInfo = $value;
                } elseif(strpos($key,$standard_key)!==false){
                    	$this->template->set('standard',$value);
                }
			}
			$this->template->set('overviewInfo',$schoolInfo['highlights']);
			$this->template->set('contactInfo',$schoolInfo['contacts']);
			$this->template->set('galleryinfo',$schoolInfo['images']);
			$this->template->set('ratingInfo',$schoolInfo['rating']);
			$this->template->set('reviewInfo',$schoolInfo['reviews']);
			$this->template->set('feeInfo',$schoolInfo['fees']);
			$this->template->set('standardId',$standardId);
			$data ['status'] = 1;
		} catch ( EBDApiException $e ) {
			$data ['status'] = 0;
			$data ['data'] = $data;
			unset ( $apicalls );
			unset ( $apioutput );
		}
		$data ['data'] = $data;
		$this->template->set('page','detail');
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )->set_partial ( 'header', 'partials/header_home' )->set_partial ( 'footer', 'partials/footer' );
		$this->template->build ( 'school/school-details' );
	}
 
	public function rateSchool() {
		$api_key = 'school/rate.json/';
		$data= $_POST;
		$apicalls = array(array('url'=>'school/rate.json', 'params'=>http_build_query($data)));
		try {
			$apioutput = $this->apiclient->process($apicalls,'POST');
	
			foreach($apioutput as $key => $value ){
				if (strpos($key,'school/rate.json') !== false) {
					$data['data'] = $value;
				}
					
			}
		}catch(EBDApiException $e) {
			echo $e->getMessage();
			unset($apicalls);
			unset($apioutput);
	
		}
		echo  json_encode($data);
	
	}
	
	public function get_vaccant_seats($schoolId,$standardId){
		$api_key = 'school/vacantseats.json/' . $schoolId.'/'.$standardId;
		$apicalls = array (
				$api_key
		);
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			foreach ( $apioutput as $key => $value ) {
				if (strpos ( $key, $api_key ) !== false) {
					$schooldata = $value;
				}
			}
			$data ['data'] = $schooldata;
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
	
  	public function getTopSchool() {
        $api_key = 'topschools.json/';
		$apicalls = array($api_key);
		try {
			$apioutput = $this->apiclient->process($apicalls);
			foreach($apioutput as $key => $value ){
				if (strpos($key,$api_key) !== false) {
					$data['data'] = $value;
				}	
			}
		}catch(EBDApiException $e) {
			echo $e->getMessage();
			unset($apicalls);
			unset($apioutput);
	
		}
		echo  json_encode($data);
        }
        
        /* getting actual location stored in our db */
//	public function get_location(){
//                header("Cache-Control: private, max-age=900");
//                header("Expires: ".gmdate('r', time()+900));
//                $map['latitude'] = trim($this->input->get('lat',TRUE));
//                $map['longitude'] = trim($this->input->get('long',TRUE));
//                $geocode = $map['latitude'].', '.$map['longitude'];
//                $geo = 'city/geolocation.json?'.http_build_query($map);
//                $apicalls = array($geo);
//                try {
//                        $apioutput = $this->apiclient->process($apicalls);
//                        $areas = $apioutput[$geo];
//                        setcookie("tkuserdefaultcity", strtolower($areas['cityname']), time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//                        setcookie("tkuserdefaultcityid", $areas['cityid'], time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//                        $this->session->set_userdata('cityid',$areas['cityid']);
//                        $this->session->set_userdata('cityname',strtolower($areas['cityname']));
//                        setcookie("geolocation", $this->input->get('location',TRUE), time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//                        setcookie("geocode", $geocode, time()+60*60*24*30, "/", parse_ini_file("/etc/php5/fpm/tastykhana.ini")['domain'], 0);
//                        $map['areaid'] = $areas['areaid'];
//                        $map['permlink'] = $areas['permlink'];
//                        $map['city_permlink'] = $areas['city_permlink'];
//                        $map['cityname'] = strtolower($areas['city_permlink']);
//                        echo json_encode($map);
//                }catch(EBDApiException $e) {
//                        $data['status'] = 1;
//                        $this->session->set_userdata('areaid',$areaid);
//                        setcookie('tksearchlocid'.lcfirst($this->uri->segment(1)), $areaid, time()+60*60*24*30, "/", ".tastykhana.in",0);;
//                        unset($apicalls);
//                        unset($apioutput);
//                }
//	}
        
        
        
        
        
        
	public function testLogin(){
		$errmsg = "";
		$url = "http://54.68.33.139:8080/edbuddy/webapi/api1.0/post/requirement.json";
		$headers = array("EBD-API-KEY: PANKY YWRtaW46YWRtaW4="); // cURL headers for file uploading
		//$postfields = array("filedata" => "@$filedata", "filename" => $filename);
		$postfields = array("name" => "shinee","mobile" =>'8490766234',"requirement" => "cccc");
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
	
	public function view360()
	{
		$this->load->view('school/pages/360.php');
		
	}
        
        public function testFence(){
            $this->template->set_layout ( 'edbuddy' )
                ->title ( 'Search for finest schools near you: Edbuddy.in' )
                ->set_partial ( 'header', 'partials/header' )
		->set_partial ( 'footer', 'partials/footer' );
		//$this->template->build ( 'school/school-detail' );
		$this->template->build ( 'school/pages/test' );
        }
	
}
