<?php
//함수
//  사용자함수 (내가 정의한 함수)
//  내장함수 (언어/php 자체적으로 지원해 주는 함수)

// if 조건제어문
// 검사 > 결과를 논리값
if (function_exists("hello")) {
    echo "hello 함수가 존재하네용.";
} else {
    echo "hello 함수가 뭐야? 첨들어요.";
}

// 함수 이름 중복불가
//function hello($name)
//매개변수 $name
//{
//echo "안녕하세요. <br>"; // BR태그로 다음줄 전송
// print "머림머학교의";
//  print $name. "입니다. <BR>"; 
//    return true;
//}