<?php

// 함수 선언
function daelim($num) {
    // 지역변수
    $name = "대림";
    echo $name . "대학교" . $num;
    print "<hr>";
}

$name = "daelim"; 
    // 전역변수
for ($i=0; $i<5; $i++) {
    // 함수 호출
    daelim($i);
}

