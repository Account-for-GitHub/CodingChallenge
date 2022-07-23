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
}