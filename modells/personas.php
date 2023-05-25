<?php
        class personas {
            private $nombre;
            protected $edad;
            private static $nombreAux;

            public function __constructor($nombre,$edad){
                $this->nombre = $nombre;
                $this->edad = $edad;
                self::$nombreAux = $nombre;
            }
            public function getNombre() {
                return $this->nombre;
            }
            public function setNombre($nombre){
                $this->nombre = $nombre;
                self::$nombreAux = $nombre;
            }
            public function getEdad() {
                return $this->edad;
            }
            public function setEdad($edad){
                $this->edad = $edad;
        }
        private function saludar(){
            return '<br></br>'
        }
    }
?>