<?php

// // 함수의 목록을 배열로 저장
// $funcs = get_defined_functions();
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";

if (function_exists("hello")) {
    echo "hello 함수가 존재합니다. <br>";
} else {
    echo "hello 함수가 없습니다. <br>";
    
    function hello($name = "index") { // 초기값 지정
        echo "안녕하세요. <br>";
        echo "대림대학교의 <br>";
        echo $name . "입니다. <br>";
        return true;
    }
}

hello();
hello("진예도");


