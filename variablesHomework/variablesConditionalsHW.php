<h2>1. Date of birth calculation</h2>
<?php

$userFirstName = 'Jokubas';
$userLastName = 'Rybelis';
$userBirthYear = '1989';
$currentYear = '2021';

$age = $currentYear -$userBirthYear;

echo "I am $userFirstName $userLastName. I am $age years old.";

?>
<h2>2. Division</h2>
<?php
$number1 = rand(0, 4);
$number2 = rand(0, 4);
$divisionResult = 0;

if ($number1 > $number2) {
    if ($number2 != 0) {
    $divisionResult = $number1 / $number2;
    echo "The division of $number1 and $number2 equals ";
    echo number_format($divisionResult, 2).'.';
    } else {
        echo "It is forbidden to divide by 0!"; 
    }
} elseif ($number1 < $number2) {
    if ($number1 != 0) {
    $divisionResult = $number2 / $number1;
    echo "The division of $number2 and $number1 equals ";
    echo number_format($divisionResult, 2).'.';
    } else {
        echo "It is forbidden to divide by 0!"; 
    }
} else {
    if ($number2 != 0) {
    $divisionResult = $number1 / $number2;
    echo "Both numbers $number1 & $number2 are equal. Their division result is $divisionResult.";
    } else {
        echo "It is forbidden to divide by 0!"; 
    }
}

?>
<h2>3. Middle amount detection</h2>
<?php

$lemonGrams = rand(0, 25);
$honeyGrams = rand(0, 25);
$gingerGrams = rand(0, 25);

if (($lemonGrams <= $honeyGrams && $lemonGrams >= $gingerGrams) || ($lemonGrams <= $gingerGrams && $lemonGrams >= $honeyGrams)) {
    print_r("The amount of lemon in the remedy is $lemonGrams grams.");
} elseif (($honeyGrams <= $lemonGrams && $honeyGrams >= $gingerGrams) ||($honeyGrams <= $gingerGrams && $honeyGrams >= $lemonGrams)) {
    print_r("The amount of honey in the remedy is $honeyGrams grams.");
} else {
    print_r("The amount of ginger in the remedy is $gingerGrams grams.");
}

?>

<h2>4. Forming a triangle</h2>
<?php

$edgea = rand(1, 10);
$edgeb = rand(1, 10);
$edgec = rand(1, 10);
$isValidTriangle = false;

if ($edgea + $edgeb <= $edgec || $edgea + $edgec <= $edgeb || $edgeb + $edgec <= $edgea) {
    $isValidTriangle = false;
    print_r("The edges $edgea, $edgeb and $edgec cannot form a triangle.");
} else {
    $isValidTriangle = true;
    print_r("The edges $edgea, $edgeb and $edgec can form a triangle.");
}

?>
<h2>5. Digit counter</h2>
<?php

$digit1 = rand(0, 2);
$digit2 = rand(0, 2);
$digit3 = rand(0, 2);
$digit4 = rand(0, 2);
$zerothDigit = 0;
$firstDigit = 0;
$secondDigit = 0;

if ($digit1 == 0) {
    $zerothDigit++;
}  
if ($digit2 == 0) {
    $zerothDigit++;
} 
if ($digit3 == 0) {
    $zerothDigit++;
} 
if ($digit4 == 0) {
    $zerothDigit++;
} 
if ($digit1 == 1) {
    $firstDigit++;
} 
if ($digit2 == 1) {
    $firstDigit++;
} 
if ($digit3 == 1) {
    $firstDigit++;
} 
if ($digit4 == 1) {
    $firstDigit++;
} 
if ($digit1 == 2) {
    $secondDigit++;
} 
if ($digit2 == 2) {
    $secondDigit++;
} 
if ($digit3 == 2) {
    $secondDigit++;
}
if ($digit4 == 2) {
    $secondDigit++;
}
print_r("There are $zerothDigit zeroes, $firstDigit ones and $secondDigit twos in the set of digits.");

?>
<h2>6. Random header selector </h2>
<?php

$headerSelector = rand(1, 6);

echo "<h{$headerSelector}> The result is h{$headerSelector}</h{$headerSelector}>.";

?>
<h2>7. Number colour filter</h2>
<?php

