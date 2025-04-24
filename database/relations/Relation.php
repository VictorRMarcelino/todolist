<?php

namespace database\relations;

/**
 * Relation
 * @package database
 * @author  VictorRamos <httpsvictorramos@gmail.com>
 * @since   18/04/2025
 */
class Relation {

    private $column;
    private $model;
    private $primaryKey;
    private $notNull;

    /**
     * Get the value of column
     * @return string
     */ 
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Set the value of column
     * @param string $column
     */ 
    public function setColumn($column){
        $this->column = $column;
    }

    /**
     * Get the value of model
     * @return string
     */ 
    public function getModel(){
        return $this->model;
    }

    /**
     * Set the value of model
     * @param string $model
     */ 
    public function setModel($model){
        $this->model = $model;
    }

    /**
     * Get the value of primaryKey
     * @return boolean
     */ 
    public function getPrimaryKey(){
        return $this->primaryKey;
    }

    /**
     * Set the value of primaryKey
     * @param boolean
     */ 
    public function setPrimaryKey($primaryKey){
        $this->primaryKey = $primaryKey;
    }

    /**
     * Get the value of notNull
     * @return boolean
     */ 
    public function getNotNull(){
        return $this->notNull;
    }

    /**
     * Set the value of notNull
     * @param boolean $notNull
     */ 
    public function setNotNull($notNull){
        $this->notNull = $notNull;
    }

    /**
     * Construct a new MigrationRelation instance
     * @param string $sColumn
     * @param string $sModel
     */
    public function __construct($sColumn, $sModel) {
        $this->setColumn($sColumn);
        $this->setModel($sModel);
    }

    /**
     * Define the relation as a primary key
     * @return Relation
     */
    public function primaryKey() {
        $this->setPrimaryKey(true);
        return $this;
    }

    /**
     * Define the relation as not null
     * @return Relation
     */
    public function notNull() {
        $this->setNotNull(true);
        return $this;
    }
}