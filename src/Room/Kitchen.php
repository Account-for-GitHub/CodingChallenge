<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Furniture\Cooker;
use Ekomobile\CodingChallenge\Furniture\CookerInterface;
use Ekomobile\CodingChallenge\Furniture\DishWasher;
use Ekomobile\CodingChallenge\Furniture\DishWasherInterface;
use Ekomobile\CodingChallenge\Furniture\GarbageBin;
use Ekomobile\CodingChallenge\Furniture\GarbageBinInterface;
use Ekomobile\CodingChallenge\Furniture\Sink;
use Ekomobile\CodingChallenge\Furniture\SinkInterface;
use Ekomobile\CodingChallenge\Furniture\TvInterface;
use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\VisitorInterface;

/**
 * Простая реализация Кухни
 */
class Kitchen implements KitchenInterface
{
    /**
     * @var CookerInterface
     */
    private $cooker;

    /**
     * @var SinkInterface
     */
    private $sink;

    /**
     * @var GarbageBinInterface
     */
    private $garbageBin;

    /**
     * @var TvInterface
     */
    private $tv;

    /**
     * @var DishWasherInterface
     */
    private $dishWasher;

    public function __construct()
    {
        $this->dishWasher = new DishWasher();
        $this->sink = new Sink();
        $this->garbageBin = new GarbageBin();
        $this->cooker = new Cooker();
    }

    /**
     * @return SinkInterface
     */
    public function getSink(): SinkInterface
    {
        return $this->sink;
    }

    /**
     * @return CookerInterface
     */
    public function getCooker(): CookerInterface
    {
        return $this->cooker;
    }

    /**
     * @return GarbageBinInterface
     */
    public function getGarbageBin(): GarbageBinInterface
    {
        return $this->garbageBin;
    }

    /**
     * @return TvInterface
     */
    public function getTv(): TvInterface
    {
        return $this->tv;
    }

    public function getDishWasher(): DishWasherInterface
    {
        return $this->dishWasher;
    }

    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return SpaceInterface
     */
    public function accept(VisitorInterface $person): SpaceInterface
    {
        // TODO: Implement accept() method.
    }
}