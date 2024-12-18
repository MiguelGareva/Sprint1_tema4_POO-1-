<?php 

declare(strict_types=1);

class PokerDice {

    private const SHAPES = ['A','K','Q','J','8','7'];
    private static int $totalThrows = 0;
    private ?string $lastShape = null;

    public function trhowDice():void{
        $this->lastShape = self::SHAPES[random_int(0, count(self::SHAPES) - 1)];
        self::$totalThrows++;
    }

    public function nameShape(): ?string{
        return $this->lastShape;
    }

    
}
?>