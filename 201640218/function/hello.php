<?php
//echo __FILE__." : ".__LINE__."<br>";
//함수의 이름 중복 선언 X
// 함수목록 검사 -> 이전에 생성한 적이 있으면 제외 or 없으면 새롭게 선언
#1. 함수의 목록
// 함수의 목록 배열 반환
// get_defined_functions();
// echo "<pre>";
// print_r($funcs);
// echo "</pre>";

if(function_exists("hello")){
    echo "hello 함수 존재";
}else{
    echo "hello 함수 없음";
    function hello($name="아무개") {
        $text = "";
        //복합연산자
        //문자열을 결합합니다. (.)
        
        $text .= "안녕하세요." . "<br>";
        $text .= "날씨가 참 좋네요.". "<br>";
        $text .= "저는 대림대학교 $name 입니다.". "<br>";
        return $text; 
    }
}


