<?php

function daelim($num)
{
  $name = "대림"; // 지역 변수
  echo $name . "대학교" . $num;
  print "<hr>";
}

$name = "daelim"; // 전역 변수

for($i=0; $i<5; $i++){
  daelim($i);
}