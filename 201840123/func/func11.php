<?php


function myname($info) : string
{
    //배열로 연산을 수행
    return $info['first'] . $info['last'];
} 


// 함수 매개변수의 의존성 해결
$my = myname(['first'=>"oh", 'last'=>"seungtaek"]);
echo "<hr>";
echo $my;

