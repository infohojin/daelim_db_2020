<?php
// for 횟수 => 알고 있어야한다
// 모르면????

$fruits = ['사과', '옥수수', '딸기'];  // 순차 배열
$fruits = ['apple'=>'사과', 'con'=>'옥수수', 'strow'=>'딸기'];  // 연상 배열 = > foreach 자주사용
foreach ($fruits as $key => $value) {
    echo $key . "=>";
    echo $value;
    print "<br>";
}

