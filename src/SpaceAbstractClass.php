<?php

namespace Ekomobile\CodingChallenge;

/**
 * Общий интерфейс для мест
 */
abstract class SpaceAbstractClass
{
    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return SpaceAbstractClass
     */
//    public function accept(VisitorInterface $person): SpaceInterface;


	public function accept(VisitorInterface $person): SpaceAbstractClass
	{
		$person->visit($this);
		
		return $this;
	}
}