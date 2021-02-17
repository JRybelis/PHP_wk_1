<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops homework</title>
</head>
<body>
<h2>1. A fixed 400-symbol-long line of asterixes.</h2>
<?php

$asteriskLineLength = 400;

for ($i = 1; $i <= $asteriskLineLength;  $i++) {
    echo '<span>*</span>';
    
}

?>
<h3>a) Wrap string, according to user screen width. </h3>
<?php

for ($i = 1; $i <= $asteriskLineLength;  $i++) {
    echo "<span style ='overflow-wrap: anywhere' >*</span>";
}   

?>
<h3>b) Wrap string at every 50 symbols.</h3>
<?php

$asteriskLineBreakpoint = 50;

for ($i = 1; $i <= $asteriskLineLength/$asteriskLineBreakpoint;  $i++) {
    for($j = 1; $j <= $asteriskLineBreakpoint; $j++) {
        echo '<span>*</span>';
    }
        echo '<br>';
}

?>
<h2>2. 300 random numbers, values higher than 275 displayed in red.</h2>
<?php

$numberGenerator = [];
$highNumberGenerator = [];
$amountOfCycles = 300;
$numbersExceeding150 = 0;
$randomNumber = 0;

for ($i = 1; $i <=$amountOfCycles; $i++) {
    $randomNumber = rand(0, 300);
    if ($randomNumber < 275) {
        array_push($numberGenerator, $randomNumber);
    } else {
        array_push($highNumberGenerator, $randomNumber);
    }
    if ($randomNumber > 150) {
        $numbersExceeding150 ++;
    }
} 
$numberGenerator =  implode(' ', $numberGenerator);
$highNumberGenerator = implode(' ', $highNumberGenerator);
echo $numberGenerator;
echo ' ';
echo "<span style = 'color: red'>$highNumberGenerator</span>";
echo '<br>';
echo "There are $numbersExceeding150 numbers that are higher than 150.";

?>
<h2>3. Numbers divisible by 77 without remainder.</h2>
<?php

$numberRange = [];

for ($i = 1; $i <= rand(3000, 4000); $i++) {
    if ($i % 77 == 0) {
        array_push($numberRange, $i);
    } 
}
$numberRange = implode(', ', $numberRange);
echo $numberRange;

?>
<h2>4. Creating a square.</h2>
<?php

$asteriskLineLength = 25;
$asteriskRowLength = 25;

for ($i = 1; $i <= $asteriskRowLength; $i++) {
    for ($j = 1; $j <= $asteriskLineLength; $j++) {
        echo '<span style = "display: inline-block; height: 5px; width: 5px; padding-left: 15px; line-height: 80%">*</span>';
    }
    echo '<br>';
}

?>
<h2>5. Red diagonals for the square. </h2>
<?php

for ($i = 1; $i <= $asteriskRowLength; $i++) {
    for ($j = 1; $j <= $asteriskLineLength; $j++) {
        if ($j === $i || $j === ($asteriskRowLength + 1 - $i)) {
            echo '<span style = "display: inline-block; height: 5px; width: 5px; padding-left: 15px; line-height: 80%; color: red">*</span>';
        } else {
            echo '<span style = "display: inline-block; height: 5px; width: 5px; padding-left: 15px; line-height: 80%">*</span>';
        } 
    }
    echo '<br>';
}

?>
<h2>6. Coin toss. </h2>
<h3>a) Heads once. </h3>
<?php


$heads = 0;
$tails = 0;
$toss = null;
$game = true;

while ($game) {
    $toss = rand(0, 1);
    if ($toss == 0) {
        $heads ++;
        $game = false;
    } else {
        $tails ++;
    }
}
echo "The amount of times the toss resulted in heads: $heads";
echo '<br>';
echo "The amount of times the toss resulted in tails: $tails";

?>
<h3> b) Heads thrice. </h3>
<?php

$game2 = true;
while ($game2) {
    $toss = rand(0, 1);
    if ($toss == 0) {
        $heads ++;
    } else {
        $tails ++;
    }
    if ($heads == 3) {
        $game2 = false;
    }
}
echo "The amount of times the toss resulted in heads: $heads";
echo '<br>';
echo "The amount of times the toss resulted in tails: $tails";

?>
<h3> c) Heads thrice in a row. </h3>
<?php

$game3 = true;
$coinTossIndex = 0;
$headsStreak = 0;

