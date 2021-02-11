<h2>1. Shorter name printer</h2>
<?php

$favouriteActorName = 'Bill';
$favouriteActorSurname = 'Nighy';

if (strlen($favouriteActorName) > strlen($favouriteActorSurname)) {
    echo $favouriteActorSurname;
} else {
    echo $favouriteActorName;
}


?>
<h2>2. Uppercase and lowercase string</h2>
<?php

$lovedActorName = 'Robert';
$lovedActorSurname = 'Downey';
echo strtoupper($lovedActorName);
echo " ";
echo strtolower($lovedActorSurname);

?>
<h2>3. Name initials</h2>
<?php

$lovedActressName = 'Zoe';
$lovedActressSurname = 'Kazan';
$nameInitials = $lovedActressName[0].". ".$lovedActressSurname[0].". ";

echo $nameInitials;

?>
<h2>4. Concatenated pseudonym</h2>
<?php

$favouriteActressName = 'Rhona';
$favouriteActressSurname = "Mitra";
$concatenatedName = substr($favouriteActressName, -3).substr($favouriteActressSurname, -3);
echo $concatenatedName;
echo "<br>";

?>
<h2>5. Vowels a replaced</h2>
<?php

$movieName = 'An American in Paris';
$vowelReplacement = str_ireplace('a', '*', $movieName);
echo $vowelReplacement;

?>
<h2>6. Vowels a counted</h2>
<?php

$lowercaseVowelCount = substr_count($movieName, 'a');
$uppercaseVowelCount = substr_count($movieName, 'A');
$vowelCount = $lowercaseVowelCount + $uppercaseVowelCount;
echo "There are $lowercaseVowelCount a's in the name of the movie: 'An American in Paris'.";
echo "<br>";
echo "There are $uppercaseVowelCount A's in the name of the movie: 'An American in Paris'.";
echo "<br>";

echo "There are a total of $vowelCount letters 'a', both lowercase and uppercase, in the name of the movie: 'An American in Paris'.";

?>
<h2>7. All vowels replaced </h2>
<?php

$vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

$vowelReplacement = str_ireplace($vowels, "", $movieName);
echo $vowelReplacement;
echo "<br>";

$movieName = "Breakfast at Tiffany's";
$vowelReplacement = str_ireplace($vowels, "", $movieName);
echo $vowelReplacement;
echo "<br>";

$movieName = "2001 - A Space Odyssey";
$vowelReplacement = str_ireplace($vowels, "", $movieName);
echo $vowelReplacement;
echo "<br>";

$movieName = "It's a Wonderful Life";
$vowelReplacement = str_ireplace($vowels, "", $movieName);
echo $vowelReplacement;

?>
<h2>8. Star Wars movie number finder</h2>
<?php

$starWars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

echo "The ".(int) filter_var($starWars, FILTER_SANITIZE_NUMBER_INT)." episode of Star Wars.";

?>
<h2>9. Words of 5 letters or less counted </h2>
<?php

$filmName = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$filmNameArray = explode(" ", $filmName);
$shortWordCount = 0;

foreach($filmNameArray as &$value) {
    if (mb_strlen($value) <= 5){
        $shortWordCount++;
    }
}
unset($value);

echo $shortWordCount;
echo "<br>";

$filmNameLt = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$filmNameArrayLt = explode(" ", $filmNameLt);
$shortWordCount = 0;
foreach($filmNameArrayLt as &$value) {
    if (mb_strlen($value) <= 5){
        $shortWordCount++;
    }
}
unset($value);
echo $shortWordCount;
?>
<h2>10. Random three-letter word generator </h2>
<?php

$latinAlphabet = 'qwertyuiopasdfghjklzxcvbnm';
$firstLetterGenerator = $latinAlphabet[rand(0, 25)];
$secondLetterGenerator = $latinAlphabet[rand(0, 25)];
$thirdLetterGenerator = $latinAlphabet[rand(0, 25)];
$randomWordGenerator = $firstLetterGenerator.$secondLetterGenerator.$thirdLetterGenerator;
echo $randomWordGenerator;
echo "<br>";
echo substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 3);

?>
<h2>11. Random 10-word string generator </h2>
<?php

$wordPool = array_merge(str_replace(',', ' ', $filmNameArray) , str_replace(',', ' ', $filmNameArrayLt));
shuffle($wordPool);
$randomArray = array();
$randomSentence = "";

for ($i = 0; $i <= 9; $i++) {
    array_push($randomArray, $wordPool[$i]);
}

$randomSentence = implode(' ', $randomArray);
echo $randomSentence;
