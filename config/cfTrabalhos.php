<?php

class cfTrabalhos{
    
    //********************************************************************
    public function dateToBR($dataAmericana){
        //2015-02-21   ano-mes-dia
        $d = explode('-', $dataAmericana);
        $dOk = $d[2] . '/' . $d[1] . '/' . $d[0];
        return $dOk;
    }

    //********************************************************************
    public function dateToUS($dataBrasil){
        // 21/02/2015   dia/mes/ano
        $d = explode('/', $dataBrasil);
        $dOk = $d[2] . '-' . $d[1] . '-' . $d[0];
        return $dOk;
    }
    
    //********************************************************************
    public function dateTimeToBR($data_americana_his){
        $d = explode(' ',$data_americana_his);
        $ok = $this->dateToBR($d[0]) . ' ' . $d[1];
        return $ok;
    }
    
    //********************************************************************
    public function dateTimeToUS($data_br_his){
        $d = explode(' ', $data_br_his);
        $ok = $this->dateToUS($d[0]) . ' ' . $d[1];
        return $ok;
    }
    
    
}