<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class GarbageBin implements GarbageBinInterface
{
	private $trash;
	
	/**
	 * @param TrashInterface|NULL $trash_object
	 */
	public function __construct(TrashInterface $trash_object = NULL)
	{
		$this->trash = $trash_object;
	}
	
	/**
	 * {@inheritdoc}
	 */
    public function removeTrash(): ?TrashInterface
    {
		$trash = $this->trash;
		$this->trash = NULL;
		
        return $trash;
    }

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        $this->removeTrash();
    }
}