<?php

namespace Ekomobile\CodingChallenge\RoomBuilder;

use Ekomobile\CodingChallenge\Furniture\Furniture;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class CustomRoom extends SpaceAbstractClass implements Placement
{
	private $data = [];
	
	public function addFurniture(Furniture $furniture_object)
	{
		$furniture_name = explode('\\', get_class($furniture_object));
		
		$this->data[ array_pop($furniture_name) ] = $furniture_object;
	}
	
	public function interactWith(string $furniture_class_name): ?Furniture
	{
		return $this->data[$furniture_class_name] ?? NULL;
	}
}