<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\SpaceAbstractClass;

interface HouseBuilderInterface
{
	public function createHouse(Foundation $foundation_object);
	
	public function addRoom(SpaceAbstractClass $room);
	
	public function getHouse();
}