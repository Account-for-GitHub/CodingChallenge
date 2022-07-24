<?php

namespace Ekomobile\CodingChallenge\RoomBuilder;

use Ekomobile\CodingChallenge\Furniture\Furniture;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class RoomBuilder implements BuilderInterface
{
	private $room;
	
	public function createRoom(Placement $room_object)
	{
		$this->room = $room_object;
	}
	
	public function addRoomPart(Furniture $furniture)
	{
		$this->room->addFurniture($furniture);
	}
	
	public function getRoom()
	{
		return $this->room;
	}
}