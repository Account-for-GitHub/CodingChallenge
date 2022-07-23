<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Dishes;

class DishWasher implements DishWasherInterface
{
    /**
     * Загрузи, чтобы помыть.
     *
     * @param Dishes $dishes
     * @return DishWasherInterface
     */
    public function load(Dishes $dishes): DishWasherInterface
    {
        return $this;
    }
}