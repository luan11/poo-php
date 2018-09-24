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
//require_once 'Controlador.php';
class Lutador /* implements Controlador */ {
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
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
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
        echo "<p><b>CHEGOU A HORAAAAAA</b> este é o ".
            "Lutador: ".$this->getNome().
            " com Origem: ".$this->getNacionalidade().
            ", tem ".$this->getIdade()." anos".
            " e ".$this->getAltura()."m de altura.".
            " Pesando: ".$this->getPeso()."kg.".
            "<br>Ganhou: ".$this->getVitorias().", Perdeu: ".$this->getDerrotas()." e Empatou: ".$this->getEmpates()."</p>";
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
        echo "<br>".$this->getNome()." é um peso ".$this->getCategoria().", ganhou ".$this->getVitorias()." lutas, perdeu ".$this->getDerrotas()." e empatou: ".$this->getEmpates();
    }

}
