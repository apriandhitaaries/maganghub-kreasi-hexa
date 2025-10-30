<?php
class Animal
{
    private $name;
    private $legs = 4;
    private $cold_blooded = "no";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getColdblooded()
    {
        return $this->cold_blooded;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function setColdBlooded($cold_blooded)
    {
        $this->cold_blooded = $cold_blooded;
    }
}
