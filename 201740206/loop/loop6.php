<?php
# $msg = [];  // 빈배열을 초기화
# $msg = array();  // 함수를 이용해서
$msg = [
    ['greeting'=>"hello"],
    "안녕하세요",
    ['message'=>"daelim univ"]
];

foreach ($msg as $k => $v) {
    echo "키는 " . $k;
    echo " 값은 "; //. $v;

    // is_array(): 배열 판별함수
    if (is_array($v)) {
        // 참: 배열값
        # print_r($v);  // 배열을 출력
        foreach ($v as $key => $value) {
            # echo $value;
            for ($i=0; $i<strlen($value); $i++) {
                echo "(" . $value[$i] . ")";
            }
        }
    } else {
        // 거짓: 문자열
        echo $v;    // 문자열만 출력
    }

    print "<br>";
}