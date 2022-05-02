<?php

include_once  __DIR__ . '/food.php';
include_once  __DIR__ . '/petBed.php';

class Product {
    private $name;
    private $price;
    private $animalCategory;

    public function __construct($name, $price, $animalCategory) {
        $this->name = $name;
        $this->price = $price;
        $this->animalCategory = $animalCategory;
    }

    // set e get name
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }


    // set e get price
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
    
    public function getPrice() {
        return $this->price;
    }


    // set e get animalCategory
    public function setAnimalCategory($animalCategory) {
        $this->animalCategory = $animalCategory;
        return $this;
    }
    
    public function getAnimalCategory() {
        return $this->animalCategory;
    }
}