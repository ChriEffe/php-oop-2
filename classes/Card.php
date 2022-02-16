<?php 

class Card
{
    protected $accountHolder;
    protected $cardNumber;
    protected $expDate;
    protected $cvc;

    public function __construct($accountHolder, $cardNumber, $expDate, $cvc) {
        $this->accountHolder = $accountHolder;
        $this->cardNumber = $cardNumber;
        $this->expDate = $expDate;
        $this->cvc = $cvc;
    }

    /**
     * Get the value of accountHolder
     */ 
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * Set the value of accountHolder
     *
     * @return  self
     */ 
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of expDate
     */ 
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set the value of expDate
     *
     * @return  self
     */ 
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get the value of cvc
     */ 
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * Set the value of cvc
     *
     * @return  self
     */ 
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;

        return $this;
    }
}

?>