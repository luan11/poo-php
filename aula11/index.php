<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP POO | Aula 11</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            
            $v = new Visitante();
            $v->setNome("Paulo");
            $v->setIdade(38);
            $v->setSexo("M");            
            print_r($v);
            
            $a = new Aluno();
            $a->setNome("Ricardo");
            $a->setIdade(23);
            $a->setSexo("M");
            $a->setCurso("ADS");
            $a->setMatricula(502036);
            $a->pagMensa();            
            print_r($a);
            
            $ab = new Bolsista();
            $ab->setNome("Jubileu");
            $ab->setIdade(29);
            $ab->setSexo("M");
            $ab->setCurso("SIS");
            $ab->setMatricula(502326);
            $ab->setBolsa(12.5);
            $ab->pagMensa();            
            print_r($ab);
        ?>
        </pre>
    </body>
</html>
