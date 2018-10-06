<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of People
 *
 * @author Luan
 */
class People {
    private $name;
    private $age;
    private $sex;
    
    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    
    public function getName() {
        return $this->name;
    }

    protected function getAge() {
        return $this->age;
    }

    protected function getSex() {
        return $this->sex;
    }

    protected function setName($name) {
        $this->name = $name;
    }

    protected function setAge($age) {
        $this->age = $age;
    }

    protected function setSex($sex) {
        $this->sex = $sex;
    }
        
    public function happyBirthday($moreAge){
        $this->setAge($this->getAge() + $moreAge);
    }
}
