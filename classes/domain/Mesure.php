<?php

class Mesure{
    
    public $id;
    public $temperature;
    public $humidite;

    
    public function __construct($id, $temperature, $humidite)
    {

        $this->id = $id;
        $this->temperature = $temperature;
        $this->humidite = $humidite;
    }
}


