<?php

namespace Ekomobile\CodingChallenge\Test\HouseBuilder;

use Ekomobile\CodingChallenge\HouseBuilder\CustomHouse;
use Ekomobile\CodingChallenge\HouseBuilder\HouseBuilder;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use PHPUnit\Framework\TestCase;

class HouseBuilderTest extends TestCase
{
	
	public function testCreateHouse()
	{
		$builder = new HouseBuilder();
		$builder->createHouse(new CustomHouse());
		$builder->addRoom(new Bedroom());
		$builder->addRoom(new LivingRoom());
		$house = $builder->getHouse();
		$this->assertInstanceOf(CustomHouse::class, $house, 'This is not a house');
	}
	
}
