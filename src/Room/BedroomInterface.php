<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Furniture\BedInterface;
use Ekomobile\CodingChallenge\Furniture\GarbageBinInterface;
use Ekomobile\CodingChallenge\Furniture\TableInterface;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Спальня - это место с кроватью
 */
interface BedroomInterface extends SpaceInterface
{
    /**
     * Возвращает кровать.
     *
     * @return mixed
     */
    public function getBed(): BedInterface;

    /**
     * Возвращает мусорную корзину.
     *
     * @return GarbageBinInterface
     */
    public function getGarbageBin(): GarbageBinInterface;

    /**
     * Возвращает стол.
     *
     * @return TableInterface
     */
    public function getTable(): TableInterface;
}