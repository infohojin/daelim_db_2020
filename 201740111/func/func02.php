<?php
hello("종태");
hello("대림이");

function hello($name)
{
    echo "안녕하세요"."<br>";
    print "날씨가 참 좋네요." . "<br>";
    echo "저는 대림대학교 <b>$name</b> 입니다. <br>";
    
    return true;
}