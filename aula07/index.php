<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07/08</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $l = array(
                new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1),
                new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3),
                new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1),
                new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2),
                new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3),
                new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4)
                );
            
            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[4], $l[5]);
            $UEC01->lutar();
        ?>
        </pre>
    </body>
</html>
