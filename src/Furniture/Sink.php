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

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        // Здесь подразумевалось, что из раковины тарелки передаются в посудомоечную машину, то есть
        // стратегия на уровне комнаты, но тогда стратегия была бы фиксированной и только для
        // стандартных комнат, а я решил сделать её автоматической чтобы каждый предмет содержал
        // информацию о том что с ним нужно делать для уборки
        $this->removeDishes();
    }
}
