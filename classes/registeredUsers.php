<?php

class Member extends User {
    protected $userName;
    protected $password;

    private $cellphone;
    private $mail;
    private $dateOfBirth;
    private $discount = 20;

    public function __construct($name, $surname, $userName, $password) {
        User::__construct($name, $surname);
        $this->userName = $userName;
        $this->password = $password;
    }

    // get userName
    public function getUserName() {
        return $this->userName;
    }

    // get password 
    public function getPassword() {
        return $this->password;
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