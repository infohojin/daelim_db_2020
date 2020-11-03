<?php

$name = "대림대학교";

echo $name;

//
function hello($name){
    echo $name;
}

// 함수가 중복 선언 할 수 없기 떄문에..
if(!function_exists("hello")){
    function hello($name){
        echo $name;
    }
}

//호출
hello("대림이");
