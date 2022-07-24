<?php

namespace Ekomobile\CodingChallenge\Furniture;

/*
 * Способ почилить
 */
interface TvInterface extends Furniture
{
    /**
     * Экран покрывается пылью и просмотр телевизора перестает доставлять
     * удовольствие.
     *
     * @return TvInterface
     */
    public function removeDust(): TvInterface;

    /**
     * Свежие голливудские фильмы развлекут вас!
     *
     * @return TvInterface
     */
    public function watchAMovie(): TvInterface;
}