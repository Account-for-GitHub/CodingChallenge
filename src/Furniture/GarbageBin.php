<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class GarbageBin implements GarbageBinInterface
{
	
	private $trash_array;
	
	public function __construct(?TrashInterface $trash_object)
	{
		$this->trash_array[] = $trash_object;
	}
	
    /**
     * {@inheritdoc}
     */
    public function removeTrash(): ?TrashInterface
    {
        return array_pop($this->trash_array);
    }
}