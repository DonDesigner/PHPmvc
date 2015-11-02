<?php
require_once 'model/mPessoas.php';
/**
 * Description of aPessoas
 *
 * @author Diego
 */
class aPessoas extends mPessoas {
  protected $sqlInsert = "INSERT INTO pessoas (nome_pessoa) VALUES ('%s')";
    protected $sqlUpdate = "UPDATE pessoas SET nome_pessoa = '%s' WHERE cod_pessoa='%s'";
    protected $sqlSelect = "SELECT * FROM pessoas WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM pessoas WHERE cod_pessoa='%s' ";
    
    //*********************************************************************************
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomePessoa() );
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update() {
        $sql = sprintf($this->sqlUpdate, $this->getNomePessoa(), $this->getCodPessoa() );
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getCodPessoa() );
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function select($where = '', $order = '') {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }

    //*********************************************************************************
    public function load() {
        $rs = $this->select(sprintf(" and cod_pessoa='%s' ", $this->getCodPessoa()));
        $this->setNomePessoa($rs[0]['nome_pessoa']);
        return $this;
    }
}