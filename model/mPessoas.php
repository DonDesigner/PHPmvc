<?php

/**
 * Description of mPessoas
 *
 * @author Diego
 */
class mPessoas {
   private $cod_pessoa;
   private $nome_pessoa;
   
   function getCodPessoa() {
       return $this->cod_pessoa;
   }

   function getNomePessoa() {
       return $this->nome_pessoa;
   }

   function setCodPessoa($cod_pessoa) {
       $this->cod_pessoa = $cod_pessoa;
   }

   function setNomePessoa($nome_pessoa) {
       $this->nome_pessoa = $nome_pessoa;
   }


}
