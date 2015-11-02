<?php
require_once 'model/mTrabPublicacao';

/**
 * Description of aTrab_Publicacao
 *
 * @author Diego
 */
class aTrabPublicacao extends mTrabPublicacao {
    protected $sqlInsert = "INSERT INTO trab_publicacao VALUES ('%s')";
    protected $sqlUpdate = "UPDATE trab_publicacao SET cod_publicacao='%s' WHERE cod_trabalho='%s'";
    protected $sqlDelete = "DELETE FROM trab_publicacao WHERE cod_trabalho='%s'";
    protected $sqlSelect = "SELECT * FROM trab_publicacao WHERE 1=1 %s %s";
    
    //*********************************************************************************
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getCodPublicaco() );
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update() {
        $sql = sprintf($this->sqlUpdate,  $this->getCodPublicaco(), $this->getCodTrabalho() );
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getCodTrabalho() );
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function select($where = '', $order = '') {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }

    //*********************************************************************************
    public function load() {
        $rs = $this->select(sprintf(" and cod_trabalho='%s' ", $this->getCodTrabalho()));
        $this->setCodPublicaco($rs[0]['cod_publicacao']);
       return $this;
    }
    
    
    
}
