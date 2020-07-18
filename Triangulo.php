
<?php //Author: Nicolas Coiado;
    class Triangulo{ //Criando a classe triangulo;
        private $base; //Criando a variável para a base do triângulo;
        private $altura; //Criando a variável para a altura do triângulo;
       
        //Getters:
        public function getAltura(){
            return $this->altura; 
        }

        public function getBase(){
            return $this->base; 

        //Setters:
        public function setAltura($a){
             $this->altura = $a; 
        }
        public function setBase($b){
             $this->base = $b; 
        }
       
        function area(){//Método que calaula a área;
            return ($this->getBase()*$this->getAltura()/2);
        }

        function imprimir(){ //Método que exibe valores;
            echo "<p> Altura:".$this->altura()."</p>";
            echo "<p> Base".$this->base()."</p>";
            echo "<p> Area:".$this->area()."</p>";
        }
    }
?>