<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author Luan
 */
require_once 'Controlador.php';
class Lutador implements Controlador {
//    attrs
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

//    metodos    
//    getters e setters
    private function getNome() {
        return $this->nome;
    }
    private function getNacionalidade() {
        return $this->nacionalidade;
    }
    private function getIdade() {
        return $this->idade;
    }
    private function getAltura() {
        return $this->altura;
    }
    private function getPeso() {
        return $this->peso;
    }
    private function getCategoria() {
        return $this->categoria;
    }
    private function getVitorias() {
        return $this->vitorias;
    }
    private function getDerrotas() {
        return $this->derrotas;
    }
    private function getEmpates() {
        return $this->empates;
    }
    private function setNome($nome) {
        $this->nome = $nome;
    }
    private function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    private function setIdade($idade) {
        $this->idade = $idade;
    }
    private function setAltura($altura) {
        $this->altura = $altura;
    }
    private function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria() {
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        }else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    private function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    private function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    private function setEmpates($empates) {
        $this->empates = $empates;
    }
//    end

//    construtor
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
//    end
    
    public function alterarPeso($peso) {
        if($this->getPeso() != $peso){
            $this->setPeso($peso);
        }else{
            echo "<br>O peso a ser alterado é igual ao existente.";
        }
    }

    public function apresentar() {
        echo "<b>CHEGOU A HORAAAAAA</b> este é o ".
            "Lutador: ".$this->getNome().
            " com Origem: ".$this->getNacionalidade().
            ", tem ".$this->getIdade()." anos".
            " e ".$this->getAltura()."m de altura.".
            " Pesando: ".$this->getPeso()."kg.".
            "<br>Ganhou: ".$this->getVitorias().", Perdeu: ".$this->getDerrotas()." e Empatou: ".$this->getEmpates()."<br>";
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates()+1);
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function status() {
        echo $this->getNome()." é um peso ".$this->getCategoria().", ganhou ".$this->getVitorias()." lutas e perdeu ".$this->getDerrotas();
    }

}
