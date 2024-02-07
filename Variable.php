<?php
$prenon = 'Thomas';
$nom = 'Doe';
$note1 = 10;
$note2 = 15;

echo 'Bonjour ' . $prenon . ' ' .  $nom . ' vous avez ' . (($note1 + $note2) / 2)  . ' de moyenne';
?>




<?php
$prenon = 'Thomas';
$nom = 'Doe';
$note1 = 10;
$note2 = 15;
$moyenne = ($note1 + $note2) / 2;

echo "Bonjour $prenon $nom vous avez $moyenne de moyenne";
?>