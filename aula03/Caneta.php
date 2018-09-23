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
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if(!$this->tampada){
            echo "<p>Estou rabiscando...</p>";
        }else{
            echo "<p><b>ERRO!</b>, impossível rabiscar com a caneta tampada! :(</p>";
        }
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
}
