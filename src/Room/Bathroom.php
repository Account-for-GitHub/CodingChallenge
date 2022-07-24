<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Furniture\Sink;
use Ekomobile\CodingChallenge\Furniture\SinkInterface;
use Ekomobile\CodingChallenge\Furniture\Toilette;
use Ekomobile\CodingChallenge\Furniture\ToiletteInterface;
use Ekomobile\CodingChallenge\SpaceAbstractClass;

class Bathroom extends SpaceAbstractClass implements BathroomInterface
{
    /**
     * @var SinkInterface
     */
    private $sink;

    /**
     * @var ToiletteInterface
     */
    private $toilette;

    public function __construct()
    {
        $this->toilette = new Toilette();
        $this->sink = new Sink();
    }

    /**
     * {@inheritdoc}
     */
    public function getToilette(): ToiletteInterface
    {
        return $this->toilette;
    }

    /**
     * {@inheritdoc}
     */
    public function getSink(): SinkInterface
    {
        return $this->sink;
    }

    /**
     * {@inheritdoc}
     */
//    public function accept(VisitorInterface $person): SpaceInterface
//    {
//        // TODO: Implement accept() method.
//    }
}