<?php

/**
 * Description of mTrab_Publicacao
 *
 * @author Diego
 */
class mTrab_Publicacao {
    private $cod_trabalho;
    private $cod_publicaco;
    
    function getCodTrabalho() {
        return $this->cod_trabalho;
    }

    function getCodPublicaco() {
        return $this->cod_publicaco;
    }

    function setCodTrabalho($cod_trabalho) {
        $this->cod_trabalho = $cod_trabalho;
    }

    function setCodPublicaco($cod_publicaco) {
        $this->cod_publicaco = $cod_publicaco;
    }


}
