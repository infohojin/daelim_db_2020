<?php
// echo "대림대학교";

class daelimUniv
{
    private $name;

    function hello($name)
    {
        echo $name;
    }

    function hi($name)
    {
        echo $name;
    }
}

$obj = new \daelim\mobile\daelimUniv;
$obj -> hello("대림대학교111");

/*
$name = "univ";

hello("대림대학교");
hello("daelim");
*/