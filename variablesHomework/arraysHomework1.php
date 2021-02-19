<h2>1. Random integer array members.</h2>
<?php

$randomIntegersArray = [];

for ($i = 0; $i < 30; $i++) {
    array_push($randomIntegersArray, rand(5, 25));
}
print_r($randomIntegersArray);
_d($randomIntegersArray);


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
unset($value);
unset($key);

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
unset($value);
unset($key);

?>
<h2>3. Array made of randomly ocurring A, B, C & D.</h2>
<?php

$capitalLetterArray = [];
$letterACounter = 0;
$letterBCounter = 0;
$letterCCounter = 0;
$letterDCounter = 0;

foreach(range(1, 200) as &$value) {
    switch (rand(0, 3)) {
        case 0:
            array_push($capitalLetterArray, 'A');
            $letterACounter++;
            break;
        case 1:
            array_push($capitalLetterArray, 'B');
            $letterBCounter++;
            break;
        case 2:
            array_push($capitalLetterArray, 'C');
            $letterCCounter++;
            break;
        case 3:
            array_push($capitalLetterArray, 'D');
            $letterDCounter++;
            break;
    }
}
$stringifiedArray = implode(', ', $capitalLetterArray);
echo "$stringifiedArray <br><br>";
echo "There are $letterACounter letters A in the array. <br>";
echo "There are $letterBCounter letters B in the array. <br>";
echo "There are $letterCCounter letters C in the array. <br>";
echo "There are $letterDCounter letters D in the array. <br>";

unset($value);

?>
<h2>4. The task 3 array elements sorted alphabetically.</h2>
<?php

sort($capitalLetterArray, SORT_LOCALE_STRING);
$stringifiedArray = implode(', ', $capitalLetterArray);
echo "$stringifiedArray <br><br>";
// print_r($capitalLetterArray);

?>
<h2>5. Three arrays made as per task 3 requirements. All merged and unique pairings counted. </h2>
<?php

$capitalLetterArray2 = [];
$capitalLetterArray3 = [];
$capitalLetterArray4 = [];
$capitalLetterArrayCombined = [];
$uniquePairingsArray = [];

foreach(range(1, 200) as &$value) {
    switch (rand(0, 3)) {
        case 0:
            array_push($capitalLetterArray2, 'A');
            $letterACounter++;
            break;
        case 1:
            array_push($capitalLetterArray2, 'B');
            $letterBCounter++;
            break;
        case 2:
            array_push($capitalLetterArray2, 'C');
            $letterCCounter++;
            break;
        case 3:
            array_push($capitalLetterArray2, 'D');
            $letterDCounter++;
            break;
    }
}
foreach(range(1, 200) as &$value) {
    switch (rand(0, 3)) {
        case 0:
            array_push($capitalLetterArray3, 'A');
            $letterACounter++;
            break;
        case 1:
            array_push($capitalLetterArray3, 'B');
            $letterBCounter++;
            break;
        case 2:
            array_push($capitalLetterArray3, 'C');
            $letterCCounter++;
            break;
        case 3:
            array_push($capitalLetterArray3, 'D');
            $letterDCounter++;
            break;
    }
}
foreach(range(1, 200) as &$value) {
    switch (rand(0, 3)) {
        case 0:
            array_push($capitalLetterArray4, 'A');
            $letterACounter++;
            break;
        case 1:
            array_push($capitalLetterArray4, 'B');
            $letterBCounter++;
            break;
        case 2:
            array_push($capitalLetterArray4, 'C');
            $letterCCounter++;
            break;
        case 3:
            array_push($capitalLetterArray4, 'D');
            $letterDCounter++;
            break;
    }
}

foreach(range(0, 199) as &$value) {
    $elementPairing = $capitalLetterArray2[$value].$capitalLetterArray3[$value].$capitalLetterArray4[$value];
    if (!$capitalLetterArray4[$value]) {
        $elementPairing = $capitalLetterArray2[$value].$capitalLetterArray3[$value];
    }
    array_push($capitalLetterArrayCombined, $elementPairing);
}

 
// Option 1: looping through to filter out repeating values. 
foreach ($capitalLetterArrayCombined as $value) {
    if (!in_array($value, $uniquePairingsArray)) {
        array_push($uniquePairingsArray, $value);
    }
}
// Option 2: function that assigns unique values to a new array
$filter = array_unique($capitalLetterArrayCombined, SORT_STRING);

echo 'Unique combinations from the three arrays: ';
echo count($filter);
echo '<br>'; 

echo 'Unique combinations from the three arrays: ';
echo count($uniquePairingsArray);
echo '<br>';
print_r($uniquePairingsArray);

