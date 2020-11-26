<?php

// 선언
function hello($name) {
    echo $name;
}

// 함수 중복 선언 불가
if (!function_exists("hello")) {
    function hello($name) {
        echo $name;
    }
}

$name = "univ";

// 호출

hello("대림");
hello("daelim");
