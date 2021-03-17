<?php 

function writeSecretSentence(string $parametre_1,string $parametre_2):string{
    
    $secret ="$parametre_1 s'incline face au $parametre_2";
    return $secret;
}

$parametre_1= "la lune";
$parametre_2= "le soleil";
echo writeSecretSentence($parametre_1,$parametre_2);
?>


