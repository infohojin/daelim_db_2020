<?php
//C언어
//반환값 함수명(인자값)

//PHP
//인자값() <- 소괄호 안에 선언
// 반환 받는 타입 합수명 뒤에 선언
function myname($first,$last,$univ) {
    $n = func_num_args();// 함수에 전달되는 매개변수의 갯수
    echo $n."개의 매개변수가 전달 받았습니다.";
    //값도 확인 가능
    $args = func_get_args();
    print_r($args);
    $name = $first . $last;
    return $name; //문자열

    $name = "aaaaaa";
}// 함수에서 return : 반환, 함수 결과값->
$my = myname("배","종범","대림대학교");
echo "<hr>";

echo $my;
$my = myname("대림대학교","배","종범");
echo "<hr>";
echo $my;