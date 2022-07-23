<?php

namespace Ekomobile\CodingChallenge\Furniture;


use Ekomobile\CodingChallenge\Stuff\Dishes;
use Ekomobile\CodingChallenge\Stuff\DishesInterface;

class Sink implements SinkInterface
{
    /**
     * {@inheritdoc}
     */
    public function removeDishes(): DishesInterface
    {
        return new Dishes();
    }
}
