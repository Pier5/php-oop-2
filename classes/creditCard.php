<?php

class CreditCard  {
    protected $holderName;
    protected $holderSurname;
    protected $cardNumber;
    protected $expirationDate;
    protected $Cvv;


    public function __construct($holderName, $holderSurname, $cardNumber, $expirationDate, $Cvv) {
        $this->holderName = $holderName;
        $this->holderSurname = $holderSurname;
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->Cvv = $Cvv;
    }

    //set e get holderName
    public function setHolderName($holderName) {
        $this->holderName = $holderName;
        return $this;
    }

    public function getHolderName() {
        return $this->holderName;
    }

    //set e get holderSurname
    public function setHolderSurname($holderSurname) {
        $this->holderSurname = $holderSurname;
        return $this;
    }

    public function getHolderSurname() {
        return $this->holderSurname;
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
        $today = date('Y-m-d');

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
    