<?php
// 함수의 선언부
function daelim($num)
{
    $name = "대림"; 
    // 지역 변수
    echo $name . "대학교" . $num;
    print "<hr>";
}

$name= "daelim";
for($i=0; $i<5; $i++) {
    // 함수의 호출부
    daelim($i);
}
