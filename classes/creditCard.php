<?php

class CreditCard {
    private $name;
    private $surname;
    private $cardNumber;
    protected $expirationDate;
    private $Cvv;


    public function __construct($name, $surname, $cardNumber, $expirationDate, $Cvv) {
        $this->name = $name;
        $this->surname = $surname;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->Cvv = $Cvv;
    }

    //set e get name
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    //set e get surname
    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }

    //set e get cardNumber
    public function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }


    //set e get expirationDate
    public function setExpirationDate($expirationDate) {
        $today = date('m/Y');

        // var_dump($today, $expirationDate);

        if ($expirationDate > $today) {
            $this->$expirationDate = $expirationDate;
        }  else {
            $this->$expirationDate = 'La carta è scaduta!';
        }
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    //set e get CVV
    public function setCvv($Cvv) {
        $this->Cvv = $Cvv;
        return $this;
    }

    public function getCvv() {
        return $this->Cvv;
    }
}
    