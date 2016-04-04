<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jhonatas
 * Date: 03/04/16
 * Time: 21:47
 */

require APPPATH . '/libraries/REST_Controller.php';

class Colaboradores extends REST_Controller{
    
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('colaboradores_model');
        $this->load->model('colaboradores_mapper');
    }

    public function colaboradores_get(){
        $result = $this->colaboradores_mapper->find();

        $this->set_response(array('result' => $result), REST_Controller::HTTP_OK);
    }

    public function colaboradores_post(){

        $colaboradores = $this->colaboradores_model->setOptions($this->post());
        $this->colaboradores_mapper->save($colaboradores);

        $this->set_response(array('message' => 'success'), REST_Controller::HTTP_OK);
    }


    public function colaboradores_delete(){
        $this->colaboradores_mapper->delete($this->get('id'));
        $this->set_response(array('message' => 'success'), REST_Controller::HTTP_OK);
    }
}