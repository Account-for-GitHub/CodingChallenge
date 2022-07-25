<?php
namespace Ekomobile\CodingChallenge;

/**
 * В конце концов, дом - это набор комнат
 */
interface HouseInterface
{
    public function getAllRooms(): array;
}