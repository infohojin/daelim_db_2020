<?php

// 매개변수를 배열로 받기
function  myname($info) 
{
    // 배열로 연산을 수행합니다.
    return $info['first'] . $info['last'];
}

// 함수 매개변수의 의존성을 해결 ..

$my = myname(['first'=>"Kim", 'last'=>"SoJin"]);
echo "<hr>";
echo $my;
