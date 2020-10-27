<?php
#echo __FILE__." : ".__LINE__."<br>";

// 함수의 이름 중복해서 선언을 할 수 없습니다.
// 함수목록 검사해서, 이전에 생성한적이 있으면
// 제외하고...
// 없으면 새롭게 선언을 해주면 된다.

#1. 함수의 목록
// 함수의 목록을 배열로 반환.
/*$funcs = get_defined_functions();
echo "<pre>";
print_r($funcs);
echo "</pre>";
*/
// 여기에 있으면?? 없으면???

if(function_exists("hello")) {
    // 목록이 있는 경우 실행하는 코드 블럭
    echo "hello 함수가 있군요.";
} else{
    // 없는 경우 실행하는 코드 블럭
    echo "hello가 뭐에요???";

    // 코드블럭안에서 함수를 선언을 할 수 있어요
    function hello($name="아무개") // 초기값
    {
    $text ="";
    // 복합연산자
    // 문자열을 결합합니다. (.)

    $text .=    "안녕하세요." . "<br>";
    $text .=  "날씨가 참 좋네요." . "<br>";
    $text .=   "저는 대림대학교 <b> $name </b> 입니다.<br>";
    
    //함수의 내부값 반환
    return $text;
    }
}