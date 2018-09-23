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
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if(!$this->tampada){
            echo "<p>Estou rabiscando...</p>";
        }else{
            echo "<p><b>ERRO!</b>, impossível rabiscar com a caneta tampada! :(</p>";
        }
    }
    
    function tampar(){
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
}
