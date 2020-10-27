<?php
// C언어
// 반환값 함수명(인자값)

// 인자값 () <= 소괄호 안에 선언
// 반환 받는 타입은 함수명 뒤에 선언
function myname($first, $last, $univ) : String
{
    // 함수에 전달되는 매개변수의 갯수 확인 가능
    $n = func_num_args();
    echo $n . "개의 매개변수를 전달 받았습니다.";

    // 값도 확인 가능
    $args = func_get_args();
    print_r($args);
    $name = $first . $last;
    return $name;  // 문자열
    // 함수의 동작이 종료가 됨

    $name = "aaaaa";
}

$my = myname("박", "상훈", "대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교", "상훈", "박");
echo "<hr>";
echo $my; 