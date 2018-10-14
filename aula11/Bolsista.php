<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author Luan
 */
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovBolsa(){
        echo "<p>Bolsa do aluno ".$this->nome." renovada!</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
    
    public function pagMensa() {
        echo "<p>".$this->nome." é bolsista, paga com desconto.</p>";
    }
}
