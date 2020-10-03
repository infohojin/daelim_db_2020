<?php

//입력은 여러개를 받을 수 있고
hello("대림이");
hello("대순이");

function hello($name)
{
    echo "안녕하세요." . "<br>";
    print "날씨가 참 좋네요." . "<br>";;
    echo "저는 대림대학교 <b>$name</b> 입니당.<br>";
    //출력은 반드시 하나야만 한다
    return true;
}
