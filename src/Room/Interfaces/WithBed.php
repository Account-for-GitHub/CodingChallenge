<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\BedInterface;

interface WithBed
{
	/**
	 * Возвращает кровать.
	 *
	 * @return mixed
	 */
	public function getBed(): BedInterface;
}