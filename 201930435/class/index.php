<?php
// echo "대림대학교";

function hello($name)
{
    echo $name;
}

if(!function_exists("hello")){
    function hello($name)
{
    echo $name;
}
}

$name = "univ";

hello("대림대학교");
hello("daelim");