<?php
require_once 'db/dbConnection.php';

/**
 * Description of mTrabalhos
 *
 * @author Diego
 */
class mTrabalhos extends dbConnection {
    private $cod_trabalho;
    private $titulo;
    private $resumo;
    private $palavras_chaves;
    private $arquivo;
    private $data_cad;
    private $referencias;
    private $hipotese;
    private $metodologia;
    private $objetivo;
    private $resultado;
    
    function getCodTrabalho() {
        return $this->cod_trabalho;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getResumo() {
        return $this->resumo;
    }

    function getPalavrasChaves() {
        return $this->palavras_chaves;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getDataCad($us = false) {
        if ($us) {
            return $this->data_cad;
        } else {
            return $this->dateTimeToUS($us);
        }
    }

    function getReferencias() {
        return $this->referencias;
    }

    function getHipotese() {
        return $this->hipotese;
    }

    function getMetodologia() {
        return $this->metodologia;
    }

    function getObjetivo() {
        return $this->objetivo;
    }

    function getResultado() {
        return $this->resultado;
    }

    function setCodTrabalho($cod_trabalho) {
        $this->cod_trabalho = $cod_trabalho;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setResumo($resumo) {
        $this->resumo = $resumo;
    }

    function setPalavrasChaves($palavras_chaves) {
        $this->palavras_chaves = $palavras_chaves;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    function setDataCad($dataBR) {
        $this->data_cad = $this->dateTimeToUS($dataBR);
    }

    function setReferencias($referencias) {
        $this->referencias = $referencias;
    }

    function setHipotese($hipotese) {
        $this->hipotese = $hipotese;
    }

    function setMetodologia($metodologia) {
        $this->metodologia = $metodologia;
    }

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    function setResultado($resultado) {
        $this->resultado = $resultado;
    }


    
}
