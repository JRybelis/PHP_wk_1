<h1>1.Function that sends its arguments to html h1 tag.</h1>
<?php

function headlineGenerator ($headline) {
    return "<h1 style='color: crimson'>$headline</h1>";
}
echo headlineGenerator('Scandinavian comfort food');

?>
<h1>2. Function that sends its arguments to a random headline tag.</h1>
<?php

function headlineGenerator2 ($headline, $headlineSize) {
    return "<h$headlineSize style='color: crimson'>$headline</h$headlineSize>";
}

echo headlineGenerator2('A modern way to cook.', rand(1, 6));

?>
<h1>3. </h1>
<?php



?>
<h1>4. Function that finds the amount of whole numbers its argument can be divided by, without a remainder.</h1>
<?php

function countDividers(int $wholeNumber) {
    $dividers = [];
    $wholeNumber = intval(abs($wholeNumber));
    for ($i=2; $i < $wholeNumber; $i++) { 
        if ($wholeNumber % $i === 0) {
            $dividers[] = $i;
        }
    }
    return ['wholeNumber' => $wholeNumber, 'count' => count($dividers), 'dividers' => $dividers];
}

$functionResult = countDividers(rand(-110, 110));
// _dc($functionResult);
echo $functionResult['count'] == 0 ? 'Number '.$functionResult['wholeNumber'].' is either 0, 1, or a prime.' : 'Number '.$functionResult['wholeNumber'].' can be divided by '.$functionResult['count'].' numbers without any remainder: ['.implode(',',$functionResult['dividers']).']';

?>
<h1>5. Array elements sorted by the amount of dividers without remainder for its elements.</h1>
<?php

$array1 = [];

for ($i= 0; $i < 100 ; $i++) { 
    $array1[] = rand(33, 77);
}

echo 'Before sorting:';
_dc($array1);
usort($array1, function($x, $y){
    return countDividers($x) <=> countDividers($y);
});
echo 'After sorting:';
_dc($array1);

?>
<h1>6. Array with prime number elements removed.</h1>
<?php

$array2 = [];

for ($i=0; $i < 100; $i++) { 
    $array2[] = rand(333, 777);     
}

echo 'Before removal';
_dc($array2);

foreach ($array2 as $key => $value) {
    if (countDividers($array2[$key]) == 0) { 
        unset($array2[$i]);
    }
}

echo 'After removal';
_dc($array2);

unset($key, $value);

?>
<h1>7. </h1>
<?php

$recursiveArray = [];

function recursiveArrayGenerator($arrayDepth) {
    $arrayLength = rand(10, 20);
    for ($i=0; $i < $arrayLength - 1; $i++) { 
        $recursiveArray[] = rand(0, 10);
    }
    if ($arrayDepth > 0) {
        $recursiveArray[$arrayLength - 1] = recursiveArrayGenerator(--$arrayDepth);
    } elseif ($arrayDepth == 0) {
        $recursiveArray[$arrayLength - 1] = 0;
        // return $recursiveArray;
    }
    return $recursiveArray;
}


$generateArray = recursiveArrayGenerator(rand(10, 30));
_dc($generateArray);

?>
<h1>8. Sum of all the non-array elements of the array from the task 7.</h1>
<?php

function recursiveArrayPrimitiveElementSum($anyArray) {
    $elementSum = 0;
    foreach ($anyArray as $arrayElement) {
        if (!is_array($arrayElement)) {
            $elementSum += $arrayElement;
        } else {
            $elementSum += recursiveArrayPrimitiveElementSum($arrayElement);
        }
    }
    return $elementSum;
}
_dc(recursiveArrayPrimitiveElementSum($generateArray));

?>
<h1>9. A Function to create a dynamic array that contains only non-prime numbers. First prime number it generates, breaks the function.</h1>
<?php

function dynamicArrayGenerator($element) {
    $dynamicArray = [];
    $arrayLength = 3;
    for ($i=0; $i < $arrayLength ; $i++) { 
        $dynamicArray[] = $element;
    }
    foreach ($dynamicArray as $key => $value) {
        if (!gmp_prob_prime($dynamicArray[$key])) {
            $element;
            $dynamicArray[] = $element;
        } else {
            break;
        }
    // foreach ($dynamicArray as $key => $value) {
    //     while (!gmp_prob_prime($dynamicArray[$key])) {
    //         $dynamicArray[] += $element;
    //     } 
    // }
    
    }
    return $dynamicArray;
}
$result = dynamicArrayGenerator(rand(1,33));
_dc($result);

?>
<h1>10. Recursive function generated array with shifting values.</h1>
<?php

$shiftingArray = [];

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $shiftingArray[] = rand(1, 100); 
    }
    return $shiftingArray;
}

function arrayElementMeanValueChecker($meanThreshold) {
    $primeElementSum = 0;
    $primeElementCounter = 0;
    $lowestValueElement = 100;
    global $shiftingArray;
    foreach ($shiftingArray as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if ($value2 < $lowestValueElement) {
                $lowestValueElement = $value2;
            }
            if ($key2 == gmp_prob_prime($shiftingArray[$key][$key2])) {
                $primeElementSum += $key2;
                $primeElementCounter++;
            }
        }
    }
    if ($primeElementSum / $primeElementCounter < $meanThreshold) {
        $lowestValueElement += 3;
        // $primeElementSum += arrayElementMeanValueChecker($meanThreshold);
    }
}

$result2 = arrayElementMeanValueChecker(70);

?>
<h1>11. </h1>
<?php
?>