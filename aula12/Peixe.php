<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peixe
 *
 * @author Luan
 */
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;    
    
    public function alimentar() {
        echo "<p>Comendo substâncias...</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }
    public function locomover() {
        echo "<p>Nadando</p>";
    }
    public function soltarBolha(){
        echo "<p>Soltou uma bolha!</p>";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
