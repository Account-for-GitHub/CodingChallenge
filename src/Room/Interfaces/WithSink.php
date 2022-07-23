<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\SinkInterface;

interface WithSink
{
	/**
	 * @return SinkInterface
	 */
	public function getSink(): SinkInterface;
}