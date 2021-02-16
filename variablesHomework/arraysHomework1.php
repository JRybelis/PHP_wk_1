<h2>1. Random integer array members.</h2>
<?php

$randomIntegersArray = [];

for ($i = 0; $i < 30; $i++) {
    array_push($randomIntegersArray, rand(5, 25));
}
print_r($randomIntegersArray);

?>
<h2>2. Picking through the array generated above:</h2>
<h3>a) Counting values higher than 10.</h3>
<?php

$higherThan10 = 0;

foreach ($randomIntegersArray as &$value) {
    if ($value > 10) {
        $higherThan10 ++;
    }
}
echo "Amount of array elements with values higher than 10: $higherThan10.";
unset($value);

?>
<h3>b) Highest value array element.</h3>
<?php

$highestValueElement = 0;

foreach ($randomIntegersArray as &$value) {
    if ($value > $highestValueElement) {
        $highestValueElement = $value;
    }
}
echo "Highest value array member: $highestValueElement.";
unset($value);

?>
<h3> c) Sum of all array element values.</h3>
<?php

$arrayElementValueSum = 0;
foreach ($randomIntegersArray as &$value) {
    $arrayElementValueSum += $value;
}

echo $arrayElementValueSum;
unset($value);

?>
<h3>d) Array with element index values subtracted from element values.</h3>
<?php

$mutatedArray = [];

foreach ($randomIntegersArray as $key => $value) {
// foreach (range($randomIntegersArray[0], $randomIntegersArray[29]) as &$value) {
    // $index = array_search($i, array_values($randomIntegersArray));
    array_push($mutatedArray, ($value - $key));
}
echo 'Original array: <br>';
print_r($randomIntegersArray);
echo '<br><br>';
echo 'Array with its index values subtracted from its element values: <br>';
print_r( $mutatedArray);

unset($value);
unset($key);

?>
<h3>e) Add 10 new elements to the original array.</h3>
<?php

foreach(range (1, 10) as $value) {
array_push($randomIntegersArray, rand(5, 25));
}
print_r($randomIntegersArray);
unset($value);

?>
<h3>f) Split the array into two. One contains the even index elements of the original array, while the other - the odd ones.</h3>
<?php

$oddElementsArray = [];
$evenElementsArray = [];

foreach ($randomIntegersArray as $key => $value) {
    if ($key % 2 === 0) {
        array_push($evenElementsArray, $value);
    } else {
        array_push($oddElementsArray, $value);
    }
}
echo 'Even-indexed elements from the original array: <br>';
print_r($evenElementsArray);
echo '<br><br>';
echo 'Odd-indexed elements from the original array: <br>';
print_r($oddElementsArray);

unset($value);
unset($key);

?>
<h3>g) Original array even-indexed elements replaced by 0, if their value exceeds 15.</h3>
<?php

// for ($i = 0; $i < count($randomIntegersArray); $i++) {
//     if ($randomIntegersArray[$i] % 2 === 0 && $randomIntegersArray[$i] > 15) {
//         $randomIntegersArray[$i] = 0;
//     }
foreach ($randomIntegersArray as $key => $value) {
    if ($key % 2 === 0 && $value > 15) {
        $randomIntegersArray[$key] = 0;
    }
  
}

echo 'Even-indexed elements with their values changed to 0, if they originally exceeded 15: <br>';
print_r($randomIntegersArray);

unset($value);
unset($key);

?>
<h3>h) The first array element with a value lower than 10.</h3>
<?php

$randomIntegersArray2 = [];

foreach (range(1, 40) as $value) {
    array_push($randomIntegersArray2, rand(5, 25));
}

print_r($randomIntegersArray2);
echo '<br><br>';

foreach ($randomIntegersArray2 as $key => $value) {
    if ($value < 10) {
        echo "The first array element with a value lower than 10 is number $key, at $value.";
        break;
    }
}

?>
<h3>i) Removing all equal index elements from the array.</h3>
<?php

foreach ($randomIntegersArray2 as $key => $value) {
    if ($key % 2 === 0) {
        unset($randomIntegersArray2[$key]);
    }
}
echo 'The array with its equal index elements removed: <br>';
print_r($randomIntegersArray2);

?>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>