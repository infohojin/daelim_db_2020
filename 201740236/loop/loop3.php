<?php
// $msg = "abcde";
// echo $msg;
//for 횟수 -> 알고 있어야 한다
//모르면 ???
$fruit = ['apple'=>"사과",'corn'=>"옥수수",'straw'=>"딸기"];
//갯수를 어떻게 알 수 있을까? 반복할수 있을까?
foreach ($fruit as $key => $value) {
    echo $key . "=>";
    echo $value;
    print "<br>";
} 