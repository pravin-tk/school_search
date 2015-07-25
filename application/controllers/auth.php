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
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        // ->set_partial('breadcrumb','../partials/breadcrumb');

        $this->template->build('school/register');
    }

    public function forgot_password() {
        $map['email'] = $this->input->post('email');
        $apicalls = array(array('url' => 'user/forgot.json',
                                'params' => http_build_query($map),
                                'headers' => 'application/x-www-form-urlencoded'));
        try {
            $apioutput = $this->apiclient->process($apicalls, 'POST');
            error_log(json_encode($apioutput));
            if (isset($apioutput))
                foreach ($apioutput as $key => $value) {
                    if (strpos($key, 'user/forgot.json') !== false) {//&& $apioutput[$key]['status'] == 1
                        $responsedata = $value;
                    }
                }
        } catch (EBDApiException $e) {
            echo $e->getMessage();

            unset($apicalls);
            unset($apioutput);
        }
        echo json_encode($responsedata);
    }

    public function userlogin() {
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
                     
                    if($responsedata->status == 0 ){
                          $map1['email'] = $map['email'];
                          $map1['password'] =  $map['password'];
                          $apicalls1 = array(array('url' => 'user/activate.json',
                                                  'params' => $map1,
                                                  'headers' => 'application/x-www-form-urlencoded'));
                          try {
                            $apioutput1 = $this->apiclient->process($apicalls1, 'POST');
                          }catch (EBDApiException $e) {
                                echo $e->getMessage();
                                unset($apicalls1);
                                unset($apioutput1);
                          }
                    }
                    
                    $this->session->set_userdata('sessuserID', $apioutput[$key]['id']);
                    $this->input->set_cookie("ebduserid", $apioutput[$key]['id'], 60 * 60 * 24);
                    $this->input->set_cookie("ebdusername",$responsedata->firstName, 60*60*24);
                    $this->input->set_cookie("ebdmypic",$responsedata->image, 60*60*24);
                }
            }
        } catch (EBDApiException $e) {
            echo $e->getMessage();
            unset($apicalls);
            unset($apioutput);
        }
        echo json_encode($apioutput);
    }

    public function userLogout() {
        $city = $this->uri->segment(1);
        $this->input->set_cookie("ebduserid", null, time() - 60 * 60 * 24 * 30);
        $this->input->set_cookie("ebdusername", null, time() - 60 * 60 * 24 * 30);

        $this->session->sess_destroy();
        $this->input->set_cookie($cookie);
        redirect(site_url());
    }

    public function userProfile() {
        $userid = ($this->session->userdata('userID') != '') ? $this->session->userdata('userID') : $_COOKIE['ebduserid'];
        $profile_key = 'user/profile.json/' . $userid;
        $apicalls = array($profile_key);
        try {
            $apioutput = $this->apiclient->process($apicalls);
            error_log('PROF=' . json_encode($apioutput, 0));
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
        $this->template->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header', 'partials/header')
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
            error_log(json_encode($apioutput), 0);
            foreach ($apioutput as $key => $value) {
                if (strpos($key, $profile_key) !== false) {
                    $data = $value;
                }
            }
        } catch (EBDApiException $e) {
            error_log($e);
            unset($apicalls);
            unset($apioutput);
        }
        echo json_encode($data);
    }

    public function profileUpdate() {
        //print_r($_FILES);
        $userid = ($this->session->userdata('userID') != '') ? $this->session->userdata('userID') : $_COOKIE['ebduserid'];
        $map['firstName'] = $this->input->post('firstName');
        $map['lastName'] = $this->input->post('lastName');
        $map['mobile'] = $this->input->post('mobileNo');
        $map['email'] = 'er.pradeep007@gmail.com';
        $map['id'] = 1;
        $map['image'] = '';
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
        } catch (EBDApiException $e) {

            unset($apicalls);
            unset($apioutput);
        }
        echo json_encode($data);
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
        } catch (EBDApiException $e) {
            error_log(json_encode($e));
            unset($apicalls);
            unset($apioutput);
        }
        echo json_encode($data);
    }

    public function testAPI() {

        $errmsg = "";
        $url = "http://54.68.33.139:8080/edbuddy/webapi/api1.0/user/update.json";
        // $headers = array("EBD-API-KEY: PANKY YWRtaW46YWRtaW4=","Content-Type:multipart/form-data"); 
        $headers = array("EBD-API-KEY: PANKY YWRtaW46YWRtaW4=", "Content-Type:application/x-www-form-urlencoded");
        $postfields = array("email" => "er.pradeep007@gmail.com",
            "mobile" => "8390822345",
        );
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postfields,
            // CURLOPT_INFILESIZE => $filesize,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        if (!curl_errno($ch)) {
            $info = curl_getinfo($ch);
            var_dump($info);
            if ($info['http_code'] == 200)
                $errmsg = "File uploaded successfully";
        } else {
            $errmsg = curl_error($ch);
        }
        curl_close($ch);
        echo $errmsg;
    }

}
