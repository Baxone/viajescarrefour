<?php 

    class Moto extends Vehiculo{

        protected $casco = "si";
        public $motor;
    
        public function __construct($pColor, $pRuedas, $pPotencia, $pMarca, $pMotor){
            $this->motor = $pMotor;
            parent::__construct($pColor, $pRuedas, $pPotencia, $pMarca);
        }

        public function hacerCaballito(){
            return "Brrrrrrrr";
        }

         public function getRuedas(){
            return "mi moto tiene tan solo ". $this->numeroRuedas;
        }

    }

?>