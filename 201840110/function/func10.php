<?php
// c언어
// 반환값 함수명 (인자값)

// 인자값 () <= 소괄호 안에 선언
// 반환 받는 타입 함수명 뒤에 선언
function  myname($first, $last,$univ) : string
{
    $n = func_num_args();
    echo $n."개의 매개변수가 전달 받았습니다.";

    $args =func_get_args();
    print_r($args);
   $name = $first . $last ;
   return $name; 
}

$my = myname("김","소진","대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교","소진","김");
echo "<hr>";
echo $my;