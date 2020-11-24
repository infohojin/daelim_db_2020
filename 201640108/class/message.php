<?php

//echo "대림대학교";
class message
{
    $name;
    
    function hello($name) {
        echo $name;
    }
    
    function hi($name) {
        echo $name;
    }
    
}

$obj = new message;

$obj->hello("대림대학교");
/*
$name = "univ";

hello("대림대학교");
hello("daelim");*/