<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

/**
 * Место для мусора.
 */
interface GarbageBinInterface
{
    /**
     * Рано или поздно корзину придется опустошить..
     *
     * @return TrashInterface
     */
    public function removeTrash(): ?TrashInterface;
}