<?php

// 매개변수 배열로 받기
function myname($info) {
    // 배열로 연산을 수행
    return $info['first'] . $info['last'];
}

// 함수 매개변수의 의존성 해결하는 방법이지 않을까...
$my = myname(['first'=>"kim", 'last'=>"juho"]);
echo "<hr>";
echo $my;