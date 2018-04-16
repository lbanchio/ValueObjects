<?php

namespace Kiwing\ValueObjects\Numbers;

use InvalidArgumentException;

class Percentage
{
    private $value;

    public function __construct (float $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Percentage value cannot be negative');
        }

        $this->value = $value;
    }

    /**
     * Returns true if the value is zero
     *
     * @return bool
     */
    public function isZero ()
    {
        return $this->value === 0.0;
    }

    /**
     * Returns the float representation of value
     *
     * @return float
     */
    public function getFloat() :float
    {
        return $this->value;
    }
}