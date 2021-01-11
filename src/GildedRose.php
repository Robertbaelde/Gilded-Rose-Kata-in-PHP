<?php

namespace App;

final class GildedRose
{
    public static function of(string $name, int $quality, int $sellIn): GildedRoseItem
    {
        if ($name === 'Aged Brie') {
            return new Brie($name, $quality, $sellIn);
        }

        if ($name === 'Sulfuras, Hand of Ragnaros') {
            return new Sulfuras($name, $quality, $sellIn);
        }

        if (strpos($name, 'Backstage passes') !== false) {
            return new BackstagePass($name, $quality, $sellIn);
        }

        if ($name === 'Conjured Mana Cake') {
            return new Conjured($name, $quality, $sellIn);
        }

        return new Normal($name, $quality, $sellIn);
    }
}
