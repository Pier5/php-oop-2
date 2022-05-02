<?php

include_once  __DIR__ . '/food.php';
include_once  __DIR__ . '/petBed.php';

class Product {
    protected $name;
    protected $price;
    protected $animalCategory;
    protected $discount;

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

    // set e get discount
    public function setDiscount($discount) {
        $this->discount = $discount;
        return $this;
    }
    
    public function getDiscount($_discount) {
        $discount = $this->price * $_discount / 100;
        $this->price = $this->price - $discount;
        return $this->price;
    }


}