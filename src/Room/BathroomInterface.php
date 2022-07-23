<?php

namespace Ekomobile\CodingChallenge\Room;
use Ekomobile\CodingChallenge\Furniture\SinkInterface;
use Ekomobile\CodingChallenge\Furniture\ToiletteInterface;
use Ekomobile\CodingChallenge\SpaceInterface;

/**
 * Не самое поэтичное место в доме, но очень необходимое.
 */
interface BathroomInterface extends SpaceInterface
{
    /**
     * @return ToiletteInterface
     */
    public function getToilette(): ToiletteInterface;

    /**
     * @return SinkInterface
     */
    public function getSink(): SinkInterface;
}
