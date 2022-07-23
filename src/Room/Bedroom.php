<?php

namespace Ekomobile\CodingChallenge\Room;


use Ekomobile\CodingChallenge\Furniture\Bed;
use Ekomobile\CodingChallenge\Furniture\BedInterface;
use Ekomobile\CodingChallenge\Furniture\GarbageBin;
use Ekomobile\CodingChallenge\Furniture\GarbageBinInterface;
use Ekomobile\CodingChallenge\Furniture\Table;
use Ekomobile\CodingChallenge\Furniture\TableInterface;
use Ekomobile\CodingChallenge\VisitorInterface;
use Ekomobile\CodingChallenge\SpaceInterface;

class Bedroom implements BedroomInterface
{
    /**
     * @var BedInterface
     */
    private $bed;

    /**
     * @var GarbageBinInterface
     */
    private $garbageBin;

    /**
     * @var TableInterface
     */
    private $table;

    public function __construct()
    {
        $this->table = new Table();
        $this->garbageBin = new GarbageBin();
        $this->bed = new Bed();
    }

    /**
     * Возвращает кровать.
     *
     * @return mixed
     */
    public function getBed(): BedInterface
    {
        return $this->bed;
    }

    /**
     * Возвращает мусорную корзину.
     *
     * @return GarbageBinInterface
     */
    public function getGarbageBin(): GarbageBinInterface
    {
        return $this->garbageBin;
    }

    /**
     * Возвращает стол.
     *
     * @return TableInterface
     */
    public function getTable(): TableInterface
    {
        return $this->table;
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