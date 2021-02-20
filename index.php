<h1>Intro to PHP</h1>
<h2>Boolean primitives comparison</h2>
<?php

echo '<pre>';
var_dump(0 == "a"); 
var_dump("1" == "01");
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true
echo '</pre>';
?>
<h2>Concatinating with .</h2>
<?php

$z1 = 'Whale';
$z2 = 'Snail';
$z3 = 'Bee';
$rand = rand(1, 3);

echo '<br>';
echo ${'z'.$rand};
echo '<br>';

?>
<h2>Constructing strings with sprintf()</h2>
<?php

$number = 5;
$location = 'tree';
$location2 = 'bush';

$format = 'There are %2$s monkeys in the %3$s and in the %1$s';
echo sprintf($format, $location, $number, $location2);
echo "<br><br><br>";

$amount1 = 68.75;
$amount2 = 54.35;
$total = $amount1 * $amount2;
echo "Regular output: $total.";
echo '<br>';
$formatted = sprintf("%0.3f", $total);
echo "Formatted output: $formatted.";

?>
<h2>Outdated encoding</h2>
<?php

echo 'md5: "password1" ';
echo md5('password1');
echo "<br><br><br>";
echo 'sha1: "citybee" ';
echo sha1('citybee');

?>
<h2>Loops</h2>
<?php

while(true) {
for ($i = 1; $i <= 15; $i++){
    if (rand(0, 10)> 9){
        echo 'Breaking the cycle <br><br>';
        break 2; //breaks the scope above
    }
    echo $i;
    echo '<br>';
  }
  echo 'Finished looping through. <br>';
}
?>
<h2>Double arrays</h2>
<?php

$array = [];
foreach(range(1, 10) as $index1 => $_) {
    foreach(range(1, 5) as $index2 => $_) {
        $array [$index1][$index2] = rand(5, 25);
    }
}

_dc($array);

usort($array, function($a, $b)
{
    return $a[0] <=> $b[0];
});
_dc($array);
?>