$num1 = rand(-10, 10);
$num2 = rand(-10, 10);
$num3 = rand(-10, 10);
echo "<ul></ul>";

if ($num1 < 0) {
    echo "<li style ='color: green;'> Number one: {$num1}</li>.";
} 
if ($num1 == 0) {
    echo "<li style ='color: red;'> Number one: {$num1}</li>.";
}
if ($num1 > 0) {
    echo "<li style ='color: blue;'> Number one: {$num1}</li>.";
}
if ($num2 < 0) {
    echo "<li style ='color: green;'> Number two: {$num2}</li>.";
} 
if ($num2 == 0) {
    echo "<li style ='color: red;'> Number two: {$num2}</li>.";
}
if ($num2 > 0) {
    echo "<li style ='color: blue;'> Number two: {$num2}</li>.";
}
if ($num3 < 0) {
    echo "<li style ='color: green;'> Number three: {$num3}</li>.";
} 
if ($num3 == 0) {
    echo "<li style ='color: red;'> Number three: {$num3}</li>.";
}
if ($num3 > 0) {
    echo "<li style ='color: blue;'> Number three: {$num3}</li>.";
}

?>
<h2>8. Candles price</h2>
<?php 

$candlesOrder = rand(5, 3000);
$candlesPriceStandard = 1;
$candlesPriceTierOneDiscount = $candlesPriceStandard * 0.97;
$candlesPriceTierTwoDiscount = $candlesPriceStandard * 0.96;
$orderTotal = 0;

if ($candlesOrder <= 1000) {
    $orderTotal = $candlesOrder * $candlesPriceStandard;
} elseif ($candlesOrder > 1000 && $candlesOrder <= 1940 ) {
    $orderTotal = $candlesOrder * $candlesPriceTierOneDiscount;
} else {
    $orderTotal = $candlesOrder * $candlesPriceTierTwoDiscount;
}

echo "The purchase of $candlesOrder candles comes at €$orderTotal."

?>
<h2>9. Mean value of three integers</h2>
<?php

$integer1 = rand(0, 100);
$integer2 = rand(0, 100);
$integer3 = rand(0, 100);
$mean1 = round(($integer1 + $integer2 + $integer3) / 3);
$mean2 = 0;

if ($integer1 < 10 || $integer1 > 90) {
    $mean2 = round(($integer2 + $integer3) / 2);
}
if ($integer2 < 10 || $integer2 > 90) {
    $mean2 = round(($integer1 + $integer3) / 2);
}
if ($integer3 < 10 || $integer3 > 90) {
    $mean2 = round(($integer1 + $integer2) / 2);
}
if (($integer1 < 10 || $integer1 > 90) && ($integer2 < 10 || $integer2 > 90)) {
    $mean2 = $integer3;
}
if (($integer1 < 10 || $integer1 > 90) && ($integer3 < 10 || $integer3 > 90)) {
    $mean2 = $integer2;
}
if (($integer2 < 10 || $integer2 > 90) && ($integer3 < 10 || $integer3 > 90)) {
    $mean2 = $integer1;
}

echo "The mean value of integers $integer1, $integer2 and $integer3 is $mean1.";
echo "<br>";
echo "The mean value of integers $integer1, $integer2 and $integer3, which are no lower than 10 and no higer than 90, is $mean2.";

?>
<h2>10. Digital clock timestamp </h2>
<?php

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
echo "The clock originally logged $hours hours, $minutes minutes, $seconds seconds.";

$addedTime = rand(0, 300);
$newSeconds = $seconds + $addedTime;

if ($newSeconds > 59 && $newSeconds <= 119) {
    $minutes++;
}
if ($newSeconds > 119 && $newSeconds <=179) {
    $minutes += 2;
}
if ($newSeconds > 179 && $newSeconds <=239) {
    $minutes += 3;
}
if ($newSeconds > 239 && $newSeconds <=299) {
    $minutes += 4;
}
if ($newSeconds > 299 && $newSeconds <=359) {
    $minutes += 5;
}
if ($minutes > 59) {
    $minutes -= 60; 
    $hours++;
}
if ($hours > 23) {
    $hours -= 24;
}

echo "<br>";
$seconds = $newSeconds % 60;
echo "The clock updated its log to $hours hours, $minutes minutes, $seconds seconds.";

?>
<h2>11</h2>





