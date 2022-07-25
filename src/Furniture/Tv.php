<?php

namespace Ekomobile\CodingChallenge\Furniture;


class Tv implements TvInterface
{
    /**
     * {@inheritdoc}
     */
    public function removeDust(): TvInterface
    {
        return $this;
    }
	
	/**
     * {@inheritdoc}
     */
    public function watchAMovie(): TvInterface
    {
        return $this;
    }

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        // Вытирать пыль можно и во время просмотра
        $this->watchAMovie()->removeDust();
    }
}