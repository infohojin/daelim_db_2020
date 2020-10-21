<?php 

function recursion($n)
{
    echo"hello" . $n;
    echo "<br>";

     // 자기자신
     if($n <5) {
     recursion($n+1); // 2:호출 재실행
// 3: 재실행
// 4:  재실행
// .........
// 결국 컴퓨터 다운 ....
// ??? => 종료 <= 조건 포함 
}
}

recursion(0); // 1: 호출 실행 