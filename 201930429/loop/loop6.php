<?php

    // $msg = []; //반배열을 초기화
    // $msg = srray(); // 함수를 이용해서.
    $msg = [
        ['greeting' => "hello"],
        "안녕하세요",
        ['message' => "daelim univ"]
    ];
    
    foreach($msg as $k => $v) {
        echo "키는=" . $k;
        echo "값은="; //. $v;
        // echo 문자열만 출력
        // print_r 배열을 출력
        if (is_array($v)) {
            // 참 : 배열값
            // print_r($v);
            foreach ($v as $value) { //연상 => foreach
                // echo $value;
                for($i=0; $i<strlen($value); $i++) {
                    echo "(" . $value[$i] . ")";
                }
            } 
        } else {
            // 거짓 : 문자열
            echo $v;
        }

        print "<br>"; //브라우저에서 다음줄
    }

?>