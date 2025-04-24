<?php

namespace database\migrations;

use database\relations\RelationBigint;
use database\relations\RelationSmallint;
use database\relations\RelationVarchar;

/**
 * Migration
 * @package database
 * @author  VictorRamos <httpsvictorramos@gmail.com>
 * @since   18/04/2025
 */
abstract class Migration {

    private $Model;
    private $relations = [];

    /**
     * Get the value of Model
     */ 
    public function getModel(){
        return $this->Model;
    }

    /**
     * Set the value of Model
     */ 
    public function setModel($Model){
        $this->Model = $Model;
    }

    /**
     * Return the name of the table
     * @return void
     */
    abstract protected function getTable();

    /**
     * Return the relations of the table
     * @return void
     */
    abstract protected function setRelations();

    /**
     * Add a new bigint relation
     * @param string $sColumn
     * @param string $sModel
     */
    public function bigint($sColumn, $sModel) {
        $this->relations[] = new RelationBigint($sColumn, $sModel);
    }

    /**
     * Add a new smallint relation
     * @param string $sColumn
     * @param string $sModel
     */
    public function smallint($sColumn, $sModel) {
        $this->relations[] = new RelationSmallint($sColumn, $sModel);
    }

    /**
     * Add a new varchar relation
     * @param string $sColumn
     * @param string $sModel
     */
    public function varchar($sColumn, $sModel) {
        $this->relations[] = new RelationVarchar($sColumn, $sModel);
    }
}