while ($game3) {
    $toss = rand(0, 1);
    $coinTossIndex ++;
    if ($toss == 0) {
        $heads ++;
        $headsStreak ++;
        if ($headsStreak == 3) {
            $game3 = false;
        }
    } else {
        $tails ++;
        $headsStreak --;
    }
}
echo "The amount of times the toss resulted in heads: $heads";
echo '<br>';
echo "The amount of times the toss resulted in tails: $tails";
echo '<br>';
echo "It took $coinTossIndex times to reach the first streak of 3 heads in a row.";
?>
<h2>7. Checkers matches. First to reach 222 points - wins. </h2>
<?php

$qasimirMatchPoints = 0;
$qasimirPointsTally = 0;
$peterMatchPoints = 0;
$peterPointsTally = 0;
$checkersMatches = 0;
$checkersGame = true;

while ($checkersGame) {
    $qasimirMatchPoints = rand(5, 25);
    $qasimirPointsTally += $qasimirMatchPoints;
    $peterMatchPoints = rand(10, 20);
    $peterPointsTally += $peterMatchPoints;
    $checkersMatches ++;
    if ($qasimirMatchPoints > $peterMatchPoints) {
        echo "The match concluded with Qasimir winning over Peter, $qasimirMatchPoints to $peterMatchPoints.";
    } elseif ($peterMatchPoints > $qasimirMatchPoints) {
        echo "The match concluded with Peter winning over Qasimir, $peterMatchPoints to $qasimirMatchPoints.";
    } else {
        echo "The match concluded with a draw between Peter and Qasimir, at $peterMatchPoints to $qasimirMatchPoints.";
    }
    echo '<br>';
    if ($qasimirPointsTally >= 222 || $peterPointsTally >= 222) {
        $checkersGame = false;
    }
}
echo '<br>';
if ($qasimirPointsTally > $peterPointsTally) {
echo "The game ended after $checkersMatches matches, with Qasimir reaching $qasimirPointsTally and Peter -  $peterPointsTally points. Qasimir was the winner of the game.";
} elseif ($peterPointsTally > $qasimirPointsTally) {
    echo "The game ended after $checkersMatches matches, with Qasimir reaching $qasimirPointsTally and Peter -  $peterPointsTally points. Peter was the winner of the game.";
} else {
    echo "The game ended after $checkersMatches matches, with Qasimir reaching $qasimirPointsTally and Peter -  $peterPointsTally points. The concluded in a draw.";
}
echo '<br>';

?>
<h2>8. Creating a sparkling rhombus.</h2>
<?php

$asteriskColumnLength = 11;

for ($i = 0; $i < $asteriskColumnLength; $i++) {
    $asterisk = '';
    $j = -1;
    while ($j < $i) {
        $randomRed = rand(0, 225);
        $randomGreen = rand(0, 225);
        $randomBlue = rand(0, 225);
        $asterisk .="<span style =\"color: rgb($randomRed, $randomGreen, $randomBlue)\">*</span>";
        $j++;
    }
    echo str_repeat("<span style='display: inline-block; height: 7px; width: 4px; '>&nbsp</span>", $asteriskColumnLength - $i);
    echo "<span style = 'display: inline-block; height: 7px; width: 4px;'>$asterisk</span>";
    echo '<br>';
}
for ($i = $asteriskColumnLength - 1; $i > 0; $i--) {
    $asterisk = '';
    $j = 0;
    while ($j < $i) {
        $randomRed = rand(0, 225);
        $randomGreen = rand(0, 225);
        $randomBlue = rand(0, 225);
        $asterisk .="<span style =\"color: rgb($randomRed, $randomGreen, $randomBlue)\">*</span>";
        $j++;
    }
    echo str_repeat("<span style='display: inline-block; height: 7px; width 4px;'>&nbsp</span>", $asteriskColumnLength + 1 - $i);
    echo "<span style ='display: inline-block; height: 7px; width: 4px;'>$asterisk</span>";
    echo '<br>';
}

?>
<h2>9. Time elapsed comparison</h2>
<?php

$code1 = "10 bezdzioniu \n suvalge 20 bananu.";
$code2 = '10 bezdzioniu \n suvalge 20 bananu.'; 
$firstInstance = 0;
$lastInstance = 0;
$timeElapsed = 0;

