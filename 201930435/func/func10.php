<?php

function myname($first, $last, $univ) : string
{
  $n = func_num_args(); // 함수에 전달되는 매개변수의 갯수
  echo $n."개의 매개변수가 전달 받았습니다. ";

  // 값도 확인 가능
  $args = func_get_args();
  print_r($args);
  $name = $first . $last;
  return $name; // 문자열
  // 함수의 동작 종료됨

  $name = "aaaaaa";
}

$my = myname("홍", "예연", "대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교", "예연", "홍");
echo "<hr>";
echo $my;