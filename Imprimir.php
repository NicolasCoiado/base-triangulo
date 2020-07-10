<?php
    require_once 'Triangulo.php'; //Importando o arquivo para o 
       
        $triangulo1 = new Triangulo(); //Criando um novo objeto;
        $triangulo1->setAltura($_GET['alt']); //Settando a altura;
        $triangulo1->setBase($_GET['base']); //Settando a base;
        $triangulo1->Area(($_GET['base']*$_GET['alt'])/2); //Settando a área com o método criado;
     
            echo "Altura:".$triangulo1->getAltura() . "<br/>"; //Exibindo a altura;
            echo "Base:".$triangulo1->getBase() . "<br/>"; //Exibindo a base;
            echo "Área:".$triangulo1->getArea(). "<br/>"; //Exibindo a área;
            echo "Área: (".$triangulo1->getAltura() . "*" . $triangulo1->getBase().")/2 =".$triangulo1->getArea(); //Exibindo a fórmula da área;
?>