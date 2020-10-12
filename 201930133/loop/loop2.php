<?php 

    $msg = "abcdesfaegadjfaljewfk";
    // echo $msg;

    // for(초기값 ; 조건문 ; 증감식)
    for($i=0; $i<strlen($msg); $i++){
        // 숫자로 선택하는 배열 = 순차 배열
        echo $msg[$i];
        print "<br>";
    }