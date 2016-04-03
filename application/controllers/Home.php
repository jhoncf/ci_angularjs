<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jhonatas
 * Date: 03/04/16
 * Time: 17:35
 */
class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->view('index_view');
    }
}