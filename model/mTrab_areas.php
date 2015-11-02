<?php
require_once 'db/dbConnection.php';
/**
 * Description of mTrab_areas
 *
 * @author Diego
 */
class mTrab_Areas extends dbConnection {

    private $cod_trabalho;
    private $cod_area;
    
    function getCodTrabalho() {
        return $this->cod_trabalho;
    }

    function getCodArea() {
        return $this->cod_area;
    }

    function setCodTrabalho($cod_trabalho) {
        $this->cod_trabalho = $cod_trabalho;
    }

    function setCodArea($cod_area) {
        $this->cod_area = $cod_area;
    }


    
}
