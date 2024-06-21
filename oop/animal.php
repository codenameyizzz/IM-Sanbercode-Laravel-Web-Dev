<?php
class Animal
{
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4; // Default value for legs
        $this->cold_blooded = "no"; // Default value for cold-blooded
    }

    public function get_details()
    {
        return "Name: {$this->name}<br>legs : {$this->legs}<br>cold blooded : {$this->cold_blooded}<br>";
    }
}
?>