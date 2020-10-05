<?php
#인사말1, 함수 호출
hello("대남이"); 

//함수의 매개변수 $name = "대남이";

#인사말2, 함수 호출
hello("대숙이");

//함수 선언
//입력 소괄호() 와 출력 return
//입력(), 여러 개의 값이 전달
//출력은 return
function hello($name) //함수 내에서 받는 변수, 매개변수
{
    // $name 변수 함수 내에 생성
    echo "안녕하세요.<br>"; //br태그로 다음줄 전송
    print "대림대학교의 ";
    print $name." 입니다.<br>";
    return true;
}