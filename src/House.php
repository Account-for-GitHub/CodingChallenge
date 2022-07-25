<?php

namespace Ekomobile\CodingChallenge;


use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use PhpCollection\Set;
use PhpCollection\SetInterface;

class House extends SpaceAbstractClass implements HouseInterface, SpaceInterface
{

    /**
     * @var SetInterface of SpaceInterface
     */
	private $rooms;

    public function __construct()
    {
//        $this->rooms = new Set([new Bathroom(),new LivingRoom(), new Bedroom(), new Kitchen()]);
        $this->rooms = [new Bathroom(), new LivingRoom(), new Bedroom(), new Kitchen(), new LivingRoom()];
    }

    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return SpaceAbstractClass
     */
//    public function accept(VisitorInterface $person): SpaceInterface
//    {
//        // TODO: Implement accept() method.
//    }

    public function getAllRooms(): array
    {
        return $this->rooms;
    }
}