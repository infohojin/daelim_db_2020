<?php

function daelim($num)
{

    global $name;
    $name .= $num;
    echo $name . "대학교";
    print"<hr>";

}

$name = "daelim";
for($i = 0; $i<5; $i++){

    daelim($i);
}

echo $name . "을 5번 출력했습니다.";