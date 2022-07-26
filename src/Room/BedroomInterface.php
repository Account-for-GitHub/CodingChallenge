<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\SpaceAbstractClass;
use Ekomobile\CodingChallenge\Room\Interfaces\WithBed;
use Ekomobile\CodingChallenge\Room\Interfaces\WithGarbageBin;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTable;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Спальня - это место с кроватью
 */
interface BedroomInterface extends WithBed, WithGarbageBin, WithTable {
	
}