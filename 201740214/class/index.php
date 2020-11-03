<?php
$name = "머림머학교";

//선언
function hello($name) {
    echo $name;
}


if(!function_exists("hello")) {
    function hello($name) {
        echo name;
    }
}

//호출
hello("대림이");
hello("대숙이");