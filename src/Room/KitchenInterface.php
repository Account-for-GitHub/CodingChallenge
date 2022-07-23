<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Furniture\CookerInterface;
use Ekomobile\CodingChallenge\Furniture\GarbageBinInterface;
use Ekomobile\CodingChallenge\Furniture\SinkInterface;
use Ekomobile\CodingChallenge\Furniture\TvInterface;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Сердце дома. По крайней мере, для кого-то.
 */
interface KitchenInterface extends SpaceInterface
{
    /**
     * @return SinkInterface
     */
    public function getSink(): SinkInterface;

    /**
     * @return CookerInterface
     */
    public function getCooker(): CookerInterface;

    /**
     * @return GarbageBinInterface
     */
    public function getGarbageBin(): GarbageBinInterface;

    /**
     * @return TvInterface
     */
    public function getTv(): TvInterface;
}