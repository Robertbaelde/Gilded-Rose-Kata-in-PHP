<?php
declare(strict_types=1);

namespace App;


final class Conjured extends Product
{
    public function tick()
    {
        $this->sellIn--;
        $qualityDecrease = $this->sellIn < 0 ? 4 : 2;

        $this->quality = max($this->quality - $qualityDecrease, 0);
    }
}
