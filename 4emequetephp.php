<?php

$film=[
    "Indiana Jones and the last crusade"=>["Harrisson Ford","Kate Capshaw","Ke Huy Quan"],
    "Indiana Jones and the Temple of Doom"=>["Harrisson Ford","Sean Connery","Alison Doody"],
    "Indiana Jones and the Raiders of the Lost Ark"=>["Harrison Ford","Karen Allen","Paul Freeman"],
];
foreach($film as $title =>$actors){
    echo "<hr/>";
    echo "Dans le film ".$title .", les principaux acteurs sont : ";
    foreach( $actors as $actor ){
        echo "<li>$actor</li>";
   }}
 
?>