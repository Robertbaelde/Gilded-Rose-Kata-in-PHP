<?php
declare(strict_types=1);

namespace App;


class BackstagePass extends GildedRose
{
    public function tick()
    {

        if ($this->sellIn <= 0) {
            $this->quality = 0;
            $this->sellIn--;
            return;
        }

        $qualityIncrease = 1;

        if ($this->sellIn < 11) {
            $qualityIncrease++;
        }

        if ($this->sellIn < 6) {
            $qualityIncrease++;
        }

        $this->quality = min($this->quality + $qualityIncrease, 50);

        $this->sellIn--;
    }
}
