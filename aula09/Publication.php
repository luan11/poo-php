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
interface Publication {
    public function openBook();
    public function closeBook();
    public function previewOfRead($numPages);
    public function nextPage();
    public function prevPage();
}
