
<?php //Author: Nicolas Coiado;
    class Triangulo{ //Criando a classe triangulo;
        private $base; //Criando a variável para a base do triângulo;
        private $altura; //Criando a variável para a altura do triângulo;
        private $area; //Criando a variável para a area do triângulo;
       
        //Getters:
        public function getAltura(){
            return $this->altura; 
        }

        public function getBase(){
            return $this->base; 
        }  

        public function getArea(){
            return $this->area; 
        }
        //Setters:
        public function setAltura($a){
             $this->altura = $a; 
        }
        public function setBase($b){
             $this->base = $b; 
        }
        public function setArea($ar){
            $this->area = $ar; 
        }

       
        public function area(){//Método que calaula a área;
            return ($this->getBase()*$this->getAltura()/2);
        }

        public function imprimir(){ //Método que exibe valores;
            echo "<p> Altura:".$this->getAltura()."</p>";
            echo "<p> Base".$this->getBase()."</p>";
            echo "<p> Area:".$this->getArea()."</p>";
        }
    }
?>