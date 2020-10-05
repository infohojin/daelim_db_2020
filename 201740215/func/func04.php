<?php

hello("대남이"); 

#인사말2,함수를 호출
hello("대숙이");



//함수를 선언할때 , 함수의 목록을 검사해서 중복여부 체크
//서버 실행오류를 방지
//목록,존재하는 검사
#목록,내장함수
/*
$funcs=get_defined_functions(); //함수의 목록을 배열로 저장
echo "<pre>";
print_r($funcs);
echo "</pre>";
*/

//검사 =>조건제어문
//if ( !!) ----else ----
/*
if(조건-논리값) 성공
if(조건) 성공-조건값 존재한다. else 실패-조건값이 없다.

if(조건){코드블럭}
if(조건){코드블럭} else {코드블럭}
*/

if(function_exists("hello")){
    //여기에 코드실행
    echo "hello함수가 존재한다";
}else{
    //없다. 여기에 코드를실행
    echo "hello 함수가 무엇인가?";
}
//함수의 이름은 '중복' 할수 없다.
function hello($name)
{
    // $name 변수 함수내에 생성됨
    echo "안녕하세요.<br>";
    print "대림대학교의";
    print $name ." 입니다.<br>" ;
    return true;
}