<?php

namespace Ekomobile\CodingChallenge\Furniture;


use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class TrashCan implements TrashCanInterface
{
    /**
     * {@inheritdoc}
     */
    public function dump(TrashInterface $trash): TrashCanInterface
    {
        return $this;
    }
}