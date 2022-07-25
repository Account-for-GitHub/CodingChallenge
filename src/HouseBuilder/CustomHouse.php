<?php

namespace Ekomobile\CodingChallenge\HouseBuilder;

use Ekomobile\CodingChallenge\HouseInterface;
use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\SpaceAbstractClass;
use Ekomobile\CodingChallenge\SpaceInterface;

class CustomHouse extends SpaceAbstractClass implements Foundation, SpaceInterface, HouseInterface
{
	private $rooms = [];
	
	public function __construct()
	{
		$this->rooms['Bathroom'] = new Bathroom();
		$this->rooms['Kitchen'] = new Kitchen();
		$this->rooms['Bedroom'] = new Bedroom();
	}
	
	public function addRoom(SpaceInterface $room_object)
	{
		$room_name = explode('\\', get_class($room_object));
		
		$this->rooms[ array_pop($room_name) ] = $room_object;
	}

    public function getAllRooms(): array
    {
        return $this->rooms;
    }
}