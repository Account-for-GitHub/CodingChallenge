<?php

namespace Ekomobile\CodingChallenge\Furniture;


use Ekomobile\CodingChallenge\Stuff\DishesInterface;

/**
 * Отличный помощник на кухне
 */
interface SinkInterface
{
    /**
     * Ленивые жильцы постоянно оставляют тут свои тарелки!
     *
     * @return DishesInterface
     */
    public function removeDishes(): DishesInterface;
}