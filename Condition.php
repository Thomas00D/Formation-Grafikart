<?php
$heure = readline('Entrer une heure :'); // demande a l'utilisateur 
if (($heure > 9 && $heure < 12) || ($heure > 14 && $heure < 17)) {
  echo 'Le magasin et ouvert';
} else {
  echo 'Le magasin et ferme';
}
?>