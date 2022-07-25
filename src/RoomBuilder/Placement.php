<?php

namespace Ekomobile\CodingChallenge\RoomBuilder;

use Ekomobile\CodingChallenge\Furniture\Furniture;

interface Placement
{
	public function addFurniture(Furniture $furniture_object);
}