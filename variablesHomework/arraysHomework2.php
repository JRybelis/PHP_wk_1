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

unset($key1, $key2, $value1, $value2);
?>
<h3>d) All sub-arrays extended by two elements.</h3>
<?php

foreach($array1 as $key1 => $value1) {
    for ($i = 0; $i < 2; $i++) {
        $array1[$key1][] = rand(5, 25);
    }
}

_dc($array1);
unset($key1, $value1);
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
   
unset($key1, $key2, $value1, $value2);

?>
<h2>3. Nested array of random chars, sorted alphabetically.</h2>
<?php

$alphabetUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < rand(2, 20); $j++) {
        $charArray1[$i][$j] = $alphabetUppercase[rand(0,25)];
    }    
}   

foreach ($charArray1 as $key1 => $value1) {
    sort($charArray1[$key1],SORT_STRING);
}

_dc($charArray1);
?>
<h2>4. The array of the 3rd task sorted so that shortest sub-arrays are at the top.</h2>
<?php

sort($charArray1);
_dc($charArray1);

unset($key1, $value1);

?>
<h2>5. Theatre tickets array.</h2>
<?php

$theatreTicketArray = [];


for ($i = 0; $i < 30; $i++){
    $userID = rand(1,1000000);
    $placeInRow = rand(0,100);
    if (!in_array($userID, $theatreTicketArray)) {
        $theatreTicketArray[$i] = ['user_id' => $userID, 'place_in_row' => $placeInRow];
    } else {
        $userID = rand(1, 1000000);
        if (!in_array($userID, $theatreTicketArray)) {
            $theatreTicketArray[$i] = ['user_id' => $userID, 'place_in_row' => $placeInRow];
        }
    }
}
_dc($theatreTicketArray);
?>
<h2>6. The array of the 5th task sorted ascending by user_id and descending by place_in_row.</h2>
<?php

function idSort($x, $y) {
    if ($x == $y) {
        return 0;
    }
    return ($x > $y) ? 1 : -1; // ascending
}

usort($theatreTicketArray, 'idSort');
_dc($theatreTicketArray);

usort($theatreTicketArray, function($x, $y) {
    return $y['place_in_row'] <=> $x['place_in_row']; // descending
});
_dc($theatreTicketArray);

?>
<h2>7. Append the array of the 5th task with name and surname sub-arrays.</h2> 
<?php

foreach($theatreTicketArray as $key1 => $value1) {
        $alphabetLowerCase = 'qwertyuiopasdfghjklzxcvbnm';    
        $theatreTicketArray[$key1] += ['name' => substr(str_shuffle($alphabetLowerCase), 0, rand(5, 15))];
        $theatreTicketArray[$key1] += ['surname' => substr(str_shuffle($alphabetLowerCase), 0, rand(5, 15))];
}
_dc($theatreTicketArray);
    
unset($key1, $value1);

?>
<h2>8. Array of 10 elements, sub-elements randomly determined be arrays or not.</h2>
<?php

$randomArray = [];

for ($i = 0; $i < 10; $i++) {
    $subArrayChance = rand(0, 5);
    echo $subArrayChance.'<br>';
    if (rand(0, 5) == 0) {
        $randomArray[] = rand(0, 10);
    } else {
        for ($j = 0; $j < $subArrayChance; $j++) {
            $randomArray[$i][$j] = rand(0, 10);
        }
    }
}

_dc($randomArray);


?>
<h2>9. New single-dimentional array, elements from array 8 (all sub-arrays' elements summed into one). </h2>
<?php

$newArray = [];

foreach ($randomArray as &$value1) {
    if (is_array($value1)) {
        $value1 = array_sum($value1);
        $newArray[] = $value1;
    } else {
        $newArray[] = $value1;
    }
}

sort($newArray);
_dc($newArray);

?>
<h2>10. A multi-dimentional array, which provides values for a generation of a square.</h2>
<?php

$squareDataArray = [];

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $randomSymbol = '#%+*@裡';
        $randomColor = '#'.substr(str_shuffle(str_repeat('abcdef0987654321', 1)), 0, 6);
        $squareDataArray[$i][$j] = ['value' => substr(str_shuffle($randomSymbol), 0, 1), 'color' => $randomColor]; 
    }
}
// _dc($squareDataArray);

for ($i = 0; $i < count($squareDataArray); $i++) {
    for ($j = 0; $j < count($squareDataArray[$i]); $j++) {
        print_r("<span style = 'display: inline-block; height: 5px; width: 5px; padding-left: 35px; line-height: 80%; color: ".$squareDataArray[$i][$j]['color'].";>". $squareDataArray[$i][$j]['value']."</span>");
    }
    echo '<br><br>';
}
        
?>
<h2></h2>