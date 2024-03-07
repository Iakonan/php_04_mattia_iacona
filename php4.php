<?php


//TRACCIA 1
// class Continent{

//     public $nameContinent;
    
//     public function __construct($continent){
//         $this->nameContinent = $continent;
//     }

// }

// class Country extends Continent{
//     public $nameCountry;
    
//     public function __construct($continent, $country){
//         parent::__construct($continent);
//         $this->nameCountry = $country;
//     }
// }

// class Region extends Country{
//     public $nameRegion;
    
//     public function __construct($continent, $country, $region){
//         parent::__construct($continent, $country);
//         $this->nameRegion = $region;
//     }
// }

// class Province extends Region{
//     public $nameProvince;

//     public function __construct($continent, $country, $region, $province){
//         parent::__construct($continent, $country, $region);
//         $this->nameProvince = $province;
//     }
// }

// class City extends Province{
//     public $nameCity;

//     public function __construct($continent, $country, $region, $province, $city){
//         parent:: __construct($continent, $country, $region, $province);
//         $this->nameCity = $city;
//     }
// }

// class Street extends City{
//     public $nameStreet;

//     public function __construct($continent, $country, $region, $province, $city, $street){
//         parent:: __construct($continent, $country, $region, $province, $city);
//         $this->nameStreet = $street;
//     }

//     public function getMyCurrentLocation(){
//         echo "Mi trovo in " . $this->nameContinent . "," . $this->nameCountry . "," . $this->nameRegion . "," . $this->nameProvince . "," . $this->nameCity . "," . $this->nameStreet;
//     }
        
// }


// $myLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire,2D");

// // var_dump($myLocation);

// $myLocation->getMyCurrentLocation();

//TRACCIA 2

class Vertebrates {

    protected function cosaSono() {
        echo "Sono un animale vertebrato\n";
    }

    public function __construct() {
        $this->cosaSono();
    }
}

class WarmBlooded extends Vertebrates {

    protected function sonoASangueCaldo() {
        echo "Sono un animale a sangue caldo\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoASangueCaldo();
    }
}

class Mammals extends WarmBlooded {

    protected function sonoMammifero() {
        echo "Allatto i miei cuccioli\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoMammifero();
    }
}

class Birds extends WarmBlooded {

    protected function sonoUccello() {
        echo "Depongo uova!\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoUccello();
    }
}

class ColdBlooded extends Vertebrates {

    protected function sonoASangueFreddo() {
        echo "Sono un animale a sangue freddo\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoASangueFreddo();
    }
}

class Fish extends ColdBlooded {

    protected function sonoPesce() {
        echo "SPLASH!\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoPesce();
    }
}

class Reptiles extends ColdBlooded {

    protected function sonoRettile() {
        echo "Striscio, mordo e sono velenossssssso\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoRettile();
    }
}

class Amphibians extends ColdBlooded {

    protected function sonoAnfibio() {
        echo "Quanto mi piace rimanere umido!\n";
    }

    protected function cosaSono() {
        parent::cosaSono();
        $this->sonoAnfibio();
    }
}

$luccio = new Fish();
$crotalo = new Reptiles();

var_dump($luccio);

//$luccio->cosaSono();




