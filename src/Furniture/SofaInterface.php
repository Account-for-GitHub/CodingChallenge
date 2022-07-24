<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

interface SofaInterface extends Furniture
{
    /**
     * Иногда хочется просто расслабиться на диване.
     *
     * @return SofaInterface
     */
    public function takeANap(): SofaInterface;

    /**
     * Старые газеты отправляются в мусор..
     *
     * @return TrashInterface
     */
    public function removeNewsPapers(): TrashInterface;
}