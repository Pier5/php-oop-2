<?php 

include_once  __DIR__ . '/products.php';
include_once  __DIR__ . '/registeredUsers.php';
class User {
    protected $name;
    protected $surname;

    private $discount = 0;
    
    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }


    // get name
    public function getName() {
        return $this->name;
    }


    // get surname
    public function getSurname() {
        return $this->surname;
    }


    // set e get discount
    public function setDiscount($discount) {
        $this->discount = $discount;
        return $this;
    }
    
    public function getDiscount() {
        return $this->discount;
    }

}


