<?php 

    class Vehiculo {

        //propiedades del objeto
        //public, protected, private

        public string $color;
        protected int $numeroRuedas;
        public string $potencia;
        private string $marca;
        public $motorArrancado = false;
        public $velocidad;

        //la funcion constructor, es la que realiza la accion de contruir el objeto. Es la que llamamos con hacemos new Loquesea();

        public function __construct(string $pColor, int $pRuedas, string $pPotencia, string $pMarca){

            $this->color = $pColor;
            $this->numeroRuedas = $pRuedas;
            $this->potencia = $pPotencia;
            $this->marca = $pMarca;

        }

        public function arrancarMotor(){
            $this->motorArrancado = true;
        }

        public function acelerar($pVelocidad)
        {
            $this->velocidad += $pVelocidad;
        }

         public function frenar()
        {
            $this->velocidad -= 30;
        }

        //GETTER y SETTERS: los getters me permiten acceder a un dato protected o privado pero no modificarlo. Los setters me permite modificar un dato pero no leerlo.

        //GETTER
        public function getMarca(){
            //facilitan la posibilidad de leer este dato
            return $this->marca;
        }

        //SETTER

        public function setRuedas($pNumeroRuedas)
        {
            $this->numeroRuedas = $pNumeroRuedas;
        }

        //GETTER
        public function getRuedas(){
            return $this->numeroRuedas;
        }

    }




?>