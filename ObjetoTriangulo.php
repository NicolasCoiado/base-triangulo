<?php
    require_once 'Triangulo.php'; //Importando o arquivo com a classe Triangulo;

        $triangulo1 = new Triangulo();
        $triangulo1->setAltura($_GET['alt']);
        $triangulo1->setBase($_GET['base']);
        $triangulo1->imprimir();
    
?>