<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops homework</title>
    <link rel="stylesheet" href="./css/loops.css">
</head>
<body>
<h2>1. A fixed 400-symbol-long line of asterixes</h2>
<?php

$asteriskLineLength = 400;

for ($i = 1; $i <= $asteriskLineLength;  $i++) {
    echo '<span>*</span>';
    
}

?>
<h3>a) Wrap string, according to user screen width </h3>
<?php

for ($i = 1; $i <= $asteriskLineLength;  $i++) {
    echo "<span style ='overflow-wrap: anywhere' >*</span>";
}   

?>
<h3>b) Wrap string at every 50 symbols</h3>
<?php

$asteriskLineBreakpoint = 50;

for ($i = 1; $i <= $asteriskLineLength/$asteriskLineBreakpoint;  $i++) {
    for($j = 1; $j <= $asteriskLineBreakpoint; $j++) {
        echo '<span>*</span>';
    }
        echo '<br>';
}

?>
<h2>2. 300 random numbers, values higher than 275 displayed in red</h2>
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
$numberGenerator = implode(' ', $numberGenerator);
$highNumberGenerator = implode(' ', $highNumberGenerator);
echo $numberGenerator;
echo ' ';
echo "<span style = 'color: red'>$highNumberGenerator</span>";
echo '<br>';
echo "There are $numbersExceeding150 numbers that are higher than 150.";

?>
<h2>3. Numbers divisible by 77 without remainder</h2>
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
<h2>4.</h2>
<h2>5.</h2>
<h2>6. </h2>
<h2>7. </h2>
<h2>8. </h2>
<h2>9. </h2>
<h2>10. </h2>
<h2>11. Extra credit: </h2>    
</body>
</html>
