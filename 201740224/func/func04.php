<?php

//함수를 호출
//함수의 이름은 중복선언할수 없다.
hello("대남이");

hello("대숙이");

//함수를 선언할때 함수의 목록을 검사해서 중복 체크
//서버 실행오류를 방지
//목록 존재하는 검사
#목록, 내장함수
/*$funcs = get_defined_functions();
echo"</pre>";
print_r($funcs);
echo"</pre>";
*/

//if(조건=논리값) 성공
//if(조건) 성공-조건값 존재한다. else 실패 -조건값이 없다.

//if(조건) {코드블럭}
//if(조건) {코드블럭} else {코드블럭}


/*if (function_exists("hello")) {
    //여기에 코드를 실행해 주세요.
 }else{"hello 함수가 존재하네요"
     //없다면 여기의 코드를 실행해주세요.
 }
*/



//함수의 이름은 중복될 수 없다.
function hello($name)
{
    //$name 이라는 변수가 함수내에 생성됨
    echo "안녕하세요<br>";
    print "대림대학교의";
    print $name . " 입니다.<br>";
    return true;
}
