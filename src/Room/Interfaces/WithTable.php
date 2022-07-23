<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\TableInterface;

interface WithTable
{
	/**
	 * Отличное место, чтобы поесть.
	 *
	 * @return TableInterface
	 */
	public function getTable(): TableInterface;
}