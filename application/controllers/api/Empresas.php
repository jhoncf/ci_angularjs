<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jhonatas
 * Date: 03/04/16
 * Time: 17:35
 *
 */
require APPPATH . '/libraries/REST_Controller.php';

class Empresas extends REST_Controller{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('empresas_model');
        $this->load->model('empresas_mapper');
    }

    public function empresas_get(){
        $result = $this->empresas_mapper->find();

        $this->set_response(array('result' => $result), REST_Controller::HTTP_OK);
    }

    public function empresas_post(){

        $empresas = $this->empresas_model->setOptions($this->post());
        $this->empresas_mapper->save($empresas);

        $this->set_response(array('message' => 'success'), REST_Controller::HTTP_OK);
    }


    public function empresas_delete(){
        $this->empresas_mapper->delete($this->get('id'));
        $this->set_response(array('message' => 'success'), REST_Controller::HTTP_OK);
    }
}