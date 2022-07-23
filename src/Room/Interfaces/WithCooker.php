<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\CookerInterface;

interface WithCooker
{
	/**
	 * @return CookerInterface
	 */
	public function getCooker(): CookerInterface;
}