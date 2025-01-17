<?php

declare(strict_types=1);
require_once "PokerDice.php";

$dices = [];
for ($i=0; $i < 5; $i++) { 
    $dices[] = new PokerDice();
}

foreach ($dices as $index => $dice) {
    $dice->trhowDice();
    echo "Dado nº" . ($index + 1) . ": " . $dice->nameShape() . "<br>";
}

echo "Nº total de tiradas: " . PokerDice::getTotalThrows() . "<br>";
?>