<?php
$msg = "abcde";
echo $msg . "<br>";
// 횟수 -> 알고 있어야 함
// 모르면

$fruit = ['apple'=>'사과', 'con'=>'옥수수', 'strow'=>'딸기'];
foreach ($fruit as $k => $v) {
    echo $k . ": ";
    echo $v;
    print "<br>";
}