<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\DishWasherInterface;

interface WithDishWasher
{
	/**
	 * @return DishWasherInterface
	 */
	public function getDishWasher(): DishWasherInterface;
}