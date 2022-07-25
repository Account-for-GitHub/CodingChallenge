<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\RoomBuilder\BuilderInterface;
use Ekomobile\CodingChallenge\SpaceAbstractClass;
use Ekomobile\CodingChallenge\SpaceInterface;

class HouseBuilder implements HouseBuilderInterface
{
	private $house;
	
	public function createHouse(Foundation $foundation_object)
	{
		$this->house = $foundation_object;
	}
	
	public function addRoom(SpaceInterface $room)
	{
		$this->house->addRoom($room);
	}
	
	public function getHouse()
	{
		return $this->house;
	}
}