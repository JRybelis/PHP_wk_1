<h2>1. Array containing 10 other arrays, 5 random integer elements each.</h2>
<?php

$array1 = [];

foreach(range(1, 10) as $index1 => $_) {
    foreach(range(1, 5) as $index2 => $_) {
        $array1[$index1][$index2] = rand(5, 25);
    }
}
_dc($array1);

?>
<h2>2. Manipulating the array created in task 1.</h2>
<h3>a) Counting all elements with a value greater than 10.</h3>
<?php

$higherThan10 = 0;
foreach($array1 as $value1) {
    foreach($value1 as $value2) {
        if ($value2 > 10) {
            $higherThan10++;
        }
    }
}
echo "Amount of array elements with values higher than 10: $higherThan10.";
?>
<h3>b) Finding the element with the highest value.</h3>
<?php

$highestValueElement = 0;

foreach($array1 as $value1) {
    foreach ($value1 as $value2) {
        if ($value2 > $highestValueElement) {
            $highestValueElement = $value2;
        }
    }
}

echo "Highest value array member: $highestValueElement.";

?>
<h3>c) The sum of elements with the same index in the sub-arrays.</h3>
<?php

$sameIndexElementValueSum1 = 0;
$sameIndexElementValueSum2 = 0;
$sameIndexElementValueSum3 = 0;
$sameIndexElementValueSum4 = 0;
$sameIndexElementValueSum5 = 0;
$sameIndexElementArray1 = [];
$sameIndexElementArray2 = [];
$sameIndexElementArray3 = [];
$sameIndexElementArray4 = [];
$sameIndexElementArray5 = [];

foreach($array1 as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        switch ($key2){
            case 0: 
                $sameIndexElementArray1[] = $value2;
                break;
            case 1:
                $sameIndexElementArray2[] = $value2;
                break;
            case 2:
                $sameIndexElementArray3[] = $value2;
                break;
            case 3:
                $sameIndexElementArray4[] = $value2;
                break;
            case 4:
                $sameIndexElementArray5[] = $value2;
                break;
        }
    }
}

$sameIndexElementValueSum1 = array_sum($sameIndexElementArray1);
$sameIndexElementValueSum2 = array_sum($sameIndexElementArray2);
$sameIndexElementValueSum3 = array_sum($sameIndexElementArray3);
$sameIndexElementValueSum4 = array_sum($sameIndexElementArray4);
$sameIndexElementValueSum5 = array_sum($sameIndexElementArray5);

echo "The sum of the values of all the elements with index of 0 in the array: $sameIndexElementValueSum1. <br>";
echo "The sum of the values of all the elements with index of 1 in the array: $sameIndexElementValueSum2. <br>";
echo "The sum of the values of all the elements with index of 2 in the array: $sameIndexElementValueSum3. <br>";
echo "The sum of the values of all the elements with index of 3 in the array: $sameIndexElementValueSum4. <br>";
echo "The sum of the values of all the elements with index of 4 in the array: $sameIndexElementValueSum5. <br>";

?>
<h3>d) All sub-arrays extended by two elements.</h3>
<?php

foreach($array1 as $key1 => $value1) {
    for ($i = 0; $i < 2; $i++) {
        $array1[$key1][] = rand(5, 25);
    }
}

_dc($array1);

?>
<h3>e) New sub-array with values taken from the sums of all elements in original sub-arrays.</h3>
<?php

$arrayElementValueSum1 = 0;
$arrayElementValueSum2 = 0;
$arrayElementValueSum3 = 0;
$arrayElementValueSum4 = 0;
$arrayElementValueSum5 = 0;
$arrayElementValueSum6 = 0;
$arrayElementValueSum7 = 0;
$arrayElementValueSum8 = 0;
$arrayElementValueSum9 = 0;
$arrayElementValueSum10 = 0;
$array2 = [];
$array3 = [];

foreach($array1 as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        switch ($key1){
            case 0: 
                $arrayElementValueSum1 += $value2;
                break;
            case 1: 
                $arrayElementValueSum2 += $value2;
                break;
            case 2: 
                $arrayElementValueSum3 += $value2;
                break;
            case 3: 
                $arrayElementValueSum4 += $value2;
                break;
            case 4: 
                $arrayElementValueSum5 += $value2;
                break;            
            case 5: 
                $arrayElementValueSum6 += $value2;
                break;            
            case 6: 
                $arrayElementValueSum7 += $value2;
                break;            
            case 7: 
                $arrayElementValueSum8 += $value2;
                break;            
            case 8: 
                $arrayElementValueSum9 += $value2;
                break;            
            case 9: 
                $arrayElementValueSum10 += $value2;
                break;                        
        }
    }
}

$array2[] = $arrayElementValueSum1;
$array2[] = $arrayElementValueSum2;
$array2[] = $arrayElementValueSum3;
$array2[] = $arrayElementValueSum4;
$array2[] = $arrayElementValueSum5;
$array2[] = $arrayElementValueSum6;
$array2[] = $arrayElementValueSum7;
$array2[] = $arrayElementValueSum8;
$array2[] = $arrayElementValueSum9;
$array2[] = $arrayElementValueSum10;

$array3[] = $array2;
$array1 = array_merge($array1, $array3);

// _dc($arrayElementValueSum1);
// _dc($arrayElementValueSum2);
// _dc($arrayElementValueSum3);
// _dc($arrayElementValueSum4);
// _dc($arrayElementValueSum5);
// _dc($arrayElementValueSum6);
// _dc($arrayElementValueSum7);
// _dc($arrayElementValueSum8);
// _dc($arrayElementValueSum9);
// _dc($arrayElementValueSum10);
// _dc($array3);
// _dc($array2);
_dc($array1);
   

?>
<h3></h3>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>