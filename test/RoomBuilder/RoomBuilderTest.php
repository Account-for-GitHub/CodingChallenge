<?php

namespace Ekomobile\CodingChallenge\Test\RoomBuilder;

use Ekomobile\CodingChallenge\Furniture\Furniture;
use Ekomobile\CodingChallenge\Furniture\Sofa;
use Ekomobile\CodingChallenge\Furniture\Table;
use Ekomobile\CodingChallenge\Furniture\Tv;
use Ekomobile\CodingChallenge\RoomBuilder\CustomRoom;
use Ekomobile\CodingChallenge\RoomBuilder\RoomBuilder;
use PHPUnit\Framework\TestCase;

class RoomBuilderTest extends TestCase
{
	
	public function testCreateRoom()
	{
		$builder = new RoomBuilder();
		$builder->createRoom(new CustomRoom());
		$builder->addRoomPart(new Tv());
		$builder->addRoomPart(new Sofa());
		$builder->addRoomPart(new Table());
		$room = $builder->getRoom();
		$this->assertInstanceOf(
			CustomRoom::class,
			$room, 
			'This is not a room'
		);
		
		$furniture = $room->interactWith('Tv');
		$furniture = $furniture->removeDust();
		$furniture = $furniture->watchAMovie();
		$this->assertInstanceOf(
			Furniture::class, 
			$furniture, 
			'This is not a furniture'
		);
	}

}
