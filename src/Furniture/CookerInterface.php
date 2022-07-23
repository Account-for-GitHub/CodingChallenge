<?php

namespace Ekomobile\CodingChallenge\Furniture;

/**
 * На каждой кухне должна быть плита
 */
interface CookerInterface
{
    /**
     * Но чтобы на ней готовить, нужно держать ее чистой.
     *
     * @return CookerInterface
     */
    public function clean(): CookerInterface;
}