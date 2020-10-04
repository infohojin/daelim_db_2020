<?php

hello("대림이");

hello("대숙이");

function hello($name)
{
    echo "안녕하세요." . "<br>";
    print "날씨가 참 좋네요." . "<br>";
    echo "저는 대림대학교 $name 입니다.<br>";

    return true;
}