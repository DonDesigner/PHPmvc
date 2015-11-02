<?php

require_once 'db/dbConnection.php';

/**
 * Description of mAreas
 *
 * @author Diego
 */
class mAreas extends dbConnection {
    private $cod_area;
    private $nome_area;
    
    function getCodArea() {
        return $this->cod_area;
    }

    function getNomeArea() {
        return $this->nome_area;
    }

    function setCodArea($cod_area) {
        $this->cod_area = $cod_area;
    }

    function setNomeArea($nome_area) {
        $this->nome_area = $nome_area;
    }


}
