<?php

namespace Ekomobile\CodingChallenge\Furniture;

class Bed implements BedInterface
{
    /**
     * {@inheritdoc}
     */
    public function tidyUp(): BedInterface
    {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function takeANap(): BedInterface
    {
        return $this;
    }
}