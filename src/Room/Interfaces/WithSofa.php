<?php

namespace Ekomobile\CodingChallenge\Room\Interfaces;

use Ekomobile\CodingChallenge\Furniture\SofaInterface;

interface WithSofa
{
	/**
	 * Тут должен быть диван, иначе, что это за гостиная?
	 *
	 * @return SofaInterface
	 */
	public function getSofa(): SofaInterface;
}