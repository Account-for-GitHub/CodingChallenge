<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Dishes;

class DishWasher implements DishWasherInterface
{
    
    private $used_dishes = [];
    
    private $dishes_in_dishwasher = [];
    
    public function __construct()
    {
        $this->used_dishes[] = new Dishes();
    }
    
    /**
     * Загрузи, чтобы помыть.
     *
     * @param Dishes $dishes
     * @return DishWasherInterface
     */
    public function load(Dishes $dishes): DishWasherInterface
    {
        $this->dishes_in_dishwasher[] = $dishes;
        
        return $this;
    }

    /**
     * @return void
     */
    public function executeClearUpStrategy()
    {
        $this->load(array_pop($this->used_dishes));
    }
}