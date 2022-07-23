<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\Room\Interfaces\WithSink;
use Ekomobile\CodingChallenge\Room\Interfaces\WithCooker;
use Ekomobile\CodingChallenge\Room\Interfaces\WithGarbageBin;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTv;
use Ekomobile\CodingChallenge\Room\Interfaces\WithDishWasher;
use Ekomobile\CodingChallenge\Room\Interfaces\WithTrashCan;

/**
 * Сердце дома. По крайней мере, для кого-то.
 */
interface KitchenInterface extends SpaceInterface, WithSink, WithCooker, WithGarbageBin, WithTv, WithDishWasher, WithTrashCan
{

}