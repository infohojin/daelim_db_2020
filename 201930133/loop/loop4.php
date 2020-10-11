<?php
    $msg = "abcde";
    // echo $msg;

    $i=0; // 초기값
    // while( 조건문 )
    while($i < strlen($msg)){
        if($i<=1) continue;

        echo $msg[$i++]."<br>";
        
        if($i>=3){
        break;
        // 루프 강종
        }
    }