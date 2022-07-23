<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\TrashCanInterface;

interface WithTrashCan
{
	/**
	 * @return TrashCanInterface
	 */
	public function getTrashCan(): TrashCanInterface;
}