<?php

$name1 = hello("대림이");
echo $name1;
echo hello("대순이");
// 전달하는 값 = 받는 값 1:1
// 1:1이 아닌 경우...
hello();

function hello($name="바보") //초기값
{
    $text .= "안녕하세요." . "<br>";
    $text .= "날씨가 참 좋네요." . "<br>";;
    $text .= "저는 대림대학교 <b>$name</b> 입니당.<br>";

    // 함수의 내부값 반환
    return $text;
}
