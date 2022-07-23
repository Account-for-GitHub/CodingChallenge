<?php
namespace Ekomobile\CodingChallenge\Furniture;

/**
 * В доме нужна кровать, так как на диване через несколько дней станет некомфортно.
 */
interface BedInterface
{
    /**
     * Кровать нужно иногда заправлять
     *
     * @return BedInterface
     */
    public function tidyUp(): BedInterface;

    /**
     * @return BedInterface
     */
    public function takeANap(): BedInterface;
}