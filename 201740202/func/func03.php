<?php
// #인사말1
//함수 호출시 전달되는값 == 인자값
hello("대남이");

//함수의 매개변수 $name == 대남이

// #인사말2
hello("대숙이");

//함수를 선언
//입력 소괄로()과 출력 return
//입력(), 여러개의 값을 전달
//출력은 return

function hello($name)
//함수내에서 받는 변수 매개변수
{ 

    // $name 변수 함수 내에 생성됩니다
    echo "안녕하세요.<br>"; 
    print "대림대학교의 ";
    print  $name." 입니다. "."<br>";
    return true;
}