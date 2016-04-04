<?php

/**
 * Created by PhpStorm.
 * User: jhonatas
 * Date: 03/04/16
 * Time: 20:19
 */
class Empresas_mapper extends CI_Model{

    private $_tableNme = null;

    public function __construct() {
        $this->_tableNme =  APPPATH . 'json_data/empresas.json';
    }

    /**
     * @var null
     */
    private $result = null;

    /**
     * @return array
     */
    public function toArray(){
        $entries = array();
        foreach($this->result->result() as $row){
            $entry['id'] = $row->id;
            $entry['name'] = $row->name;

            $entries[] = $entry;
        }
        return $entries;
    }
    public function numRows() {
        return $this->result->num_rows();
    }


    /**
     * @param Monitoring_initial_model $model
     * @return bool
     * @throws Exception
     */

    public function save(Empresas_model $model){

        $data = array(
            'id' => time(),
            'name' => $model->getName()
        );

        $inp = file_get_contents($this->_tableNme);
        $tempArray = json_decode($inp);

        if(empty($tempArray)){
            $tempArray = array();
        }

        array_push($tempArray, $data);
        $jsonData = json_encode($tempArray);
        file_put_contents($this->_tableNme, $jsonData);
    }

    /**
     * function find()
     *
     * @param null $id
     * @param null $search
     * @param null $limit
     * @param null $start
     * @param null $sort
     * @return mixed
     */
    public function find(){
        $inp = file_get_contents($this->_tableNme);

        $this->result = json_decode($inp);
        return $this->result;
    }


    /**
     * @param $id
     * @return bool
     * @throws Exception
     */
    public function delete($id){
        $inp = file_get_contents($this->_tableNme);
        $tempArray = json_decode($inp, true);

        foreach($tempArray as $key => $value){
            if($value['id'] == $id){
                unset($tempArray[$key]);
                $jsonData = json_encode($tempArray);

                file_put_contents($this->_tableNme, $jsonData);
            }
        }
    }

}