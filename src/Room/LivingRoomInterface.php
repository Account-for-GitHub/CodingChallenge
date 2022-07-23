<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\Room\Interfaces\WithSofa;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTv;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTable;

/**
 * Место для чила и расслабона.
 */
interface LivingRoomInterface extends SpaceInterface, WithSofa, WithTv, WithTable
{

}