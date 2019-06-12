<?php

$nom = "Zing";
$prenom = "Etienne";
$age = 34;

$nom2 = "Parto";
$prenom2 = "Fred";
$age2 = 52;

function presentation($nom, $prenom, $age){
    var_dump("Bonjour, je suis $prenom $nom et j'ai $age ans");

}

presentation($nom, $prenom, $age);
presentation($nom2, $prenom2, $age2);