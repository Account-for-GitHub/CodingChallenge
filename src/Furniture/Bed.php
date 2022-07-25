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

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        // Как заправлять кровать не отдохнув на ней перед этим!
        $this->takeANap()->tidyUp();
    }
}