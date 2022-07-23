<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\ToiletteInterface;

interface WithToilette
{
	/**
	 * @return ToiletteInterface
	 */
	public function getToilette(): ToiletteInterface;
}