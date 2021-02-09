<h1>Labas, zuiki. Ka tu? </h1>

<?php

echo 100 + 333;

?>

<?php
$kintamasis = 12;
echo $kintamasis;

echo '<br>';

var_dump(0 == "a"); 
var_dump("1" == "01");
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true


?>

<?php
$z1 = 'Banginis';
$z2 = 'Lape';
$z3 = 'Gaidys';
$rand = rand(1, 3);

echo '<br>';
echo ${'z'.$rand}

?>

<h1>Normaliai</h1>

