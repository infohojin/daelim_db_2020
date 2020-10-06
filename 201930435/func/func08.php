<?php

function daelim($num)
{
  // 외부의 전역 변수를 사용하기 위해서는 global 키워드를 사용한다
  global $name;
  // $name = "대림"; // 지역 변수
  # echo $name . "대학교" . $num;
  $name .= $num;
  echo $name . "대학교";
  print "<hr>";
}

$name = "daelim"; // 전역 변수

for($i=0; $i<5; $i++){
  daelim($i);
}

echo $name . "을 5번 출력 하였습니다.";