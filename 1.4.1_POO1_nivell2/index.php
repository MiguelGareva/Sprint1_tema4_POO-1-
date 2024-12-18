<?php

declare(strict_types=1);
require_once "PokerDice.php";

$dice = [];
for ($i=0; $i < 5; $i++) { 
    $dice = new PokerDice();
}
?>