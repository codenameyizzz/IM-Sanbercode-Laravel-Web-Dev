<?php
require_once 'animal.php';

class Ape extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2; // Override default value for legs
    }

    public function yell()
    {
        return "Yell: Auooo";
    }

    public function get_details()
    {
        return parent::get_details() . $this->yell() . "\n";
    }
}
?>