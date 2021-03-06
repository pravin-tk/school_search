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
            $this->template->set('userId','');
            $this->template->set_layout ( 'edbuddy' )
                            ->title ( 'Search for finest schools near you: Edbuddy.in' )
                            ->set_partial ( 'header', 'partials/header_home' )
                            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/ebdhome' );
            unset ( $apicalls );
	}
        /**
         * Function search
         */
	public function search(){
            $map['latitude'] = $this->input->post('latitude');
            $map['longitude'] = $this->input->post('longitude');
            $map['standardId'] = $this->input->post('standardId');
            $map['mediumId'] = $this->input->post('mediumList');
            $map['infraId'] = $this->input->post('infraList');
            $address = $this->input->post('address');

            if($address !=""){
                $this->session->set_userdata('permLink',$address);
                $this->input->set_cookie("ebdsearchgeocode",$map['latitude'].",".$map['longitude'], 60*60*24);
                $this->input->set_cookie("ebdsearchgeoloc",$address, 60*60*24);
            }else {
              $address =  $_COOKIE['ebdsearchgeoloc'];
            }
            if($map['latitude'] == "" || $map['longitude'] == ""){
                if(isset($_COOKIE['ebdstdid']))
                        $map['standardId'] = $_COOKIE['ebdstdid'];
                    if(isset($_COOKIE['ebdsearchgeocode']))
                        $geocode = $_COOKIE['ebdsearchgeocode'];


                    if(strpos($geocode, ",")){
                        $arrgeocode = explode(",",$geocode);
                    }

                    if(isset($arrgeocode[0]) && $arrgeocode[0] !=="")
                        $map['latitude'] = $arrgeocode[0];
                    if(isset($arrgeocode[1]) && $arrgeocode[1] !=="")
                        $map['longitude'] = $arrgeocode[1];
            }


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
                $this->template->set('userId','');
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
            $schoollist = "";
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

             if(isset($_COOKIE['ebdstdid'])&& $map ['standardId']=="")
                    $map['standardId'] = $_COOKIE['ebdstdid'];

            if($map['latitude'] == "" || $map['longitude'] == ""){
            if(isset($_COOKIE['ebdsearchgeocode']))
                $geocode = $_COOKIE['ebdsearchgeocode'];
            if(strpos($geocode, ",")){
                $arrgeocode = explode(",",$geocode);
            }
            if(isset($arrgeocode[0]) && $arrgeocode[0] !=="")
                $map['latitude'] = $arrgeocode[0];
            if(isset($arrgeocode[1]) && $arrgeocode[1] !=="")
                $map['longitude'] = $arrgeocode[1];
            }
            $sch_key = 'schoollist.json?' . http_build_query ( $map );
            $apicalls = array (
                                $sch_key 
                                );

            try {
                $permlink =$_COOKIE['ebdsearchgeoloc'];
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
        
	public function schoolDetail($id) {
            $map = array();
            $standardId ="";
            $userid ="";
            $school_rating_key ="";
            if(isset($_COOKIE['ebdstdid']))
                    $standardId = $_COOKIE['ebdstdid'];
            if(isset($_COOKIE['ebdsearchgeocode'])){
                    $geocode = $_COOKIE['ebdsearchgeocode'];
                if(strpos($geocode, ",")){
                    $arrgeocode = explode(",",$geocode);
                }
            }
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $param = $this->uri->segment(3); 
            $schoolarr = explode('-',$param);
            $schoolid = $schoolarr[count($schoolarr)-1];

            if(isset($arrgeocode[0]) && $arrgeocode[0] !=="")
                    $map['latitude'] = $arrgeocode[0];
            if(isset($arrgeocode[1]) && $arrgeocode[1] !=="")
                    $map['longitude'] = $arrgeocode[1];
                    $school_basic_key = 'school/basiclist.json/' . $schoolid.'/'.$standardId;
                    $school_other_key = 'school.json/' . $schoolid;
                    $standard_key = 'standardlist.json';
            $nearbyschool_key = 'nearbyschools.json?'.http_build_query($map);
            $school_rating_key ="xxx";
            if($userid == ""){
                $ratereview_key = 'school/rating.json/'.$schoolid;
            }else{
                $ratereview_key = 'school/ratingandreview.json/' .$schoolid."/".$userid;
                $school_rating_key = 'school/rating.json/'.$schoolid;
            }
                    $apicalls = array(
                            $school_basic_key,
                            $school_other_key,
                            $standard_key,
                            $nearbyschool_key,
                            $ratereview_key,
                            $school_rating_key
            );
                $schoolInfo = null;
                try {
                        $apioutput = $this->apiclient->process ( $apicalls );
                foreach ( $apioutput as $key => $value ) {
                if (strpos($key,'basiclist.json') !== false) {
                        $this->template->set ( 'basicInfo', $value );
                } elseif (strpos($key,$school_other_key) !== false) {
                        $this->template->set ('otherInfo', $value);
                    $schoolInfo = $value;
                } elseif (strpos($key,$standard_key) !==false){
                    $this->template->set('standard',$value);
                } elseif (strpos($key,$nearbyschool_key) !==false){
                    $this->template->set('nearbySchool',$value);
                } elseif (strpos($key,$ratereview_key) !==false){
                        if($userid == ""){ 
                        $this->template->set('userRatingInfo',$value);
                    }else{
                        $this->template->set('userRatingInfo',$value['ratings']);
                        }
                    $this->template->set('userReviewInfo',$value);
//                    echo "<pre>";
//                    print_r($value);exit;
                } elseif (strpos($key,$school_rating_key) !==false && $userid <> ""){
                    $this->template->set('schoolRatingInfo',$value);
                }
                        }
                if(isset($schoolInfo['highlights']))
                    $this->template->set('overviewInfo',$schoolInfo['highlights']);
                if(isset($schoolInfo['contacts']))
                    $this->template->set('contactInfo',$schoolInfo['contacts']);
                if(isset($schoolInfo['images']))
                    $this->template->set('galleryinfo',$schoolInfo['images']);
                if(isset($schoolInfo['rating']))
                    $this->template->set('ratingInfo',$schoolInfo['rating']);
                if(isset($schoolInfo['ratingsAndReviews']))
                    $this->template->set('reviewInfo',$schoolInfo['ratingsAndReviews']);
                if(isset($schoolInfo['fees']))
                    $this->template->set('feeInfo',$schoolInfo['fees']);
                    if(isset($standardId))
                    $this->template->set('standardId',$standardId);
                if(isset($schoolid))
                $this->template->set('schId',$schoolid);
                        $data ['status'] = 1;
                } catch ( EBDApiException $e ) {
                        $data ['status'] = 0;
                        $data ['data'] = $data;
                        unset ( $apicalls );
                        unset ( $apioutput );
                }
                $data ['data'] = $data;
/**/
                $xml="<krpano onstart='wait(0);start();' >\n\t\t";
                $xml .="<include url='vtourskin.xml' />\n";
                $xml .="<skin_settings maps='true' ";
// 	            $xml .="maps_type='bing'";
// 	             $xml .="maps_bing_api_key=''";
// 	            $xml .="maps_zoombuttons='false'";
// 	             $xml .="gyro='true'";
// 	              $xml .=" title='true'";
// 	             $xml .="thumbs='true'";
// 	              $xml .="thumbs_width='120' thumbs_height='80' thumbs_padding='10' thumbs_crop='0|40|240|160'";
// 	              $xml .="thumbs_opened='true'";
// 	              $xml .="thumbs_text='true'";
// 	              $xml .=" thumbs_dragging='true'";
// 	               $xml .="thumbs_onhoverscrolling='false'";
// 	               $xml .="thumbs_scrollbuttons='true'";
// 	               $xml .="thumbs_scrollindicator='true'";
// 	               $xml .="thumbs_loop='true'";
// 	              $xml .="tooltips_thumbs='false'";
// 	               $xml .="tooltips_hotspots='true'";
// 	                $xml .="tooltips_mapspots='false'";
// 	                $xml .="loadscene_flags='MERGE'";
// 	               $xml .="loadscene_blend='BLEND(0.5)'";
	               $xml .="controlbar_offset='20'/>";
				 $xml .="\n<events name='backbutton_adjust' onxmlcomplete='if(layer[backbutton], set(layer[backbutton].y,60));' />";
				 $xml .="\n<textstyle name='infostyle' origin='top' edge='top' yoffset='20' textalign='center' background='false' border='false'  fontsize='40' textcolor='0xFFFFFF' bold='false' effect='glow(0xFFFFFF,0.7,4,2);glow(0x000000,1,4,2);dropshadow(3,45,0x000000,2,0.6);' showtime='1.0' fadetime='1.0'/>";
				 $xml .="\n<action name='start' > loadscene(scene_1, null, MERGE); update_button_states();</action>";
                
                 for($i=0; $i<count($schoolInfo['panorama']);$i++)
                {
                	$xml .= "\n<scene name='scene_".$i. "' title='seminar_b' onstart='' thumburl='panos/Music_Room_Panorama.tiles/thumb.jpg' lat='' lng='' heading='seminar hall'>";
                	$xml .= "\n<view hlookat='0' vlookat='0' fovtype='MFOV' fov='120' maxpixelzoom='2.0' fovmin='70' fovmax='140' limitview='auto' />";
                	$xml .="\n<preview url='panos/Music_Room_Panorama.tiles/preview.jpg' />";
                	$xml .="\n<image>";
                	$xml .="\n<sphere url='".$schoolInfo['panorama'][$i]['panoImage']."' />";
                	$xml .="\n<mobile>";
                	$xml .= "\n<cube url='panos/seminar_b.tiles/mobile_%s.jpg' />";
                	$xml .="\n</mobile>";
                	$xml .="\n</image>";
                	$xml .="\n</scene>";
                }
                $xml.="</krpano>\n\r";
                $xmlobj=new SimpleXMLElement($xml);
                $new = fopen($_SERVER['DOCUMENT_ROOT']."/edbuddy-proj/assets/js/media/".$schoolid.".xml", "w"); // open new file
                fwrite($new, $xmlobj->asXML()); //write XML to new file using asXML method
                fclose($new);

                $this->template->set('userId',$userid);
                $this->template->set('page','detail');
                $this->template->set_layout ( 'edbuddy' )
                        ->title ( 'Search for finest schools near you: Edbuddy.in' )
                        ->set_partial ( 'header', 'partials/header_home' )
                        ->set_partial ( 'footer', 'partials/footer' );
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
	public function getLocation(){
            $map['latitude'] = trim($this->input->post('lat',TRUE));
            $map['longitude'] = trim($this->input->post('lng',TRUE));
            $map['standard'] = trim($this->input->post('std',TRUE));
            $geocode = $map['latitude'].', '.$map['longitude'];
            $permlink_key = 'geturi.json/'.$map['latitude'].'/'.$map['longitude'].'/'.$map['standard'];
            $apicalls = array($permlink_key);
            try {
                    $apioutput = $this->apiclient->process($apicalls);
                foreach($apioutput as $key => $value ){
                    if (strpos($key,$permlink_key) !== false) {
                                $data = $value;
                    }	
                            }
                echo json_encode($data );
            }catch(EBDApiException $e) {
                $data['status'] = 1;
                $this->session->set_userdata('areaid',$areaid);
                setcookie('tksearchlocid'.lcfirst($this->uri->segment(1)), $areaid, time()+60*60*24*30, "/", ".tastykhana.in",0);;
                unset($apicalls);
                unset($apioutput);
            }
	}
	
	public function view360()
	{
		$this->load->view('school/pages/360.php');
	}
	
	public function listSchool()
	{
		$this->template->set('page','requirement');
		$this->template->set_layout ( 'edbuddy' )
                ->title ( 'Search for finest schools near you: Edbuddy.in' )
                ->set_partial ( 'header', 'partials/header_home' )
                ->set_partial ( 'footer', 'partials/footer_links' );
		$this->template->build ( 'school/list-your-school' );
	}
	
	public function saveSchool() {
            
            $data = "";
            $map['schoolName'] = $this->input->post('school');
            $map['city'] = $this->input->post('city');
            $map['name'] = $this->input->post('firstName');
            $map['mobile'] = $this->input->post('mobileNo');
            $map['requirement'] = $this->input->post('requirement');
                
            $schooladd_key = 'post/listschool.json';
            $apicalls = array(
                            array('url' => $schooladd_key,
                                    'params' => http_build_query($map),
                                    'headers' => 'application/x-www-form-urlencoded'
                            )
            );
            try {
                    
                    $apioutput = $this->apiclient->process($apicalls, 'POST');
                  
                    foreach ($apioutput as $key => $value) {
                            if (strpos($key, $schooladd_key) !== false) {
                                    $data = $value;
                            }
                    }
            } catch (EBDApiException $e) {
                    unset($apicalls);
                    unset($apioutput);
            }
            echo json_encode($data);
	}
        
    function contactPost() {
       	$data = "";
        $map['name'] = $this->input->post('name');
        $map['mobile'] = $this->input->post('mobile');
        $map['email'] = $this->input->post('email');
        $map['schoolId'] = $this->input->post('schoolId');
        $contact_key = 'post/contactus.json';
        $apicalls = array(
            array(
                'url' => $contact_key,
                'params' => http_build_query($map),
                'headers' => 'application/x-www-form-urlencoded'
            )
        );
    	try {
          	$apioutput = $this->apiclient->process($apicalls, 'POST');
            foreach ($apioutput as $key => $value) {
             	if (strpos($key, $contact_key) !== false) {
                      	$data = $value;
                }
            }
      	} catch (EBDApiException $e) {
          	unset($apicalls);
            unset($apioutput);
       	}
       	echo json_encode($data);
	}
        
        
  	public function postRequirement()
	{
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
            $this->template->set('page','requirement');
            $this->template->set_layout ( 'edbuddy' )
                            ->title ( 'Search for finest schools near you: Edbuddy.in' )
                            ->set_partial ( 'header', 'partials/header_home' )
                            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/post-your-requirement' );
	}
	
	public function saveRequirement() {
            $data = "";
            $map['personName'] = $this->input->post('name');
            $map['mobile'] = $this->input->post('mobile');
            $map['requirement'] = $this->input->post('requirement');
            $requirement_key = 'school/suggest.json';
            $apicalls = array(array('url' => $requirement_key,
                            'params' => http_build_query($map),
                            'headers' => 'application/x-www-form-urlencoded'
            )
            );
            try {
                    $apioutput = $this->apiclient->process($apicalls, 'POST');
                    foreach ($apioutput as $key => $value) {
                            if (strpos($key, $requirement_key) !== false) {
                                    $data = $value;
                            }
                    }
            } catch (EBDApiException $e) {

                    unset($apicalls);
                    unset($apioutput);
            }
            echo json_encode($data);
	}
        
        function userRatingReview(){

            $arrReviewData =array();
            $i= 0;
            $map['schoolId'] = $this->input->post('schoolId');
            $map['userId'] = $this->input->post('userId');
            $map['reviewId'] = $this->input->post('reviewId');
            $map['review'] = $this->input->post('reviewDesc');
            $map['title'] = $this->input->post('reviewTitle');
            $map['rating'] = $this->input->post('rating');
            $ratereview_key = 'school/ratingandreview.json/' . $map['schoolId']."/".$map['userId'];
            $apicalls = array ($ratereview_key );
            try {
                    $this->input->set_cookie("ebdratesch", "no", time() - 60 * 60 * 24 * 30);
                    $apioutput = $this->apiclient->process ( $apicalls );

                    if(count($apioutput)>0){
                        $arrReviewData['schoolId'] = $map['schoolId'];
                        $arrReviewData['userId'] = $map['userId'];
                        $arrReviewData['review'] = $map['review'];
                        $arrReviewData['title'] = $map['title'];
                        $arrReviewData['reviewId'] = $map['reviewId'];
                        $ratingdata = json_decode($map['rating']);
                        foreach($ratingdata as $key => $value) {
                            $arrReviewData['ratings'][$i]['catid'] = $value->catid;
                            $arrReviewData['ratings'][$i]['rating'] = $value->ratevalue;
                            $arrReviewData['ratings'][$i]['id'] = $value->id;
                            $i++;
                        }
                    }else{
                        $arrReviewData['schoolId'] = $map['schoolId'];
                        $arrReviewData['userId'] = $map['userId'];
                        $arrReviewData['review'] = $map['review'];
                        $arrReviewData['title'] = $map['title'];
                        $ratingdata = json_decode($map['rating']);
                        foreach($ratingdata as $key => $value) {
                            $arrReviewData['ratings'][$i]['catid'] = $value->catid;
                            $arrReviewData['ratings'][$i]['rating'] = $value->ratevalue;
                            $i++;
                        }
                    }
                    $ratereviewpost_key = 'school/ratereview.json/';
                    $apicalls = array(
                                        array('url' => $ratereviewpost_key,
                                              'params' => json_encode($arrReviewData),
                                              'headers' => 'application/json'
                                            )
                                    );
                    try {
                           
                        $apioutput = $this->apiclient->process($apicalls, 'POST');
                        foreach ($apioutput as $key => $value) {
                            if (strpos($key, $ratereviewpost_key) !== false) {
                                    $data = $value;
                            }
                        }
                      
                        echo json_encode($data);
                    } catch ( EBDApiException $e ) {
                        unset ( $apicalls );
                        unset ( $apioutput );
                    }
            } catch ( EBDApiException $e ) {
                    unset ( $apicalls );
                    unset ( $apioutput );
            }
        }
        
	public function aboutUs(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
            $this->template->set('page','home');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/about_us' );
	}
	
	public function joinUs(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
             $this->template->set('page','home');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/join_us' );
	}
	
	public function contactUs(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
            $this->template->set('page','requirement');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/contact_us' );
	}
	
	public function ourTeam(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
             $this->template->set('page','home');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/our_team' );
	}
	
	public function privacy(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
            $this->template->set('page','home');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/privacy' );
	}
	
	public function terms(){
            $userid = "";
            if(isset($_COOKIE['ebduserid']) && $_COOKIE['ebduserid']!=""){
                    $userid = $_COOKIE['ebduserid'];
            }elseif( $this->session->userdata('sessuserID')!="" ){
                    $userid = $this->session->userdata('sessuserID');
            }
            $this->template->set('userId',$userid);
             $this->template->set('page','home');
            $this->template->set_layout ( 'edbuddy' )
            ->title ( 'Search for finest schools near you: Edbuddy.in' )
            ->set_partial ( 'header', 'partials/header_home' )
            ->set_partial ( 'footer', 'partials/footer_links' );
            $this->template->build ( 'school/terms_of_use' );
	}
        
        public function socialLoginData(){
            $schoolId = $this->input->post('schoolId');
            $permlink = $this->input->post('permlink');
       
            $api_key = 'school/basic.json/'.$schoolId;
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
                    $output = $this->template->set ( 'schooldata', $schooldata)
                                             ->set('permlink',$permlink)
                                             ->set_layout ( false )
                                             ->build ( 'partials/social-login-html','', true );
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
        
    public function showSchoolContact() {
        	$data = "";
            $map['schoolId'] = $this->input->post('schoolId');
            $requirement_key = 'school/contactclicked.json/'.$map['schoolId'];
            $apicalls = array(array('url' => $requirement_key,
                            'params' => http_build_query($map),
            )
            );
            try {
                    $apioutput = $this->apiclient->process($apicalls, 'POST');
                    foreach ($apioutput as $key => $value) {
                            if (strpos($key, $requirement_key) !== false) {
                                    $data = $value;
                            }
                    }
            } catch (EBDApiException $e) {

                    unset($apicalls);
                    unset($apioutput);
            }
            echo json_encode($data);
        }
        
        public function generateXml(){
        	/* create a dom document with encoding utf8 */
        	$domtree = new DOMDocument('1.0', 'UTF-8');
        	
        	/* create the root element of the xml tree */
        	$xmlRoot = $domtree->createElement("krpano onstart='wait(0);start();'");
        	/* append it to the document created */
        	$xmlRoot = $domtree->appendChild($xmlRoot);
        	
        	$currentTrack = $domtree->createElement("track");
        	$currentTrack = $xmlRoot->appendChild($currentTrack);
        	
        	/* you should enclose the following two lines in a cicle */
        	$currentTrack->appendChild($domtree->createElement('path','song1.mp3'));
        	$currentTrack->appendChild($domtree->createElement('title','title of song1.mp3'));
        	
        	$currentTrack->appendChild($domtree->createElement('path','song2.mp3'));
        	$currentTrack->appendChild($domtree->createElement('title','title of song2.mp3'));
        	
        	/* get the xml printed */
        	echo $domtree->saveXML();
        }
}
