<?php

require_once 'db/dbConnection.php';

/**
 * Description of mPublicacoes
 *
 * @author Diego
 */
class mPublicacoes extends dbConnection {
    private $cod_publicacao;
    private $nome_publicacao;
    private $data_publicacao;
    
    function getCodPublicacao() {
        return $this->cod_publicacao;
    }

    function getNomePublicacao() {
        return $this->nome_publicacao;
    }

    function getDataPublicacao($us=false) {
        if($us){
            return $this->data_publicacao;
        } else {
            return $this->dateToBR($this->data_publicacao);
        }
        
    }

    function setCodPublicacao($cod_publicacao) {
        $this->cod_publicacao = $cod_publicacao;
    }

    function setNomePublicacao($nome_publicacao) {
        $this->nome_publicacao = $nome_publicacao;
    }

    function setDataPublicacao($dataBR) {
        
        $this->data_publicacao = $this->dateToUS($dataBR);
    }


    
}
