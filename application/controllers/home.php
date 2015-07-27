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
		
		$this->template->set ( 'standards', $data );
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )
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
                        ->set_partial('header','partials/header')
                   	->set_partial('footer','partials/footer');
       	$this->template->build('school/list');
        unset($apicalls);
        
	}
        
        /**
         * Function name schoolDetails
         */
	public function schoolDetails()
	{
		$this->template
			->set_layout('edbuddy')
			->title('Search for finest schools near you: Edbuddy.in')
			->set_partial('header','partials/header')
			->set_partial('footer','partials/footer');
		$this->template->build('school/school-details.php');
	}
        
        /**
         * Function login
         */
	public function login()
	{
		$this->load->view('search/login.php');
	}
        
        /**
         * Function logout
         */
	public function logout(){
		redirect('home/login');
	}
        
        /**
         * Function schoolContact
         */
        

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
			$data ['html'] = $output;
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
		$school_overview_key = 'school/highlight.json/' . $id;
		$school_gallery_key = 'school/gallery.json/'.$id;
		$school_rating_key = 'school/rating.json/'.$id;
		$school_review_key = 'school/review.json/'.$id;
		$school_fee_key = 'school/fee.json/'.$id;
		$standard_key = 'standardlist.json';
		
		
		$apicalls = array($school_basic_key,
						  $school_other_key,
						  $school_contact_key,
						  $school_overview_key,
				          $school_gallery_key,
				          $school_rating_key,
				          $school_review_key,
						  $school_fee_key ,
						  $standard_key);
		
		try {
			$apioutput = $this->apiclient->process ( $apicalls );
			foreach ( $apioutput as $key => $value ) {
				if (strpos ( $key, $school_basic_key ) !== false) {
					$this->template->set ( 'basicInfo', $value );
				} elseif (strpos ( $key, $school_other_key ) !== false) {
					$this->template->set ( 'otherInfo', $value );
				} elseif (strpos ( $key, $school_overview_key ) !== false) {
					$this->template->set ( 'overviewInfo', $value );
				} elseif(strpos($key,$school_contact_key)!== false) {
                        $this->template->set('contactInfo',$value);
                } elseif(strpos($key,$school_gallery_key)!==false){
                    	$this->template->set('galleryinfo',$value);
                } elseif(strpos($key,$school_rating_key)!==false){
                    	$this->template->set('ratingInfo',$value);
                } elseif(strpos($key,$school_review_key)!==false){
                    	$this->template->set('reviewInfo',$value);
                } elseif(strpos($key,$school_fee_key)!==false){
                    	$this->template->set('feeInfo',$value);
                } elseif(strpos($key,$standard_key)!==false){
                    	$this->template->set('standard',$value);
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
		$this->template->set_layout ( 'edbuddy' )->title ( 'Search for finest schools near you: Edbuddy.in' )->set_partial ( 'header', 'partials/header_home' )->set_partial ( 'footer', 'partials/footer' );
		//$this->template->build ( 'school/school-detail' );
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
        
}
