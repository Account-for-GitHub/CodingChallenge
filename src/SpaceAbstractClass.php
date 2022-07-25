<?php

namespace Ekomobile\CodingChallenge;

/**
 * Общий интерфейс для мест
 */
abstract class SpaceAbstractClass
{
//    /**
//     * Комната или дом может принимать посетителей.
//     *
//     * @param VisitorInterface $person
//     * @return SpaceInterface
//     */
//    public function accept(VisitorInterface $person): SpaceInterface;


	public function accept(VisitorInterface $person): void
	{
		$person->visit($this);
	}
}