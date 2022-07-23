<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\GarbageBinInterface;

interface WithGarbageBin
{
	/**
	 * @return GarbageBinInterface
	 */
	public function getGarbageBin(): GarbageBinInterface;
}