<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mamifero
 *
 * @author Luan
 */
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    
    public function alimentar() {
        echo "<p>Mamando...</b>";
    }
    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }
    public function locomover() {
        echo "<p>Correndo</p>";
    }
    
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}