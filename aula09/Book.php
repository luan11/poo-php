<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author Luan
 */
require_once 'People.php';
require 'Publication.php';
class Book implements Publication {
    private $title;
    private $author;
    private $totPages;
    private $actualPage;
    private $open;
    private $reader;
    
    function __construct($title, $author, $totPages, $actualPage, $open, $reader) {
        $this->title = $title;
        $this->author = $author;
        $this->totPages = $totPages;
        $this->actualPage = $actualPage;
        $this->open = $open;
        $this->reader = $reader->getName();
    }

    
    private function getTitle() {
        return $this->title;
    }
    private function getAuthor() {
        return $this->author;
    }
    private function getTotPages() {
        return $this->totPages;
    }
    private function getActualPage() {
        return $this->actualPage;
    }
    private function getOpen() {
        return $this->open;
    }
    private function getReader() {
        return $this->reader;
    }
    private function setTitle($title) {
        $this->title = $title;
    }
    private function setAuthor($author) {
        $this->author = $author;
    }
    private function setTotPages($totPages) {
        $this->totPages = $totPages;
    }
    private function setActualPage($actualPage) {
        $this->actualPage = $actualPage;
    }
    private function setOpen($open) {
        $this->open = $open;
    }
    private function setReader($reader) {
        $this->reader = $reader;
    }
    
    public function closeBook() {
        if($this->getOpen()){
            $this->setOpen(false);
        }else{
            echo '<span style="color: red;">'.$this->getReader().' o livro já está fechado!</span>';
        }        
    }
    public function nextPage() {
        if($this->getOpen()){
          if($this->getActualPage() <= $this->getTotPages()){
                $this->setActualPage($this->getActualPage()+1);
            }else{
                echo '<span style="color: red;">'.$this->getReader().' Impossível ir para a próxima página... <br>O livro acabou e será fechado!</span>';
                $this->setOpen(false);
            }  
        }else{
            echo '<span style="color: red;">'.$this->getReader().' o livro está fechado, abra-o.</span>';
        }        
    }
    public function openBook() {
        if(!$this->getOpen()){
            $this->setOpen(true);
        }else{
            echo '<span style="color: red;">'.$this->getReader().' o livro já está aberto!</span>';
        }
    }
    public function prevPage() {
        if($this->getOpen()){
            if($this->getActualPage() > 0){
                $this->setActualPage($this->getActualPage()-1);
            }else{
                echo '<span style="color: red;">'.$this->getReader().' Impossível voltar para a página anterior...</span>';
            } 
        }else{
            echo '<span style="color: red;">'.$this->getReader().' o livro está fechado, abra-o.</span>';
        }
        
    }
    public function previewOfRead($numPages) {
        if($numPages <= $this->getTotPages()){
            $this->setActualPage($numPages);
        }else{
            echo '<script>alert("'.$this->getReader().' Este número de página é o maior que o total de páginas.");</script>';
        }
        
    }
    
    public function bookDetails(){
        if($this->getOpen()){
            echo '<p>O leitor '.$this->getReader().' está lendo o livro '.$this->getTitle().' do autor '.$this->getAuthor().'.<br>'.
                'Está na página '.$this->getActualPage().' e o livro tem '.$this->getTotPages().' páginas.</p>';
        }else{
            echo '<p>O livro de '.$this->getReader().' está fechado!</p>';
        }
    }
}
