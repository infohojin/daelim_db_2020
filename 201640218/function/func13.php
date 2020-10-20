<?php
function recursion($n) {
    echo "hello". $n;
    echo "<br>";
    if($n <5) {// 종료조건
        recursion($n+1); // 자기자신 호출
    //반복적인 재실행 -> 컴퓨터 다운....
    // 따라서 종료 조건 필요
    }
}
recursion(0);
