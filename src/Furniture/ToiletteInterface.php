<?php

namespace Ekomobile\CodingChallenge\Furniture;

/**
 * Физиологически необходим в любом жилом месте..
 */
interface ToiletteInterface extends Furniture
{
    /**
     * Лучше держать его чистым..
     *
     * @return ToiletteInterface
     */
    public function clean(): ToiletteInterface;
}