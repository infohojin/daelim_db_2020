<?php
# 인사말1, 함수를 호출
// 함수 호출시 전달되는 값 - 인자값
hello("대남이"); 

// 함수의 매개변수 $name = "대남이";

# 인사말2, 함수를 호출
hello("대숙이");

// 함수를 정의
// 입력 소괄호() 과 출력 return
// 입력(), 여러개의 값이 전달.
// 출력은 return
function hello($name)
// 함수내에서 받는 변수, 매개변수
{
    // $name 변수 함수내에 생성.
    echo "안녕하세요. <br>";
    print "대림대학교의 ";
    print $name . " 입니다.<br>" ;
    return true;
}