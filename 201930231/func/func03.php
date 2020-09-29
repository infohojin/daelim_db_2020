<?php
$name1 = hello("대림이");
echo $name1;
echo hello("대숙이");

// 전달하는 값 = 받는 값 1:1
// 1:1이 아닌 경우

print hello();

function hello($name="전소진")  // 초기값
{
    $text = "";
    // 복합연산자
    // 문자열을 결합합니다. (.)
    $text .= "안녕하세요." . "<br>";
    $text .= "날씨가 참 좋네요!" . "<br>";
    $text .= "저는 대림대학교 <b>$name</b>입니다.<br>";

    // 함수의 내부값 반환
    return $text;
}
