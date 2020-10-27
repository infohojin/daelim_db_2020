<?php
// echo "대림대학교";

// 선언
function hello($name)  // 휘발성 변수
{
    echo $name;
}

if(!function_exists('hello')) {
    function hello($name)
    {
        echo $name;
    }
}

$name = "univ";  

hello("대림대학교");
hello("daelim");