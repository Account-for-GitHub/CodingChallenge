<?php

namespace Ekomobile\CodingChallenge;

use Ekomobile\CodingChallenge\Furniture\Furniture;

interface SpaceInterface
{
    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     */
    public function accept(VisitorInterface $person): void;

    /**
     * @param string $furniture_class_name
     * @return Furniture|null
     */
    function interactWith(string $furniture_class_name): ?Furniture;
}