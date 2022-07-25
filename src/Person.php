<?php

namespace Ekomobile\CodingChallenge;

class Person implements VisitorInterface
{
	private $current_space_object;
	
	private $current_space_name; 
	
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
	public function visit(SpaceInterface $space): VisitorInterface
    {
		$this->current_space_object = $space;
		$this->getCurrentSpaceName($space);
		
		return $this;
    }
	
	public function getCurrentSpaceName(SpaceInterface $space): void
	{
		$space_name_parts_array =  explode('\\', get_class($space));
		
		$this->current_space_name = array_pop($space_name_parts_array);
	}
	
	public function showNameOfTheCurrentSpace(): string
	{
		return $this->current_space_name;
	}
    
    public function clearUp()
    {
        return $this->current_space_object->clearUpEveryFurnitureInRoom();
    }
}