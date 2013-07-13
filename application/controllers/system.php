<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class System extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->smarty->assign('base_url',base_url());
    }

    public function index() {
        $this->smarty->view('system/login.html');
    }
}
