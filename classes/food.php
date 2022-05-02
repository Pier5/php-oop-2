<?php

class Food extends Product {
    protected $brand;
    protected $quantity;

    public function __construct($name, $price, $animalCategory, $brand, $quantity) {
        parent::__construct($name, $price, $animalCategory);
        $this->brand = $brand;
        $this->quantity = $quantity;
    }

    // get brand
    public function getBrand() {
        return $this->brand;
    }

    // set e get quantity
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }
    
    public function getQuantity() {
        return $this->quantity;
    }
    
}