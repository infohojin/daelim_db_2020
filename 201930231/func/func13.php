<?php
// 선언
// 0 : 실행이 되지 않음
function recursion($n)
{
    echo "Hello" . $n;
    echo "<br>";

    // 해결 방법 => 종료 <= 조건 포함
    if($n < 5) {
        // 자기자신을 호출
        recursion($n+1);  // 2 : 호출 재실행
        // 3 : 재실행
        // 4 : 재실행
        // ......
        // 결국 컴퓨터가 다운됨
    }
}

recursion(0);  // 1 : 호출 실행