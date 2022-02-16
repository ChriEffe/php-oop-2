<?php 

trait PremiumUser
{
    protected $level;

    public function __construct($level) {
        parent::__construct($name, $lastName, $age, $email, $address, $card);
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