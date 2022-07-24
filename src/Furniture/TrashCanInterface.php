<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\TrashInterface;

/**
 * Кто-нибудь будет убирать мусор, надеюсь, раз в неделю.
 */
interface TrashCanInterface extends Furniture
{
    /**
     * Если вы захотите навсегда избавиться от мусора, он прилетит сюда.
     *
     * @param TrashInterface $trash
     * @return TrashCanInterface
     */
    public function dump(TrashInterface $trash): TrashCanInterface;
}