<?php
// 10/06 오후수업 시작
function daelim($num)
{
    global $name;//전역변수의 값을 가르킨다

    //echo $name. "대학교" .$num;
    $name .=$num;
    echo $name."대학교";
    print "<hr>";
}

$name = "daelim";

for($i=0; $i<5; $i++)
{
    daelim($i);
}

echo $name."을 5번 출력하였습니다";