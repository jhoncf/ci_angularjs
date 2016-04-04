<?php

/**
 * Created by PhpStorm.
 * User: jhonatas
 * Date: 03/04/16
 * Time: 20:17
 */
class Colaboradores_model {

    private $id;
    private $name;
    private $nameEmpresa;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNameEmpresa() {
        return $this->nameEmpresa;
    }

    /**
     * @param mixed $nameEmpresa
     */
    public function setNameEmpresa($nameEmpresa) {
        $this->nameEmpresa = $nameEmpresa;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options) {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

}