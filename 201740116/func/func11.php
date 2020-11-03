<?php
// 매개변수 배열로 받기
function myname($info)
{
    // 배열로 연산을 수행
    return $info['first'] . $info['last'];
}

// 함수 매개변수의 의존성을 해결할 수 있는 방법임
$my = myname(['first'=>"Jeon", 'last'=>"Sojin"]);
echo "<hr>";
echo $my;