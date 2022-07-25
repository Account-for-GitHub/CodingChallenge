<?php

namespace Ekomobile\CodingChallenge;

use Ekomobile\CodingChallenge\Furniture\Furniture;

/**
 * Общий интерфейс для мест
 */
abstract class SpaceAbstractClass
{
//    /**
//     * Комната или дом может принимать посетителей.
//     *
//     * @param VisitorInterface $person
//     * @return SpaceInterface
//     */
//    public function accept(VisitorInterface $person): SpaceInterface;


	public function accept(VisitorInterface $person): void
	{
		$person->visit($this);
	}
	
	public function interactWith(string $furniture_class_name): ?Furniture
	{
		if(!$this->{strtolower($furniture_class_name)} instanceof Furniture)
		{
			return NULL;
		}
        $method = 'get' . $furniture_class_name;
		return $this->$method();
	}
    
    public function clearUpEveryFurnitureInRoom()
    {
        $clear_up_status = NULL;

        foreach($this as $property_value)
        {

            if(!$property_value instanceof Furniture)
            {
                continue;
            }

            // This is instanceof of Furniture
            $this->showFurnitureClearUpMessage($property_value);
            
            if(!$property_value->executeClearUpStrategy()){
                $clear_up_status = false;
                break;
            }
        }
        // Test $clear_up_status is always True 
        return $clear_up_status !== false;
    }
    
    public function showFurnitureClearUpMessage(Furniture $furniture_object)
    {
        $furniture_name_array = explode('\\', get_class($furniture_object));
        $furniture_name = array_pop($furniture_name_array);
        
        // По PSR-1 Лучше не распологать вывод echo в одном файле с другими функциями 
        echo  PHP_EOL . 'Person cleared-up: ' . $furniture_name;
    }
}