<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Room\Interfaces\WithSofa;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTv;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTable;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Место для чила и расслабона.
 */
interface LivingRoomInterface extends WithSofa, WithTv, WithTable
{

}