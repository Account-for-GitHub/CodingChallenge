<?php

namespace Ekomobile\CodingChallenge\Room;

use Ekomobile\CodingChallenge\Room\Interfaces\WithToilette;
use Ekomobile\CodingChallenge\Room\Interfaces\WithSink;

/**
 * Не самое поэтичное место в доме, но очень необходимое.
 */
interface BathroomInterface extends WithToilette, WithSink
{

}
