<?php
declare(strict_types=1);

namespace App;


class Normal extends GildedRose
{
    public function tick()
    {
        $this->sellIn--;
        $qualityDecrease = $this->sellIn < 0 ? 2 : 1;

        $this->quality = max($this->quality - $qualityDecrease, 0);
    }
}
