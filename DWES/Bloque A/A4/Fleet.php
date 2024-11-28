<?php
class Fleet{


    public string $name;
    public array $vehicles;

    public function __construct (string $name, array $vehicles = []){
        $this->name = $name;
        $this->vehicles = $vehicles;
    }

    //Si no añades public, por defecto es public
    function addVehicles(Vehicle $vehicle): void{
        $this->vehicles[] = $vehicle;
    }

    public function listVehicles():array{
        return $this -> vehicles;
    }

    function listAvaiableVehicles():array{
        $avaiableVehicles = [];
        foreach($this->vehicles as $vehicle){
            if($vehicle->isAvaiable()){
                $avaiableVehicles[] = $vehicle;
            }
        }
        return $avaiableVehicles;

    }


}