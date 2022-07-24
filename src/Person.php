<?php

namespace Ekomobile\CodingChallenge;

class Person implements VisitorInterface
{
	private $current_space;
	
    /**
     * {@inheritdoc}
     */
//    public function visit(SpaceInterface $space): VisitorInterface
//    {
//        // TODO: Implement visit() method.
//    }
	
	
	/**
	 * @param SpaceAbstractClass $space
	 * @return VisitorInterface
	 */
	public function visit(SpaceAbstractClass $space): VisitorInterface
    {
		$this->current_space = $space;
    }
}