unset($value);
unset($key);

?>
<h2>6. 2 arrays with unique elements.</h2>
<?php

$uniqueValuesArray1 = [];
$uniqueValuesArray2 = [];

while (count($uniqueValuesArray1) < 100) {
    $randomElement = rand(100, 999);
    if (!in_array($randomElement,$uniqueValuesArray1)){ 
    array_push($uniqueValuesArray1, $randomElement);
    }
}
while (count($uniqueValuesArray2) < 100) {
    $randomElement = rand(100, 999);
    if (!in_array($randomElement,$uniqueValuesArray2)){ 
    array_push($uniqueValuesArray2, $randomElement);
    }
}
echo '<pre>';
echo count($uniqueValuesArray1);
echo '<br>';
echo count($uniqueValuesArray2);
echo '<br>';
// print_r(array_count_values($uniqueValuesArray1)); to check if any repeating values slipped through
echo '<br>';
// print_r(array_count_values($uniqueValuesArray2)); to check if any repeating values slipped through
echo '</pre>';

?>
<h2>7. Array containing unique elements from the first task 6 array, which are not found in the second task 6 array.</h2>
<?php

$uniqueValuesArray3 = array_diff($uniqueValuesArray1, $uniqueValuesArray2);
print_r($uniqueValuesArray3);

?>
<h2>8. Array containing repeating elements in both arrays from task 6.</h2>
<?php

$repeatingValuesArray = array_intersect($uniqueValuesArray1, $uniqueValuesArray2);
print_r($repeatingValuesArray);

?>
<h2>9. Array containing element values from the first task 6 array as indexes, and element values from the second task 6 array as values.</h2>
<?php

$combinedArray = array_combine($uniqueValuesArray1, $uniqueValuesArray2);
echo '<pre>';
print_r($combinedArray);

?>
<h2>10. Array consisting of a fibonacci sequence.</h2>
<?php

$number1 = rand(5, 25);
$number2 = rand(5, 25);
$number3 = 0;
$iterator = 0;
$fibonacciArray = [];

while ($iterator < 10) {
    if ($number1 > $number2) {
        $temp = $number1;
        $number1 = $number2;
        $number1 = $temp;
    }
    array_push($fibonacciArray, $number1);
    $number3 = $number2 + $number1;
    $number1 = $number2;
    $number2 = $number3;
    $iterator ++;
}
echo '<pre>';
print_r($fibonacciArray);

?>
<h2>Extra credit: random array with highest value in the middle, other elements descending towards the edges.</h2>
<?php

$randomIntegersArray = [];
$xArray = [];
$xAxisNegativeArray = [];
$xAxisPositiveArray = [];
$highestValueElement = 0;
$arrayMiddlePosition = 0;
$iterator = 0;

while (count($randomIntegersArray) < 101) {
    $randomElement = rand(0, 300);
    if (!in_array($randomElement, $randomIntegersArray)){
        $randomIntegersArray[] = $randomElement;
    }
}

$arrayMiddlePosition = ceil(count($randomIntegersArray)/2);

foreach ($randomIntegersArray as &$value) {
    if ($value > $highestValueElement) {
        $highestValueElement = $value;
    }
}

$xArray[51] = $highestValueElement;
sort($randomIntegersArray);
array_pop($randomIntegersArray);


foreach ($randomIntegersArray as $key => &$value) {
    if ($key % 2 == 0) {
        $xAxisNegativeArray[] = $value;
    } else {
        $xAxisPositiveArray[] = $value;
    }
}

rsort($xAxisNegativeArray); // goes to the left of the highest element, but due to array_unshift prepending starting with its first index, this mus be in reverse order to ascend to the highest element in the middle.
sort($xAxisPositiveArray);

do {
    $temp = $xAxisNegativeArray[$iterator];
    $xAxisNegativeArray[$iterator] = $xAxisPositiveArray[count($xAxisPositiveArray) - 1 - $iterator];
    $xAxisPositiveArray[count($xAxisPositiveArray) - 1 - $iterator] = $temp;
    $iterator++; 
} while (abs(array_sum($xAxisNegativeArray) - array_sum($xAxisPositiveArray)) > 30);

foreach ($xAxisNegativeArray as $key => &$value) {
    array_unshift($xArray, $value);
}

$xArray = array_merge($xArray, array_reverse($xAxisPositiveArray));

echo 'The difference between the sum of elements of the two ends of the array: ';
echo abs(array_sum($xAxisNegativeArray) - array_sum($xAxisPositiveArray));
echo '<br>';
_dc($randomIntegersArray);
echo '<br>';
_dc($xArray);

?>
