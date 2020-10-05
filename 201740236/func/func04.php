<?php

hello("머남이"); // 함수

hello("머숙이"); // 함수

// 함수 선언할때, 함수 목록 검사해서 중복여부체크
// 서버 실행오류 방지
// 목록, 존재하는 검사
# 목록, 내장함수
$funcs = get_defined_functions();
echo"<pre>";
print_r($funcs);
echo"</pre>";

// 검사 .. > 조건제어문
if (function_exists("hello")) {
    echo "hello 함수가 존재하네용.";
} else {
    echo "hello 함수가 뭐야? 첨들어요.";
}

function hello($name)
//매개변수 $name
{
echo "안녕하세요. <br>"; // BR태그로 다음줄 전송
 print "머림머학교의";
  print $name. "입니다. <BR>"; 
    return true;
}