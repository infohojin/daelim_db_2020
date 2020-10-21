<?php

print hello();

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
