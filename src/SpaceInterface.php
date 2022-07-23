<?php

namespace Ekomobile\CodingChallenge;

/**
 * Общий интерфейс для мест
 */
interface SpaceInterface
{
    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return SpaceInterface
     */
    public function accept(VisitorInterface $person): SpaceInterface;
}