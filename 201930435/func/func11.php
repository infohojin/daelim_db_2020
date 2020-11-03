<?php

// 매개변수를 배열로 받기
function myname($info)
{
  // 배열로 연산을 수행
  return $info['first'] . $info['last'];
}

// 함수 매개변수의 의존성 해결
$my = myname(['first'=>"hong", 'last'=>"yeyeon"]);
echo "<hr>";
echo $my;
