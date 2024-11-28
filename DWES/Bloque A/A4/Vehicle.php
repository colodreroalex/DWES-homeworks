<?php

class Vehicle{

    public string $make;
    public string $model;
    public string $plate;
    public bool $available;

    public function __construct(string $make, string $model, string $plate, bool $available)
    {
        $this->make = $make;
        $this->model = $model;
        $this-> plate = $plate;
        $this -> available = $available;  
    }

    public function getDetails(): string{
        return "Make: " . $this-> make . "Model: " . $this-> model . "Plate: " . $this-> plate . 
        "available: " . $this-> available;
    }

    public function isAvaiable():bool{
        if($this->available){
            return true;
        }
        else{
            return false;
        }
    }

}
