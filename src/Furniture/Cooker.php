<?php

namespace Ekomobile\CodingChallenge\Furniture;


class Cooker implements CookerInterface
{
    /**
     * {@inheritdoc}
     */
    public function clean(): CookerInterface
    {
        return $this;
    }

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        $this->clean();
    }
}