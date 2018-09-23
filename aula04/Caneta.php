<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Luan
 */
class Caneta {    
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }
       
    /* public function Caneta() { //metodo construtor
        $this->cor = "Azul";
        $this->tampar();
    } */
    
    /* public function Caneta($m , $c , $p) { //metodo construtor
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($p){
        $this->ponta = $p;
    } */
}
