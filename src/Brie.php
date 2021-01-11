<?php
declare(strict_types=1);

namespace App;


final class Brie extends Product
{
    public function tick()
    {
        $this->sellIn--;

        $qualityIncrease = $this->sellIn < 0 ? 2 : 1;

        $this->quality = min($this->quality + $qualityIncrease, 50);
    }
}
