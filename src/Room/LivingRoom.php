<?php

namespace Ekomobile\CodingChallenge\Room;


use Ekomobile\CodingChallenge\Furniture\Sofa;
use Ekomobile\CodingChallenge\Furniture\SofaInterface;
use Ekomobile\CodingChallenge\Furniture\Table;
use Ekomobile\CodingChallenge\Furniture\TableInterface;
use Ekomobile\CodingChallenge\Furniture\Tv;
use Ekomobile\CodingChallenge\Furniture\TvInterface;
use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\VisitorInterface;

class LivingRoom implements LivingRoomInterface
{
    /**
     * @var TableInterface
     */
    private $table;

    /**
     * @var TvInterface
     */
    private $tv;

    /**
     * @var SofaInterface
     */
    private $sofa;

    public function __construct()
    {
        $this->table = new Table();
        $this->sofa = new Sofa();
        $this->tv = new Tv();
    }

    /**
     * Тут должен быть диван, иначе, что это за гостиная?
     *
     * @return SofaInterface
     */
    public function getSofa(): SofaInterface
    {
        return $this->sofa;
    }

    /**
     * Лучше использовать вместе с диваном.
     *
     * @return TvInterface
     */
    public function getTv(): TvInterface
    {
        return $this->tv;
    }

    /**
     * Отличное место, чтобы поесть.
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