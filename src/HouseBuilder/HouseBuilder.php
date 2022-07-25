<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\RoomBuilder\BuilderInterface;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class HouseBuilder implements HouseBuilderInterface
{
	private $house;
	
	public function createHouse(Foundation $foundation_object)
	{
		$this->house = $foundation_object;
	}
	
	public function addRoom(SpaceAbstractClass $room)
	{
		$this->house->addRoom($room);
	}
	
	public function getHouse()
	{
		return $this->house;
	}
}