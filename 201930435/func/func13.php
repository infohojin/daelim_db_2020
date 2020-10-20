<?php

// 선언
// 0: 실행 안됨
function recursion($n)
{
  echo "hello" . $n;
  echo "<br>";

  // ??? => 종료 <= 조건 포함
  if($n<5){
    // 자기자신
    recursion($n+1); // 2: 호출 재실행
    // 3: 재실행
    // 4: 재실행
    // ......
    // 결국 컴퓨터 다운   
  }
  
}

recursion(0); // 1: 호출 실행