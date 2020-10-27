<?php
// $msg = "abcde";
// echo $msg;
//for 횟수-> 알고 있어야 함
//모르면..?
$fruit = ["apple"=>"사과","corn"=>"옥수수","strow"=>"딸기"];
//갯수는 어떻게 알 수 있나? 반복할 수 있을까?
foreach($fruit as $key => $value){ //갯수만큰 반복문 동작
    echo $key."=>";
    echo $value;
    print "<br>";
}
