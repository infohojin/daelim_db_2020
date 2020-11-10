<?php

class Daelim {
    function hello($name) {
        echo $name;
    }
    
    function daelim_number($number) {
        echo $number;
    }
}

$obj = new Daelim;

$obj -> hello("진예도");
$obj -> daelim_number("201740233");