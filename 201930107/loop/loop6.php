<?php
// $msg = []; // 빈 배열 초기화
// $msg = array() // 함수 이용 배열 생성
$msg = [
    ['greeting'=>"hello"],
    '안녕하세요',
    ['message'=>"daelim univ"]
];

foreach ($msg as $k => $v) {
    echo "키: " . $k;
    echo " 값: ";
    
    if (is_array($v)) {
        // print_r($v);
        foreach ($v as $k => $v2) {
            echo "키: " . $k;
            echo " 값: ";
            for ($i=0; $i < strlen($v2); $i++) { 
                echo "(" . $v2[$i] . ")";
            }
        }
    } else {
        echo $v;
    }

    print "<br>";
}