<?php
// #인사말1
//함수 호출시 전달되는값 == 인자값
hello("대남이");

//함수의 매개변수 $name == 대남이

// #인사말2
hello("대숙이");

//함수를 선언할때, 함수의 목록을 검사해서 중복여부체크
//서버 실행오류를 방지
//목록,존재라는검사
#목록,내장함수
$funcs = get_defined_functions();
echo"<pre>";
print_r($funcs);
echo"</pre>";

//검사.. > 조건제어문
//if(!!)else~
if(function_exists("hello")){
    echo "hello 함수가 존재합니다.";
}else{
   echo "hello 함수가 뭐에요?";
}

//함수선언
//함수의 이름은 중복될수없다
function hello($name)
//함수내에서 받는 변수 매개변수
{ 

    // $name 변수 함수 내에 생성됩니다
    echo "안녕하세요.<br>"; 
    print "대림대학교의 ";
    print  $name." 입니다. "."<br>";
    return true;
}