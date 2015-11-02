<?php

/**
 * Description of mFuncoes
 *
 * @author Diego
 */
class mFuncoes {
    private $cod_pessoa;
    private $cod_trabalho;
    private $email_pessoa;
    private $funcao;
    private $instituicao;
    
    function getCodPessoa() {
        return $this->cod_pessoa;
    }

    function getCodTrabalho() {
        return $this->cod_trabalho;
    }

    function getEmailPessoa() {
        return $this->email_pessoa;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function getInstituicao() {
        return $this->instituicao;
    }

    function setCodPessoa($cod_pessoa) {
        $this->cod_pessoa = $cod_pessoa;
    }

    function setCodPrabalho($cod_trabalho) {
        $this->cod_trabalho = $cod_trabalho;
    }

    function setEmailPessoa($email_pessoa) {
        $this->email_pessoa = $email_pessoa;
    }

    function setFuncao($funcao='A') {
        $this->funcao = $funcao;
    }

    function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }


}
