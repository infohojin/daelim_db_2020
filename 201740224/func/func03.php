<?php
//함수를 호출
hello("대남이");

hello("대숙이");

//함수 선언
//입력 소괄호 () 출력 return
//입력 () , 여러개의 값이 전달..
//출력은 return
function hello($name)
{
    //$name 이라는 변수가 함수내에 생성됨
    echo "안녕하세요<br>";
    print "대림대학교의";
    print $name . " 입니다.<br>";
    return true;
}