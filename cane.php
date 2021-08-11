<?php

    class Cane extends Animale{
        private $nzampe;

        function __construct($peso,$colore,$nome,$razza, $nzampe){
            $this->nzampe = $nzampe;
            parent::__construct($peso,$colore,$nome,$razza);
        }

        function stampaDati(){
            echo "<br>".parent::stampa()." $this->nzampe";
        }

        function setPeso($peso){
            $this->peso = $peso;
        }
        
    }
?> 