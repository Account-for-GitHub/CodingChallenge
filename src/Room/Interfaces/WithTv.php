<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\TvInterface;

interface WithTv
{
	/**
	 * Лучше использовать вместе с диваном.
	 *
	 * @return TvInterface
	 */
	public function getTv(): TvInterface;
}