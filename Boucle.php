<?php
/*
$chiffre = null;
while ($chiffre !== 10) {
  $chiffre = (int)readline('Entrer une chiffre : ');
}

echo 'Bravo vous avez gagner!'
*/

/*
for ($i = 0; $i < 10; $i++) { 
  echo "- $i \n";
}
*/

$notes = [10 , 15 , 20];
$eleves = [
  'cm1' => 'Jean',
  'cm2' => 'Marc'
];

/*
for ($i = 0; $i < 3; $i++) { 
  echo '- ' . $notes[$i] . "\n";
}
*/

/*
foreach ($notes as $notes) { 
  echo "- $notes \n";
}
*/

foreach ($eleves as $classe => $eleves) { 
  echo "$eleves est dans le classe $classe \n";
}


?>