<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Furniture\SofaInterface;
use Ekomobile\CodingChallenge\Furniture\TableInterface;
use Ekomobile\CodingChallenge\Furniture\TvInterface;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Место для чила и расслабона.
 */
interface LivingRoomInterface extends SpaceInterface
{
    /**
     * Тут должен быть диван, иначе, что это за гостиная?
     *
     * @return SofaInterface
     */
    public function getSofa(): SofaInterface;

    /**
     * Лучше использовать вместе с диваном.
     *
     * @return TvInterface
     */
    public function getTv(): TvInterface;

    /**
     * Отличное место, чтобы поесть.
     *
     * @return TableInterface
     */
    public function getTable(): TableInterface;
}