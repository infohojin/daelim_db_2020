<?php

$name1 = hello("황지민");
echo $name1;
echo hello("황민지");


function hello($name){
    $text = "";
    $text .= "안녕하세요". "<br>";
    $text .= "날씨가 참 좋네요" . "<br>";
    $text .= "저는 대림대학교 201740238 <b>$name</b> 입니다." . "<br>";

    return $text;
}

