<?php

// 선언
// 0 : 실행안됨(함수만 정의하면)
function recursion($n)
{
    echo "hello" . $n;
    echo "<br>";

    if($n<5){
        //자기자신 호출
        recursion($n+1); // 2 : 호출 재실행
        // 3 : 재실행
        // 4 : 재실행
        // 무한정 실행~
        // 결국 컴퓨터 다운
        // 어디선가 종료를 시켜야됨
        // 종료 조건 포함

    }
}

recursion(0);// 1 : 호출실행