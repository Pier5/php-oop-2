<?php

class PetBed extends Product {
    protected $brand;
    protected $size;

    public function __construct($name, $price, $animalCategory, $brand, $size) {
        parent::__construct($name, $price, $animalCategory);
        $this->brand = $brand;
        $this->size = $size;
    }

    // get brand
    public function getBrand() {
        return $this->brand;
    }

    // set e get size
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }
    
    public function getSize() {
        return $this->size;
    }
}