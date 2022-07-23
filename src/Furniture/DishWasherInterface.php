<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Dishes;

interface DishWasherInterface
{
    /**
     * Загрузи, чтобы помыть.
     *
     * @param Dishes $dishes
     * @return DishWasherInterface
     */
    public function load(Dishes $dishes): DishWasherInterface;
}