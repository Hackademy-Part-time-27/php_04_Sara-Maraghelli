<?php
//Traccia 1

class Continent
{
    public $nameContinent;

    public function __construct($nameContinent)
    {

        $this->nameContinent = $nameContinent;
    }
  
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct ($nameContinent,$nameCountry)
    {
        parent::__construct($nameContinent);
        $this->nameCountry = $nameCountry;
    }
}

class Region extends Country {
    public $nameRegion; 

    public function __construct($nameContinent,$nameCountry,$nameRegion){
        parent::__construct($nameContinent,$nameCountry);
        $this->nameRegion = $nameRegion;


    }
}

class Province extends Region {
    public $nameProvince;

    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince){ 
        parent::__construct($nameContinent,$nameCountry,$nameRegion);
        $this->nameProvince = $nameProvince;    
}
};

class City extends Province {

    public $nameCity;   

    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity){
        parent::__construct($nameContinent,$nameCountry,$nameRegion,$nameProvince);
        $this->nameCity = $nameCity;    
    }
}

class Street extends City {

    public $nameStreet;   

    public function __construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity,$nameStreet){
        parent::__construct($nameContinent,$nameCountry,$nameRegion,$nameProvince,$nameCity);
        $this->nameStreet= $nameStreet;
        }
        public function getMyCurrentLocation(){
            echo("Mi trovo in " .$this->nameContinent." ".$this->nameCountry." ".$this->nameRegion." ".$this->nameProvince." ".$this->nameCity." ".$this->nameStreet);  
       }
    } 
      
  
       
$Continent = new Continent("Europa");
$Country = new Country("Europa","Italia");
$Region = new Region("Europa","Italia","Toscana");
$Province = new Province("Europa","Italia","Toscana","PT");
$City = new City ("Europa","Italia","Toscana","PT","Pistoia");
$Street= new Street ("Europa","Italia","Toscana","PT","Pistoia","Via Ciliegiole,87");


$Street->getMyCurrentLocation();


