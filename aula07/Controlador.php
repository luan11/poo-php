<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Luan
 */
interface Controlador {
    public function apresentar();
    public function status();
    public function ganharLuta();
    public function perderLuta();
    public function empatarLuta();
    public function alterarPeso($peso);
}
