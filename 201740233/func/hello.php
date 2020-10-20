<?php

# echo __FILE__." : ".__LINE__."<br>";

// 함수의 이름을 중복해서 선언 불가능
// 함수목록을 검사해서 이전에 생성한 적이 있으면 제외 없으면 새롭게 선언

#1. 함수의 목록
// 함수의 목록을 배열로 반환

/*
$funcs = get_defined_functions();
echo "<pre>";
print_r($funcs);
echo "</pre>";
*/

if (function_exists("hello")){
    echo "hello 함수가 존재";
} else {
    echo "hello 가 없음";

    function hello($som = "안그냐") // 초기값
    {
    $text = "";
    // 복합연산자
    // 문자열을 결합합니다. (.)
    $text .= "아~" . "<br>";
    $text .= "춥다" . "<br>";
    $text .= "낮엔 덥던데 <b>$som</b> <br>";

    // 함수 내부값 반환
    return $text;
    }

}



