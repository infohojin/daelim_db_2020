<?php

    // $msg = "abcde";
    // echo $msg;
    // for 획수 -> 알고 있어야 한다.
    // 모르면 ??

    $fruit = ["사과", "옥수수", "딸기"];
    //갯수를 어떻게 알 수 있을까? 반복할 수 있을까?
    foreach($fruit as $key => $value) {
        echo $key . "=>";
        echo $value;
        print "<br>";
    }
    
?>