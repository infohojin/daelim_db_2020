<?php
//$msg = "abcde";
//echo $msg;

$fruit = ['apple' => "사과",'con' => "옥수수", 'strow' => "딸기"];
foreach($fruit as $key => $value) {
    echo $key . "=>";
    echo $value;
    print "<br>";
}