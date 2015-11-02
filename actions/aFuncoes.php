<?php
require_once 'model/mFuncoes';

/**
 * Description of aFuncoes
 *
 * @author Diego
 */
class aFuncoes extends mFuncoes{
    protected $sqlInsert = "INSERT INTO funcoes (cod_trabalho, email_pessoa, funcao, instituicao) VALUES ('%s','%s','%s','%s',)";
    protected $sqlUpdate = "UPDATE funcoes SET cod_trabalho='%s', email_pessoa='%s', funcao='%s', instituicao='%s' WHERE cod_" ;
    protected $sqlDelete = "DELETE FROM funcoes WHERE cod_pessoa='%s'";
    protected $sqlSelect = "SELECT * FROM funcoes WHERE 1=1 %S %S";
    
    //*********************************************************************************
    public function insert(){
        $sql = sprintf($this->sqlInsert, $this->getCodTrabalho(), $this->getEmailPessoa(), $this->getFuncao(), $this->getInstituicao());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getCodTrabalho(), $this->getEmailPessoa(), $this->getFuncao(), $this->getInstituicao(), $this->getCodPessoa());
        return $this->RunQuery($sql); 
    }
    
    //*********************************************************************************
    public  function delete(){
        $sql =  sprintf($this->sqlDelete, $this->getCodPessoa());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function select($where='', $order=''){
        $sql = sprintf($this->sqlSelect, $where, $order );
        return $this->RunSelect($sql);
    }
    
    //*********************************************************************************
    public function load(){
        $rs = $this->select(sprintf(" and cod_pessoa='%s' ", $this->getCodPessoa()));
        $this->setCodTrabalho($rs[0]['cod_trabalho']);
        $this->setEmailPessoa($rs[0]['email_pessoa']);
        $this->setFuncao($rs[0]['funcao']);
        $this->setInstituicao($rs[0]['instituicao']);
        return $this;
    }
}
