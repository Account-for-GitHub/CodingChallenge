<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Trash;
use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class GarbageBin implements GarbageBinInterface
{
    /**
     * {@inheritdoc}
     */
    public function removeTrash(): TrashInterface
    {
        return new Trash();
    }
}