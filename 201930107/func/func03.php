<?php
// 인사말1, 함수 호출
hello("대남이"); // 호출시 전달값 -> 인자값


// 인사말2, 함수 호출
hello("대숙이");

// 입력 -> (), 출력 -> return
// 입력() -> 여러개의 값 전달 가능
function hello($name) // 함수내에서 받는 변수 -> 매개변수
{
    // 함수 내에 $name 변수 생성
    echo '안녕하세요.<br>';
    print '대림대학교의 ';
    print "$name 입니다.<br>";
    return true;
}