for ($i = 0; $i <1000000; $i++) {
    if ($i == 0) {
        (float) $firstInstance = microtime();
        echo "The cycles begin at $firstInstance";
        echo '<br>';
    }
    $code1;
    if ($i == 999999) {
        (float) $lastInstance = microtime();
        echo "The cycles finish at $lastInstance";
        echo '<br>';
    }
}
(float) $timeElapsed = (float) $lastInstance - (float) $firstInstance;
echo "Running code1 took $timeElapsed";
echo '<br><br>';

for ($i = 0; $i <1000000; $i++) {
    if ($i == 0) {
        (float) $firstInstance = microtime();
        echo "The cycles begin at $firstInstance";
        echo '<br>';
    }
    $code2;
    if ($i == 999999) {
        (float) $lastInstance = microtime();
        echo "The cycles finish at $lastInstance";
        echo '<br>';
    }
}
(float) $timeElapsed = (float) $lastInstance - (float) $firstInstance;
echo "Running code2 took $timeElapsed";

?>
<h2>10. Nail-driving simulator</h2>
<h3>a) 5 nails, using small strikes</h3>
<?php

$nailLenghth = 85;
$smallStrike = rand(5, 20);
$strikesRequired = 0;
$nailsDrivenIn = 0;

while ($nailsDrivenIn < 5) {
    $nailLenghth -= $smallStrike;
    $strikesRequired ++;
    if ($nailLenghth <= 0) {
        $nailLenghth = 85;
        $nailsDrivenIn++;
        if ($nailsDrivenIn == 1) {
            echo "First nail driven in. <br>";
        } 
        if ($nailsDrivenIn == 2) {
            echo "Second nail driven in. <br>";
        } 
        if ($nailsDrivenIn == 3) {
            echo "Third nail driven in. <br>";
        } 
        if ($nailsDrivenIn == 4) {
            echo "Fourth nail driven in. <br>";
        } 
        if ($nailsDrivenIn == 5) {
            echo "Fifth nail driven in. <br>";
        }
        continue; 
    }
    echo "$nailLenghth mm left to drive in.";
    echo '<br>';
}
    


$strikesRequired;
echo "<br> It took $strikesRequired small hammer strikes to drive 5 nails in.";

?>

<h3>b) 5 nails, using large strikes, with 50% accuracy</h3>
<?php

// $nailLenghth = 85;
// $largeStrike = rand(20, 30);
// $largeStrikeChance = rand(0, 1);
// $strikesRequired = 0;
// $nailsDrivenIn = 0;

// while ($nailsDrivenIn < 5) {
//     if ($largeStrikeChance == 1) {
//         $nailLenghth -= $largeStrike;
//     }
//     $strikesRequired++;
//     if ($nailLenghth <= 0) {
//         $nailLenghth = 85;
//         $nailsDrivenIn++;
//         if ($nailsDrivenIn == 1) {
//             echo "First nail driven in. <br>";
//         } 
//         if ($nailsDrivenIn == 2) {
//             echo "Second nail driven in. <br>";
//         } 
//         if ($nailsDrivenIn == 3) {
//             echo "Third nail driven in. <br>";
//         } 
//         if ($nailsDrivenIn == 4) {
//             echo "Fourth nail driven in. <br>";
//         } 
//         if ($nailsDrivenIn == 5) {
//             echo "Fifth nail driven in. <br>";
//         }
//         continue;
//     }
//     echo "$nailLenghth mm left to drive in.";
//     echo '<br>'; 
// }

// $strikesRequired;
// echo "It took $strikesRequired large hammer strikes to drive 5 nails in.";

?>
<h2>11. Extra credit: prime number generator.</h2>   
<?php

$randomNumberArray = [];
$primeNumberArray = [];

while (count($randomNumberArray) < 50){
    $randomNumber = rand(1, 200);
    if (!in_array($randomNumber, $randomNumberArray)) {
    $randomNumberArray[] = $randomNumber;
    }
}
echo '<pre>';
$randomNumberString = implode(' ', $randomNumberArray);


foreach ($randomNumberArray as &$value) {
    $isPrimeNumber = gmp_prob_prime($value);
    if ($isPrimeNumber == 2) {
        $primeNumberArray[] = $value;
    }
}
sort($primeNumberArray);
$primeNumberString = implode(' ', $primeNumberArray);
echo "Random number string: $randomNumberString <br>";
echo "Prime number string: $primeNumberString";

?>
</body>
</html>
