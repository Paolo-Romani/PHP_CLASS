<?php
declare(strict_types=1);

    class Animale{
        private $peso = 0;
        private $colore = "no colore";
        public $nome = "no nome";
        protected $razza = "no razza";
        private static $tipo = "no tipo";

        function __construct($peso,$colore,$nome,$razza){
            $this->peso = $peso;
            $this->colore = $colore;
            $this->nome = $nome;
            $this->razza = $razza;
        }

        static function set_Tipo($tipo){
            Animale::$tipo = $tipo;
        }
        static function stampa_tipo(){
            print "<br>tipo: ".Animale::$tipo;
        }

        function set_peso($peso){
            $this->peso = $peso;
        }

        function get_peso():int{
            return $this->peso;
        }

        function get_razza():string{
            return $this->razza;
        }

        function stampa():string{
            return "caratteristiche animale: $this->peso,  
                                            $this->colore, 
                                            $this->nome, 
                                            $this->razza";
        }
    }
?>