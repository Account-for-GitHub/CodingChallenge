<?php

namespace Ekomobile\CodingChallenge\Test\Space;

use Ekomobile\CodingChallenge\Furniture\Sofa;
use Ekomobile\CodingChallenge\Furniture\Table;
use Ekomobile\CodingChallenge\Furniture\Tv;
use Ekomobile\CodingChallenge\House;
use Ekomobile\CodingChallenge\Person;
use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\RoomBuilder\CustomRoom;
use Ekomobile\CodingChallenge\RoomBuilder\RoomBuilder;
use PHPUnit\Framework\TestCase;

class SpaceAbstractClassTest extends TestCase
{
	
	public function testAccept()
	{
		// Check ability to accept Guests
		$person = new Person();
		
		$space = new House();
		$space->accept($person);
		$this->whereIsPerson($person);
		
		$space = new Bathroom();
		$space->accept($person);
		$this->whereIsPerson($person);
		
		$space = new Bedroom();
		$space->accept($person);
		$this->whereIsPerson($person);
		
		$space = new Kitchen();
		$space->accept($person);
		$this->whereIsPerson($person);
		
		$space = new LivingRoom();
		$space->accept($person);
		$this->whereIsPerson($person);
		
		$this->assertTrue(
			$person->showNameOfTheCurrentSpace() == 'LivingRoom', 
			'Space visiting is not working'
		);
		
		/* And a custom room */
		$builder = new RoomBuilder();
		$builder->createRoom(new CustomRoom());
		$builder->addRoomPart(new Tv());
		$builder->addRoomPart(new Sofa());
		$builder->addRoomPart(new Table());
		$space = $builder->getRoom();
		$space->accept($person);
		$this->whereIsPerson($person);
		$this->assertTrue(
			$person->showNameOfTheCurrentSpace() == 'CustomRoom',
			'Custom room visiting is not working'
		);
	}
	
	public function whereIsPerson(Person $person)
	{
		echo  PHP_EOL . 'Person visited: ' . $person->showNameOfTheCurrentSpace();
	}
}
