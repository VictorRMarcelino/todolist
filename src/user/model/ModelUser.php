<?php

namespace src\user;

class ModelUser {
    public $id;
    public $username;
    public $password;

    /**
     * Get the value of id
     * @return int
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

    /**
     * Get the value of username
     * @return string
     */ 
    public function getUsername(){
        return $this->username;
    }

    /**
     * Set the value of username
     * @param string $username
     */ 
    public function setUsername($username){
        $this->username = $username;
    }

    /**
     * Get the value of password
     * @return string
     */ 
    public function getPassword(){
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string $password
     */ 
    public function setPassword($password){
        $this->password = $password;
    }
}