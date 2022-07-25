<?php

namespace Ekomobile\CodingChallenge\Test;

use Ekomobile\CodingChallenge\House;
use Ekomobile\CodingChallenge\Person;
use phpDocumentor\Reflection\Types\True_;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
	
	public function testVisit()
	{
        $person = new Person();
        $house = new House();
        $all_rooms = $house->getAllRooms();
        foreach ($all_rooms as $room) {
            $status = $person->visit($room)->clearUp();
        }
        
        $this->assertTrue($status == True, 'Clear-Up Error');
	}
    
    public function showMessage()
    {
        echo  PHP_EOL . 'Person visited for clear-up: ' . $person->showNameOfTheCurrentSpace();
    }
}
