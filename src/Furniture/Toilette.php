<?php

namespace Ekomobile\CodingChallenge\Furniture;

class Toilette implements ToiletteInterface
{
    /**
     * {@inheritdoc}
     */
    public function clean(): ToiletteInterface
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