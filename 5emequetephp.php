<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO
$indyWeapon = 'gun';

echo $opponentWeapon;
echo "<hr/>";


      if($indyWeapon=='gun' && $opponentWeapon=='whip'){echo "perdu";}
      elseif($indyWeapon=='fists' && $opponentWeapon=='gun'){echo "perdu";}
      elseif($indyWeapon=='whip' && $opponentWeapon=='fists'){echo "perdu";}
      elseif($indyWeapon=='gun' && $opponentWeapon=='fists'){echo "gagner";}
      elseif($indyWeapon=='fists' && $opponentWeapon=='whip'){echo "gagner";}
      elseif($indyWeapon=='whip' && $opponentWeapon=='gun'){echo "gagner";}
      elseif($indyWeapon=='gun' && $opponentWeapon=='gun'){echo "egalite";}
      elseif($indyWeapon=='whip' && $opponentWeapon=='whip'){echo "egalite";}
      elseif($indyWeapon=='fists' && $opponentWeapon=='fists'){echo "egalite";}

    



?>