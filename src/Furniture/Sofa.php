<?php

namespace Ekomobile\CodingChallenge\Furniture;


use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class Sofa implements SofaInterface
{
    /**
     * {@inheritdoc}
     */
    public function takeANap(): SofaInterface
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeNewsPapers(): TrashInterface
    {
        return $this;
    }
}