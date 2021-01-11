<?php
declare(strict_types=1);

namespace App;


final class BackstagePass extends Product
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn < 0) {
            $this->quality = 0;
            return;
        }

        $qualityIncrease = 1;

        if ($this->sellIn < 10) {
            $qualityIncrease++;
        }

        if ($this->sellIn < 5) {
            $qualityIncrease++;
        }

        $this->quality = min($this->quality + $qualityIncrease, 50);

    }
}
