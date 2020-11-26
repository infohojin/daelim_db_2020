<?php

//echo "대림대학교";

namespace daelim\moblie;

class daelimUniv
{
    private $name;

    public function hello($name) {
        echo $name;
    }
    
    protected function hi($name) {
        echo $name;
    }
    
}

$obj = new \daelim\moblie\daelimUniv;

$obj->hello("대림대학교");
/*
$name = "univ";

hello("대림대학교");
hello("daelim");*/