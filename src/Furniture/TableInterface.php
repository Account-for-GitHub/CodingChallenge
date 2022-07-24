<?php

namespace Ekomobile\CodingChallenge\Furniture;

/**
 * Стол может находиться в нескольких местах в доме.
 */
interface TableInterface extends Furniture
{
    /**
     * Просто протри стол, когда он запылится.
     *
     * @return TableInterface
     */
    public function clear(): TableInterface;
}