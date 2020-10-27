<?php

// 함수 선언
function daelim($num) {
    // 외부의 전역변수를 사용하기 위해선 global 키워드를 사용
    global $name;

    #echo $name . "대학교" . $num;
    $name .= $num;
    echo $name . "대학교";
    print "<hr>";
}

$name = "daelim"; 
    // 전역변수
for ($i=0; $i<5; $i++) {
    // 함수 호출
    daelim($i);
}

echo $name . "을(를) 5번 출력 하였습니다.";
