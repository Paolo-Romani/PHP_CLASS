<?php

    require_once ("Animale.php");
    require_once ("cane.php");
    $animale = new Animale(100,"giallo","leone","felino");

    $stato = $animale->stampa();
    echo $stato;
    $razza = $animale->get_razza();
    echo "<br> razza: $razza";
    echo "<br>nome: $animale->nome";

    $animale->set_peso(250);
    echo "<br> peso: ".$animale->get_peso();
    
    $a = "100";
    $b = 100;
    print '<br> if(100 === "100") --> ';
    if(100 === "100")
        echo "true";
    else
        echo "false";

//    echo "<br>dal programma primcipale tipo: ".Animale::$tipo;

    //assegno un valore a tipo
    Animale::set_tipo("Carnivoro");
    Animale::stampa_tipo();

echo "<br><br><br>";
    //CANE
    $birillo = new Cane(55,"bianco","birillo","dogo",4);

    $birillo->stampaDati();
