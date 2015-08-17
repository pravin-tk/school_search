<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    private $api_url = "";

    public function __construct() {
        parent::__construct();
        // To use site_url and redirect on this controller.
        $this->load->helper('url');

        $ebd_config = parse_ini_file(APPPATH . "config/EBD.ini");
        $this->api_url = $ebd_config['api_url'];
    }

    public function index() {
        
    }

    /**
     * Function search
     */
    public function userSignup() {
        // $this->template->set('standards',$data);
        $this->template
                ->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header', 'partials/header_home')
                ->set_partial('footer', 'partials/footer_links');
        $this->template->set("page",'auth');
        $this->template->build('school/register');
    }
    
    public function userActivate() {
        $userid = ($this->session->userdata('sessuserID') != '') ? $this->session->userdata('sessuserID') : $_COOKIE['ebduserid'];
        $activateUser = 0;
        if($userid >0) { $activateUser =1;}
        $profile_key = 'user/profile.json/' . $userid;
        $apicalls = array($profile_key);
        try {
            $apioutput = $this->apiclient->process($apicalls);
            foreach ($apioutput as $key => $value) {
                if (strpos($key, $profile_key) !== false) {
                    if($value['status']<1){
                        echo "in active";
                       $activateUser =1;
                    }  else{
                        $activateUser =0;
                       
                    }
                }
            }
        } catch (EBDApiException $e) {
            $data ['status'] = 0;
            $data ['data'] = $data;
            unset($apicalls);
            unset($apioutput);
        }
        
        if($activateUser > 0) { 
            $emailId = ($this->session->userdata('sessEmailID') != '') ? $this->session->userdata('sessEmailID') : '';
            $this->template
                ->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header', 'partials/header_home')
                ->set_partial('footer', 'partials/footer_links');
                // ->set_partial('breadcrumb','../partials/breadcrumb');
                $this->template->set("emailId1",$emailId);
                $this->template->set("page",'profile');
                $this->template->build('school/activate');
        }else{
            //redirect to homepage in case user not logged or status is 0
            redirect(site_url());
        }
    }
    
    public function activateProfile() {
        $map['email'] =  $this->input->post('email');
        $map['password'] = $this->input->post('password');
        $apicalls = array(array('url' => 'user/activate.json',
                                'params' => http_build_query($map),
                                'headers' => 'application/x-www-form-urlencoded'));
        try {
            
            $apioutput = $this->apiclient->process($apicalls, 'POST');
            foreach ($apioutput as $key => $value) {
                if (strpos($key, 'user/activate.json') !== false) {
                    $activatedinfo = $value;
                }
            }
            echo json_encode($activatedinfo,0);
        }catch (EBDApiException $e) {
            
              echo $e->getMessage();
              unset($apicalls);
              unset($apioutput);
        }
       
    }
    
    
    public function forgot_password() {
        $map['email'] = $this->input->post('email');
        $apicalls = array(array('url' => 'user/forgot.json',
                                'params' => http_build_query($map),
                                'headers' => 'application/x-www-form-urlencoded'));
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');
            if (isset($apioutput))
                foreach ($apioutput as $key => $value) {
                    if (strpos($key, 'user/forgot.json') !== false) {//&& $apioutput[$key]['status'] == 1
                        $responsedata = $value;
                    }
                }
                echo json_encode($responsedata);
        } catch (EBDApiException $e) {
            echo $e->getMessage();

            unset($apicalls);
            unset($apioutput);
        }
        
    }

    public function userlogin() {
        $responsedata = new stdClass();
        $map['socialType'] = 0;
        $map['email'] = $this->input->post('uname');
        $map['password'] = $this->input->post('passwd');
        
        $apicalls = array(array('url' => 'user/login.json',
                                'params' => $map,
                                'headers' => 'multipart/form-data'));
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');
           
            foreach ($apioutput as $key => $value) {
                if (strpos($key, 'user/login.json') !== false && $apioutput[$key]['status'] == 1) {
                    $responsedata = json_decode(str_replace("'",'"',$value['data']));
                     //error_log("USER activated status code=:".$responsedata->status);
                   
                     $responsedata->loginstatus=$apioutput[$key]['status'];
                     $responsedata->message=$apioutput[$key]['message'];
                     
                    $this->session->set_userdata('sessuserID', $apioutput[$key]['id']);
                    $this->session->set_userdata('sessEmailID', $map['email']);
                  
                    $this->input->set_cookie("ebduserid", $apioutput[$key]['id'], time() + (86400 * 30));
                    $this->input->set_cookie("ebdusername",$responsedata->firstName, time() + (86400 * 30));
                    $this->input->set_cookie("ebdmypic",$responsedata->image, time() + (86400 * 30));
                }else if(strpos($key, 'user/login.json') !== false ){
                    $responsedata->loginstatus=0;
                    $responsedata->message=$value['errors'][0];
                   
                }
               
            }
             echo json_encode($responsedata);
        } catch (EBDApiException $e) {
            echo $e->getMessage();
            unset($apicalls);
            unset($apioutput);
        }
       
    }

    public function userLogout() {
        $city = $this->uri->segment(1);
        $this->input->set_cookie("ebduserid", null, time() - 60 * 60 * 24 * 30);
        $this->input->set_cookie("ebdusername", null, time() - 60 * 60 * 24 * 30);
        $this->input->set_cookie("edbmypic", null, time() - 60 * 60 * 24 * 30);
        $this->input->set_cookie("ebdratesch", null, time() - 60 * 60 * 24 * 30);
        
        $this->session->sess_destroy();
        $this->input->set_cookie($cookie);
        redirect(site_url());
    }

    public function userProfile() {
        if(isset($_COOKIE['ebduserid']))
            $cookieUserId = $_COOKIE['ebduserid'];
        
        $userid = ($this->session->userdata('sessuserID') != '') ? $this->session->userdata('sessuserID') :$_COOKIE['ebduserid'] ;
        if($userid == ""){
            $this->userLogout();
        }
        $profile_key = 'user/profile.json/' . $userid;
        $apicalls = array($profile_key);
        try {
            $apioutput = $this->apiclient->process($apicalls);
            foreach ($apioutput as $key => $value) {
                if (strpos($key, $profile_key) !== false) {
                    $this->template->set('profileInfo', $value);
                }
            }
            $data ['status'] = 1;
        } catch (EBDApiException $e) {
            $data ['status'] = 0;
            $data ['data'] = $data;
            unset($apicalls);
            unset($apioutput);
        }
        $data ['data'] = $data;
        $this->template->set("page",'profile');
        $this->template->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header', 'partials/header_home')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('school/profile');
    }

    public function profileSave() {
        $data = "";
        $map['firstName'] = $this->input->post('firstName');
        $map['lastName'] = $this->input->post('lastName');
        $map['mobile'] = $this->input->post('mobileNo');
        $map['email'] = $this->input->post('email');
        $map['image'] = '';
        if ($_FILES['file']['size'] > 0)
            $map['image'] = new CurlFile($_FILES['file']['tmp_name'], 'file/exgpd', $_FILES['file']['name']);
        $profile_key = 'user/signup.json';
        $apicalls = array(array('url' => 'user/signup.json',
                'params' => $map,
                'headers' => 'multipart/form-data'
            )
        );
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');
            foreach ($apioutput as $key => $value) {
                if (strpos($key, $profile_key) !== false) {
                    $data = $value;
                }
            }
            echo json_encode($data);
        } catch (EBDApiException $e) {
//            error_log($e);
            unset($apicalls);
            unset($apioutput);
        }
        
    }

    public function profileUpdate() {
        //print_r($_FILES);
        $userid = ($this->session->userdata('userID') != '') ? $this->session->userdata('userID') : $_COOKIE['ebduserid'];
        $map['firstName'] = $this->input->post('firstName');
        $map['lastName'] = $this->input->post('lastName');
        $map['mobile'] = $this->input->post('mobileNo');
        $map['email'] = $this->input->post('email');
        $map['id'] = $userid;
        $map['image'] = '';
        if(isset($_FILES['file']))
        if ($_FILES['file']['size'] > 0)
            $map['image'] = new CurlFile($_FILES['file']['tmp_name'], 'file/exgpd', $_FILES['file']['name']);
        $profile_key = 'user/update.json';
        $apicalls = array(array('url' => 'user/update.json',
                'params' => $map,
                'headers' => 'multipart/form-data'
            )
        );
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');

            foreach ($apioutput as $key => $value) {
                if (strpos($key, $profile_key) !== false) {
                    $data = $value;
                }
            }
             echo json_encode($data);
        } catch (EBDApiException $e) {

            unset($apicalls);
            unset($apioutput);
        }
       
    }

    public function updatePassword() {
        $userid = ($this->session->userdata('userID') != '') ? $this->session->userdata('userID') : $_COOKIE['ebduserid'];

        $map['email'] = $this->input->post('email');
        $map['password'] = $this->input->post('password');

        $apicalls = array(array('url' => 'user/changepassword.json',
                'params' => http_build_query($map),
                'headers' => 'application/x-www-form-urlencoded'
            )
        );
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');
            foreach ($apioutput as $key => $value) {
                if (strpos($key, 'user/changepassword.json') !== false) {
                    $data['data'] = $value;
                }
            }
             echo json_encode($data);
        } catch (EBDApiException $e) {
           
            unset($apicalls);
            unset($apioutput);
        }
       
    }

    

}
