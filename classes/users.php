<?php 

class User {
    private $name;
    private $surname;
    private $cellphone;
    private $mail;
    private $dateOfBirth;
    private $discount = 20;

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


    // set e get cellphone
    public function setCellphone($cellphone) {
        $this->cellphone = $cellphone;
        return $this;
    }

    public function getCellphone() {
        return $this->cellphone;
    }

    // set e get mail
    public function setMail($mail) {
        $this->mail = $mail;
        return $this;
    }

    public function getMail() {
        return $this->mail;
    }

    // get dateOfBirth

    public function getDateOfBirth() {
        return $this->dateOfBirth;
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