<?php


declare(strict_types=1);

namespace Malz\Dice;

class GraphicalDice extends Dice
{
    const DICE_SIDES = 6;

    public function __construct()
    {
        parent::__construct(self::DICE_SIDES);
    }

    public function graphic()
    {
        return "dice-" . $this->getLastRoll();
    }
}
