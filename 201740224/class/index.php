<?php

$name = "대림대학교1";

//echo $name; 여기있는 name 과
//선언
function hello($name){//여기있는 name은 다른 name이다.
    echo $name;
}
//함수가 중복 선언 할 수 없기에
if(!function_exists("hello")){
    function hello($name){//여기있는 name은 다른 name이다.
    echo $name;
    }
}
//호출
hello ("대림이");
hello ("대숙이");