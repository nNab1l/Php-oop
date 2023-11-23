<?php
class Auto {
    public int $passengers = 2;
    private $color = "red";
    private $seats;
    private $speed = 100;


    function checkPassengers(){
        if ($this->passengers > 4){
            echo "full";
        }
    }

    function addPassenger($newPassengers) {
        $this->passengers += $newPassengers;
        return $this->passengers;
    }

    function speedUp($incrementSpeed) {
        $this->speed += $incrementSpeed;
        return $this->speed;
    }

    function brake() {
        $this->speed--;
        return $this->speed;
    }

 
}


class Vrachtwagen extends Auto{
    private $loading = false;
    private $load;

    function addLoad($incrementLoad) {
        $this->load += $incrementLoad;
        return $this->load;
    }

    function removeLoad() {
        $this->load--;
        return $this->load;
    }

    function speedUp($incrementSpeed) {
        $this->speed += $incrementSpeed / 2;
        return $this->speed;
    }

    
    
}


$car = new Auto();
$vrachtwagen = new Vrachtwagen();
echo $vrachtwagen->addLoad(4);
$car->speedUp(19);
echo $car->brake(); 
echo $car->addPassenger(3);
$car->checkPassengers();
?>
