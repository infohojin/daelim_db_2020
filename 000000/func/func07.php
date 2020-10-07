<?php
// 함수의 선언부
function daelim($num)
{
    $name = "대림"; // 변수이름 다른 것이다.
    // 지역변수
    echo $name . "대학교" . $num;
    print "<hr>";
}

$name = "daelim"; // 변수의 이름과
// 전역변수
for ($i=0; $i<5; $i++) {
    // 함수의 호출부
    daelim($i);
}



/*
echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";

echo "대림대학교";
print "<hr>";
*/
