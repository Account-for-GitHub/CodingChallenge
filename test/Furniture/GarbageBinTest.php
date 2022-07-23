<?php

namespace Ekomobile\CodingChallenge\Test\Furniture;

use Ekomobile\CodingChallenge\Furniture\GarbageBin;
use Ekomobile\CodingChallenge\Stuff\TrashInterface;
use PHPUnit\Framework\TestCase;

class GarbageBinTest extends TestCase
{
    /**
     * Очень наивный тест..
     *
     * @test
     */
    public function returnsTrash()
    {
        $bin = new GarbageBin();
        $this->assertInstanceOf(
            TrashInterface::class,
            $bin->removeTrash(),
            "Корзина должна вернуть какой-то мусор"
        );
        // но это происходит из раза в раз
        $this->assertInstanceOf(
            TrashInterface::class,
            $bin->removeTrash(),
            "корзина постоянно возвращает мусор!"
        );
    }
}
