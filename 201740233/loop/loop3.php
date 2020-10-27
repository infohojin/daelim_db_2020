<?php
// $msg = "abcdefghijk";
// echo $msg;

// 키 => 값 형식의 배열
$fruit = ['apple'=>"사과", 'con=>'=>"옥수수", 'strow'=>"딸기"];

// 배열의 갯수만큼 반복
foreach($fruit as $key => $value) {
    echo $key . "=>"; // 키값
    echo $value;
    print "<br>";
}