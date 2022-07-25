<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class CustomHouse extends SpaceAbstractClass implements Foundation
{
	private $data = [];
	
	public function __construct()
	{
		$this->data['Bathroom'] = new Bathroom();
		$this->data['Kitchen'] = new Kitchen();
		$this->data['Bedroom'] = new Bedroom();
	}
	
	public function addRoom(SpaceAbstractClass $room_object)
	{
		$room_name = explode('\\', get_class($room_object));
		
		$this->data[ array_pop($room_name) ] = $room_object;
	}
}