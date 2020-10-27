<?php

$name = "대림대학교1";

// 선언
function hello($name) {
    echo $name;
}

// 함수가 중복 선언 할 수 없기.
if (!function_exists("hello")) {
    function hello($name) {
        echo $name;
    }
}


// 호출
hello("대림이");
hello("대숙이");
