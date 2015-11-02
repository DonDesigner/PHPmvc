<?php
require_once 'model/mTrab_Areas';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aTrab_Areas
 *
 * @author Diego
 */
class aTrab_Areas extends mTrab_Areas{
    protected $sqlInsert = "INSERT INTO trab_areas (cod_area) VALUES ('%s')";
    protected $sqlUpdate = "UPDATE trab_areas SET cod_area = '%s' WHERE cod_trabalho='%s'";
    protected $sqlSelect = "SELECT * FROM trab_areas WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM trab_areas WHERE cod_trabalho='%s' ";
    
    //*********************************************************************************
    public function insert(){
        $sql = sprintf($this->sqlInsert, $this->getCodArea());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getCodArea(), $this->getCodTrabalho());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getCodTrabalho());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    
    //*********************************************************************************
    public function load(){
        $rs = $this->select(sprintf(" and cod_trabalho='%s' ", $this->getCodTrabalho()));
        $this->setCodArea($rs[0]['cod_area']);
      
        return $this;
    }
}
