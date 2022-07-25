<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\SpaceAbstractClass;
use Ekomobile\CodingChallenge\SpaceInterface;

interface Foundation
{
	public function addRoom(SpaceInterface $room_object);
}