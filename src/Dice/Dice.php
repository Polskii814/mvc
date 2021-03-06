<?php

declare(strict_types=1);

namespace Malz\Dice;

class Dice 
{
    private $faces;
    private $roll = 0;

    public function __construct(int $faces = 6)
    {
        $this->faces = $faces;
    }

    public function roll(): int
    {
        $this->roll = rand(1, $this->faces);

        return $this->roll;
    }

    public function getLastRoll(): int
    {
        return $this->roll;
    }

    public function asString(): string
    {
        return (string) $this->getLastRoll();
    }
}
