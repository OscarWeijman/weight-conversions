<?php

namespace OscarWeijman\Weight;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self {
        return new static($kilograms);
    }

    public function __construct(float $kilograms) {
        $this->kilograms = $kilograms;
    }

    public function toPound(): float {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float {
        return $this->kilograms * 0.15747;
    }
}
