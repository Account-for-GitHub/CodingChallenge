<?php

namespace Ekomobile\CodingChallenge;

/**
 * Базовый интерфейс для человека.
 */
interface VisitorInterface
{
    /**
     * Человек может посещать места, чтобы делать свои дела.
     *
     * @param SpaceAbstractClass $space
     * @return VisitorInterface
     */
    public function visit(SpaceInterface $space): VisitorInterface;
}