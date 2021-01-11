<?php
declare(strict_types=1);

namespace App;


class Brie extends GildedRose
{
    public function tick()
    {
        $this->sellIn--;
        $qualityDecrease = $this->sellIn < 0 ? 2 : 1;

        $this->quality = min($this->quality + $qualityDecrease, 50);
    }
}
