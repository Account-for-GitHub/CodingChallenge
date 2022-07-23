<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\Room\Interfaces\WithBed;
use Ekomobile\CodingChallenge\Room\Interfaces\WithGarbageBin;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTable;

/**
 * Спальня - это место с кроватью
 */
interface BedroomInterface extends SpaceInterface, WithBed, WithGarbageBin, WithTable {
	
}