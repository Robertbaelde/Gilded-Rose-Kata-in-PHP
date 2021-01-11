<?php
declare(strict_types=1);

namespace App;


final class Normal extends Product
{
    public function tick()
    {
        $this->sellIn--;
        $qualityDecrease = $this->sellIn < 0 ? 2 : 1;

        $this->quality = max($this->quality - $qualityDecrease, 0);
    }
}
