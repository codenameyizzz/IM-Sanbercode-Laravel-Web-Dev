<?php
require_once 'animal.php';

class Frog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function jump()
    {
        return "Jump: hop hop". "<br>";
    }

    public function get_details()
    {
        return parent::get_details() . $this->jump() . "\n";
    }
}
?>