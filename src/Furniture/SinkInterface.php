<?php

namespace Ekomobile\CodingChallenge\Furniture;


use Ekomobile\CodingChallenge\Stuff\DishesInterface;

/**
 * Отличный помощник на кухне
 */
interface SinkInterface extends Furniture
{
    /**
     * Ленивые жильцы постоянно оставляют тут свои тарелки!
     *
     * @return DishesInterface
     */
    public function removeDishes(): DishesInterface;
}