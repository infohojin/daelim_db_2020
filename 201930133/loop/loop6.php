<?php
    // 빈 배열 초기화
    // $msg = [];
    // $msg = array(); // 함수를 이용한 초기화

    $msg = [
        ['greeting'=>"hello"],
        "안녕하세요",
        ['message'=>"daelim univ"]
    ];

    foreach ($msg as $k => $v){
        echo "키값 = ".$k.", ";
        echo "값 = ";
        
        if(is_array($v)){
            // 참 : 배열값
            print_r($v);
            // 연성 > foreach
            foreach($v as $key => $value){
                // echo $value;
                for($i=0; $i<strlen($value);$i++){
                    echo "(". $value[$i].")";
                }
            }
        }else{
            // 거짓 : 문자열
            echo $v;
        }
        print "<br>";
    }