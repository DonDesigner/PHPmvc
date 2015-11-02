<?php

require_once 'model/mAreas.php';

/**
 * Description of aPublicacoes
 *
 * @author Diego
 */
class aPublicacoes extends mPublicacoes {

    protected $sqlInsert = "INSERT INTO publicacao (nome_publicacao, data_publicacao) VALUES ('%s', '%s')";
    protected $sqlUpdate = "UPDATE publicacao SET nome_publicacao='%s', data_publicacao='%s' WHERE cod_publicacao='%s'";
    protected $sqlSelect = "SELECT *, date_format(data_evento, '%s') as data_evento FROM publicacao WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM publicacao WHERE cod_publicacao='%s' ";

    //*********************************************************************************
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomePublicacao(), $this->getDataPublicacao(true));
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getNomePublicacao(), $this->getDataPublicacao(true), $this->getCodPublicacao());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function delete(){
        $sql = sprintf($this->sqlDelete, $this->getCodPublicacao());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, '%d/%m/%Y', $where, $order);
        return $this->RunSelect($sql);
    }
    
    //*********************************************************************************
    public function load(){
        $rs = $this->select(sprintf(" and cod_publicacao='%s' ", $this->getCodPublicacao()));
        $this->setCodPublicacao($rs[0]['cod_publicacao']);
        $this->setNomePublicacao($rs[0]['nome_publicacao']);
        $this->setDataPublicacao($rs[0]['data_publicacao'],true);
        return $this;
    }

}
