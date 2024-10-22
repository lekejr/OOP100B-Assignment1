<?php

class SportCar {
    protected $maker;
    protected $model;
    protected $topSpeed;

    public function __construct($maker, $model, $topSpeed) {
        $this->maker = $maker;
        $this->model = $model;
        $this->topSpeed = $topSpeed;
    }

    public function getDescription() {
        return "{$this->maker} {$this->model} - Top Speed: {$this->topSpeed} km/h";
    }
}

class LuxuryCar extends SportCar {
    private $interior;
    private $hasSunroof;

    public function __construct($maker, $model, $topSpeed, $interior, $hasSunroof) {
        parent::__construct($maker, $model, $topSpeed); 
        $this->interior = $interior;
        $this->hasSunroof = $hasSunroof;
    }

    public function getDescription() {
        $sunroofStatus = $this->hasSunroof ? "with sunroof" : "without sunroof";
        return parent::getDescription() . " - Interior: {$this->interior}, {$sunroofStatus}";
    }

   
    public function openSunroof() {
        if ($this->hasSunroof) {
            return "Opening the sunroof of the {$this->maker} {$this->model}.";
        }
        return "This car does not have a sunroof.";
    }
}


$sportCar = new SportCar("Benz", "C300", 330);
echo $sportCar->getDescription() . '<br>';


$luxuryCar = new LuxuryCar("Mercedes", "GLE", 350, "Leather", true);
echo $luxuryCar->getDescription() . "<br>";
echo $luxuryCar->openSunroof() . "<br>";

