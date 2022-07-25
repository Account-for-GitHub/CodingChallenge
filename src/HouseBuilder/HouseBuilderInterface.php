<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\SpaceInterface;

interface HouseBuilderInterface
{
	public function createHouse(Foundation $foundation_object);
	
	public function addRoom(SpaceInterface $room);
	
	public function getHouse();
}