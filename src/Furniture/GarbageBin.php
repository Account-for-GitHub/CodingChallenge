<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class GarbageBin implements GarbageBinInterface
{
	private $trash;
	
	public function __construct(?TrashInterface $trash_object)
	{
		$this->trash = $trash_object;
	}
	
    /**
     * {@inheritdoc}
     */
    public function removeTrash(): ?TrashInterface
    {
		$trash = $this->trash;
		$this->trash = null;
		
        return $trash;
    }
}