<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Dishes;

interface DishWasherInterface extends Furniture
{
    /**
     * Загрузи, чтобы помыть.
     *
     * @param Dishes $dishes
     * @return DishWasherInterface
     */
    public function load(Dishes $dishes): DishWasherInterface;
}