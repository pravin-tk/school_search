<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function index() {
    }

    /**
     * Function download App
     */
    public function downloadApp() {
        $this->template
                ->set_layout('edbuddy')
                ->title('Search for finest schools near you: Edbuddy.in')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer_links');
        $this->template->build('school/download');
    }
    
}
