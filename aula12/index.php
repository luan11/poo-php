<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12</title>
    </head>
    <body>
        <?php
            require_once 'Peixe.php';
            require_once 'GoldFish.php';
            require_once 'Reptil.php';
            
            $fish = new Peixe();
            $fish_goldFish = new GoldFish();
            $reptil = new Reptil();
            
            $fish->locomover();
            $fish_goldFish->locomover();
            $reptil->locomover();
        ?>
    </body>
</html>
