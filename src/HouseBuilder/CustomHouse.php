<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class CustomHouse extends SpaceAbstractClass implements Foundation
{
	private $rooms = [];
	
	public function __construct()
	{
		$this->rooms['Bathroom'] = new Bathroom();
		$this->rooms['Kitchen'] = new Kitchen();
		$this->rooms['Bedroom'] = new Bedroom();
	}
	
	public function addRoom(SpaceAbstractClass $room_object)
	{
		$room_name = explode('\\', get_class($room_object));
		
		$this->rooms[ array_pop($room_name) ] = $room_object;
	}
}