<?php 

require_once __DIR__ ."/User.php";

class PremiumUser extends User
{
    protected $level;

    public function __construct($level, $name, $lastName, $age, $email, $address, $card) {
        parent:: __construct($name, $lastName, $age, $email, $address, $card);
        $this->setLevel($level);
    }

    /**
     * Get the value of level
     */ 
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */ 
    public function setLevel($level)
    {
        if ($level == "bronze") {
            $this->level = 20;
        } else if ($level == "silver") {
            $this->level = 30;
        } else if ($level == "gold") {
            $this->level = 40;
        }

        return $this;
    }
}

?>