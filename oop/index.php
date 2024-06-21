<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo $sheep->get_details();
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->get_details();
echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->get_details();
?>