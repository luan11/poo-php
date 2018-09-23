<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 | POO PHP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            // $c1 = new Caneta();
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("Faber", "Vermelho", 1);
            
            print_r($c1);
            print_r($c2);
            
            /* $c1->setModelo("Bic");
            $c1->setPonta(0.5);
            
            echo "Eu tenho uma caneta: ".$c1->getModelo()." com a ponta: ".$c1->getPonta(); */
        ?>
        </pre>
    </body>
</html>
