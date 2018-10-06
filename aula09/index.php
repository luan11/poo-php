<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Book.php';
            
            $arr_peoples = [
                new People('Arnaldinho', 60, 'M'),
                new People('Mariana', 26, 'F'),
                new People('Sergio', 42, 'M')
            ];
            
            $arr_book = [];
            for($i = 0; $i <= (count($arr_peoples)-1); $i++){
                array_push($arr_book, new Book('Casa de Sol', 'Jorge Braga', 500, 0, true, $arr_peoples[$i]));
            }
            echo '<pre>';
            print_r($arr_book);
            echo '</pre>';
            
            
            $arr_book[0]->previewOfRead(499);
            $arr_book[1]->closeBook();
            $arr_book[2]->closeBook();
            
            for($i = 0; $i <= (count($arr_peoples)-1); $i++){
                echo '<div style="border-bottom: 1px solid #000;">';
                $arr_book[$i]->bookDetails();
                echo '</div>';
            }
        ?>
    </body>
</html>
