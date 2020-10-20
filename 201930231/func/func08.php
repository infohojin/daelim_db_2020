<?php
// 함수의 선언부
function daelim($num)
{
    // 외부의 전역변수를 사용하기 위해서는 global 키워드를 사용한다.
    global $name;
    // $name = "대림";  // 변수 이름이 다른 것임
    // 지역변수

    # echo $name . "대학교" . $num;
    $name .= $num;
    echo $name . "대학교";
    print "<hr>";
}

$name = "daelim";
// 전역변수
for($i = 0; $i < 5; $i++) {
    // 함수의 호출부
    daelim($i);
}

echo $name . "을 5번 출력하였습니다.";