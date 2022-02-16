<?php 

class Product
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
}

?>