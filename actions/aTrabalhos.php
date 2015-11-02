<?php
require_once 'model/mTrabalhos.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aTrabalhoss
 *
 * @author Diego
 */
class aTrabalhos extends mTrabalhos {
   protected $sqlInsert = "INSERT INTO trabalhos (titulo, resumo, palavras_chaves, arquivo, data_cad, referencias, hipotese, metodologia, objetivo, resultado) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    protected $sqlUpdate = "UPDATE v SET titulo='%s', resumo='%s', palavras_chaves='%s', arquivo='%s', data_cad='%s', referencias='%s', hipotese='%s', metodologia='%s', objetivo='%s', resultado='%s' WHERE cod_trabalho='%s'";
    protected $sqlSelect = "SELECT *, date_format(data_cad, '%s') as data_cad FROM trabalhos WHERE 1=1 %s %s";
    protected $sqlDelete = "DELETE FROM trabalhos WHERE cod_trabalho='%s' ";

    //*********************************************************************************
    public function insert() {
        $sql = sprintf($this->sqlInsert, 
                $this->getTitulo(),
                $this->getResumo(),
                $this->getPalavrasChaves(),
                $this->getArquivo(),
                $this->getDataCad(true),
                $this->getReferencias(),
                $this->getHipotese(),
                $this->getMetodologia(),
                $this->getObjetivo(),
                $this->getResultado()            
                );
        
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function update() {
        $sql = sprintf($this->sqlUpdate, 
                $this->getTitulo(),
                $this->getResumo(),
                $this->getPalavrasChaves(),
                $this->getArquivo(),
                $this->getDataCad(true),
                $this->getReferencias(),
                $this->getHipotese(),
                $this->getMetodologia(),
                $this->getObjetivo(),
                $this->getResultado(),
                $this->getCodTrabalho() //indice
                );
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getCodTrabalho());
        return $this->RunQuery($sql);
    }

    //*********************************************************************************
    public function select($where = '', $order = '') {
        $sql = sprintf($this->sqlSelect, '%d/%m/%Y %H:%i:%s', $where, $order);
        return $this->RunSelect($sql);
    }

    //*********************************************************************************
    public function load() {
        $rs = $this->select(sprintf(" and cod_trabalho='%s' ", $this->getCodTrabalho()));
        $this->setTitulo($rs[0]['titulo']);
        $this->setResumo($rs[0]['resumo']);
        $this->setPalavrasChaves($rs[0]['palavras_chaves']);
        $this->setArquivo($rs[0]['arquivo']);
        $this->setDataCad($rs[0]['data_cad']);
        $this->setReferencias($rs[0]['referencias']);
        $this->setMetodologia($rs[0]['metodologia']);
        $this->setObjetivo($rs[0]['objetivo']);
        $this->setResultado($rs[0]['resultado']);
        return $this;
    }

}
