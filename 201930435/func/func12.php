<?php

function daelim()
{
  print __FUNCTION__ . " 호출합니다. <br>";
  echo "대림대학교";
}

function myname()
{
  print __FUNCTION__ . " 호출합니다. <br>";
  echo "홍예연 입니다. ";
}

// 직접 이름을 이요하여 호출 할 수도 있고, 
// 변수를 통해서 간접 호출을 할 수도 있다

$caller = "myname";
$caller(); // 변수명 안에 있는 문자열과 동일한 
// () => 함수를 찾아서 실행해 주세요.

// 변수명 <== 함수명
// 함수의 이름이 없어요.. => 익명함수
$func = function()
{
  echo "오늘도 좋은 하루 되세요.";
}; // 명령 문자이기 때문에, 세미콜론이 필요

// 변수에 저장된 함수를 위의 방식을 이용하여 호출이 가능
$func();