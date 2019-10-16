<?php
echo "welke operatie wil je uitvoeren? (+, -, %)". PHP_EOL;
$operatie=readline();

if($operatie !== "+" && $operatie !== "-" && $operatie !== "%" ) {
    exit ( "wel een geldige teken in voeren.");
}

echo "Eerste getal ?". PHP_EOL;
$FirstNummer=readline();

if(is_numeric($FirstNummer)); {
    exit ( "je kan alleen cijfers invoeren.");
}

echo "Tweede getal ?". PHP_EOL;
$SecondNummer=readline();
if(is_numeric($SecondNummer)); {
    exit ( "je kan alleen cijfers invoeren.");
}

if ($operatie === "%"){
    $answer = $FirstNummer % $SecondNummer;
}

if ($operatie === "+"){
    $answer = $FirstNummer + $SecondNummer;
}

if ($operatie === "-"){
    $answer = $FirstNummer - $SecondNummer;
}
echo "hier heb je je antwoord: " . " " . "$answer";