<?php
//var des messages codé
$message1="0@sn9sirppa@#?ia'jgtvryko1";
$message2="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3="aopi?sgnirts@#?sedhtg+p9l!";

echo strlen($message1)/2;
echo "<hr/>";
echo strlen($message2)/2;
echo "<hr/>";
echo strlen($message3)/2;
echo "<hr/>";

$chaine1= substr($message1,5,13);
$result1 = str_replace("@#?"," ","$chaine1");
echo strrev("$result1");
echo "<hr/>";
$chaine2= substr($message2,5,23);
$result2 = str_replace("@#?"," ","$chaine2");
echo strrev("$result2");
echo "<hr/>";
$chaine3= substr($message3,5,13);
$result3 = str_replace("@#?"," ","$chaine3");
echo strrev("$result3");

?>