<?php

namespace App;

abstract class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct(string $name, int $quality, int $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {

        if ($name === 'Aged Brie') {
            return new Brie($name, $quality, $sellIn);
        }

        if ($name === 'Sulfuras, Hand of Ragnaros') {
            return new Sulfuras($name, $quality, $sellIn);
        }

        if (strpos($name, 'Backstage passes') !== false) {
            return new BackstagePass($name, $quality, $sellIn);
        }

        return new Normal($name, $quality, $sellIn);
    }

    abstract public function tick();
}
