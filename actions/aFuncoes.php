<?php
require_once 'model/mFuncoes';

/**
 * Description of aFuncoes
 *
 * @author Diego
 */
class aFuncoes extends mFuncoes{
    protected $sqlInsert = "INSERT INTO funcoes (cod_pessoa, cod_trabalho, email_pessoa, funcao, instituicao) VALUES ('%s', '%s','%s','%s','%s',)";
    protected $sqlUpdate = "UPDATE funcoes SET email_pessoa='%s', funcao='%s', instituicao='%s' WHERE cod_pessoa='%s' and cod_trabalho='%s'" ;
    protected $sqlDelete = "DELETE FROM funcoes WHERE cod_pessoa='%s' and cod_trabalho='%s'";
    protected $sqlSelect = "SELECT * FROM funcoes WHERE 1=1 %S %S";
    
    //*********************************************************************************
    public function insert(){
        $sql = sprintf($this->sqlInsert, $this->getCodPessoa(), $this->getCodTrabalho(), $this->getEmailPessoa(), $this->getFuncao(), $this->getInstituicao());
        return $this->RunQuery($sql);
    }
    
    //*********************************************************************************
    public function update(){
        $sql = sprintf($this->sqlUpdate, $this->getEmailPessoa() ,$this->getFuncao(), $this->getInstituicao(), $this->getCodPessoa(), $this->getCodTrabalho());
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
        $rs = $this->select(sprintf(" and cod_trabalho='%s' and cod_pessoa='%s' ", $this->getCodTrabalho(), $this->getCodPessoa()));
        $this->setCodPessoa($rs[0]['cod_pessoa']);
        $this->setCodTrabalho($rs[0]['cod_trabalho']);
        $this->setEmailPessoa($rs[0]['email_pessoa']);
        $this->setFuncao($rs[0]['funcao']);
        $this->setInstituicao($rs[0]['instituicao']);
        return $this;
    }
}
