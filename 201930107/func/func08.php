<?php
function daelim($num)
{
    // 외부의 전역변수를 사용하기 위해서는 global 키워드 사용해야함
    global $name;

    // echo $name . "대학교". $num;
    $name .= $num;
    echo $name . "대학교";
    print "<hr>";
}

$name = "daelim";

for ($i=0; $i < 5; $i++) { 
    daelim($i);
}

echo $name . "을 5번 출력함";