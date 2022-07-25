<?php

namespace Ekomobile\CodingChallenge\Furniture;


class Table implements TableInterface
{
    /**
     * {@inheritdoc}
     */
    public function clear(): TableInterface
    {
        return $this;
    }

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        $this->clear();
    }
}