<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso POO PHP | Aula 10</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            $p1->setNome('Leonor');
            $p1->setIdade(22);
            $p1->setSexo('M');
            
            $p2->setCurso('Engenharia');
            $p2->setMatricula(true);
            $p2->setNome('Carlos');
            $p2->setIdade(30);
            $p2->setSexo('M');
            
            $p2->fazerAniv();
            $p2->cancelarMatr();
            
            $p3->setEspecialidade('Matematica');
            $p3->setSalario(1700.50);
            $p3->setNome('Bianca');
            $p3->setIdade(26);
            $p3->setSexo('F');
            
            $p3->fazerAniv();
            $p3->receberAum(600.23);
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
        ?>
        </pre>
    </body>
</html>
