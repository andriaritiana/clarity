<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLT_Controller extends CI_Controller {

    protected $_protect = false;

    public function __construct() {
        parent::__construct();
    }

    public function loadPage($page = "content") {
        if(!$this -> _protect) {
            $this -> load -> view('common/_head');
            $this -> load -> view('common/_nav');
            $this -> load -> view($page);
            $this -> load -> view('common/_foot');
        }
    }
}
