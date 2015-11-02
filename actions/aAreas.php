<?php

require_once 'model/mAreas.php';

/**
 * Description of aAreas
 *
 * @author Diego
 */
class aAreas extends mAreas {
    protected $sqlInsert = "INSERT INTO areas (nome_area) VALUES ('%s')";
    protected $sqlUpdate = "UPDATE areas SET nome_area = '%s' WHERE cod_area='%s'";
    protected $sqlSelect = "SELECT * FROM areas WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM areas WHERE cod_area='%s' ";
    
    //*********************************************************************************
    public function insert(){
        $sql = sprintf($this->sqlInsert, $this->getNomeArea());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getNomeArea(), $this->getCodArea());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getCodArea());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    
    //*********************************************************************************
    public function load(){
        $rs = $this->select(sprintf(" and cod_area='%s' ", $this->getCodArea()));
        $this->setCodArea($rs[0]['cod_area']);
        $this->setNomeArea($rs[0]['nome_area']);
        return $this;
    }
}
