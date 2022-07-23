<?php

namespace Ekomobile\CodingChallenge;


use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use PhpCollection\Set;
use PhpCollection\SetInterface;

class House implements HouseInterface
{

    /**
     * @var SetInterface of SpaceInterface
     */
    private $rooms;

    public function __construct()
    {
        $this->rooms = new Set([new Bathroom(),new LivingRoom(), new Bedroom(), new Kitchen()]);
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