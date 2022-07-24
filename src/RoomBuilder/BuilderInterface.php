<?php

namespace Ekomobile\CodingChallenge\RoomBuilder;

use Ekomobile\CodingChallenge\Furniture\Furniture;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

interface BuilderInterface
{
	public function createRoom(Placement $room_object);
	
	public function addRoomPart(Furniture $furniture);
	
	public function getRoom();
}