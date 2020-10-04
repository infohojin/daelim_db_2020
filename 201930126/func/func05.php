<?php
//함수
//1.사용자 함수(내가만든 함수)
//2.내장함수(언어에서 기본적으로있는 함수)
    if(function_exists("hello"))
    {
        echo"hello 함수가 존재한다";
    }else
    {
        echo"hello 함수가 없다";
    }

/*
function hello($name)
{
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print $name . "입니다<br>";
    return true;
}
*/
