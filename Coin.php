<?php
class Coin {
    private $country;
    private $worth;
    private $manufacture;
    private $material;


    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }
    

    public function setWorth($worth)
    {
        $this->worth = $worth;
    }

    public function getWorth()
    {
        return $this->worth;
    }

    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;
    }

    public function getManufacture()
    {
        return $this->manufacture;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}

?>