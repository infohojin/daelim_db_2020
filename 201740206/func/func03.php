<?php
# 인사말1, 함수 호출
hello("대남이");

# 인사말2,  함수 호출
hello("대숙이");

function hello($name)
{
    echo "안녕하세요 <br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>";
    return true;
}