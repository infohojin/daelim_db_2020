<?php


/*함수
1.사용자 함수(내가 정의한 함수)
2.내장함수(언어/php에서 자체적으로 지원하는 함수)
*/

//if(조건=논리값) 성공
//if(조건) 성공-조건값 존재한다. else 실패 -조건값이 없다.

//if(조건) {코드블럭}
//if(조건) {코드블럭} else {코드블럭}


if (function_exists("hello")) {
    echo"hello 함수가 존재하네요";
    //여기에 코드를 실행해 주세요.
 }else{echo"hello 함수가 뭐에요?";
     //없다면 여기의 코드를 실행해주세요.
 }

//함수의 이름은 중복될 수 없다.
