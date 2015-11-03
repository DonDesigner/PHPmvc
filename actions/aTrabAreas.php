<?php
require_once 'model/mTrabAreas.php';
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
class aTrabAreas extends mTrabAreas{
    protected $sqlInsert = "INSERT INTO trab_areas (cod_trabalho, cod_area) VALUES ('%s', '%s')";
   // protected $sqlUpdate = "UPDATE trab_areas SET cod_area = '%s' WHERE cod_trabalho='%s'";
    
    protected $sqlDelete = "DELETE FROM trab_areas WHERE cod_trabalho='%s' and cod_area='%s'";
    
    protected $sqlSelect = "SELECT * FROM trab_areas WHERE 1=1 %s %s";
    protected $sqlSelectInner = "SELECT trabalhos.titulo, areas.nome_area, trab_areas.* FROM trab_areas 
                                INNER JOIN trabalhos ON (trabalhos.cod_trabalho = trab_areas.cod_trabalho) 
                                INNER JOIN areas ON (trab_areas.cod_area = areas.cod_area)";
    
    //*********************************************************************************
    public function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getCodTrabalho(), $this->getCodArea());
        return $this->RunQuery($sql);
    }
    
//    //*********************************************************************************
//    public function update(){
//        $sql = sprintf($this->sqlUpdate, $this->getCodArea(), $this->getCodTrabalho());
//        return $this->RunQuery($sql);
//    }
    
    //*********************************************************************************
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getCodTrabalho(), $this->getCodArea());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    
//    //*********************************************************************************
    public function load(){
        $rs = $this->select(sprintf(" and cod_trabalho='%s' and cod_area='%s' ", $this->getCodTrabalho()));
        $this->setCodTrabalho($r[0]['cod_trabalho']);
        $this->setCodArea($rs[0]['cod_area']);
      
        return $this;
    }
    
    //*********************************************************************************
    public function selectInner($where='', $order=''){
        $sql = sprintf($this->sqlSelectInner, $where, $order);
        return $this->RunSelect($sql);
    }
    

}
