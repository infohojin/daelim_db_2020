<?php
// 매개변수 배열로 받기
function myname($info) {
    // 배열로 연산을 수행
    return $info['first'] . $info['last'];
}

$my = myname(['first'=>"eun", 'last'=>"dain"]);
echo "<hr>";
echo $my;