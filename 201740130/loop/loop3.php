<?php
## $msg = "abcde";
## echo $msg;
//for 횟수 => 알고 있어야 한다. 
// 모르면????

$fruit = ['apple'=>"사과",'con'=>"옥수수",'strawberry'=>"딸기"];
foreach($fruit as $key => $value) {
    echo $key."=>";
    echo $value;
    print "<br>";
}