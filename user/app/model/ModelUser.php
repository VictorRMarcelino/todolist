<?php

namespace app\model;

class ModelUser {
    private $id;
    private $username;
    private $password;

    /**
     * Get the value of id
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     * @param int $id
     */ 
    public function setId($id){
        $this->id = $id;
    }
}