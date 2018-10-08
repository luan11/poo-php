<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Luan
 */
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
    
    public function mudarTrab() {
        if($this->getTrabalhando()){
            $this->setTrabalhando(false);
        }else{
            $this->setTrabalhando(true);
        }
    }
}
