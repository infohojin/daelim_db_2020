<?php
#$msg = []; // 빈 배열을 초기화
#$msg = array(); // 함수를 사용해 배열 만들기

$msg = [['greeting'=>"hello"],"안녕하세요", ['message'=>"daelim_univ"]];

foreach ($msg as $k => $v) {
    echo "키=" . $k . " ";
    echo "값=";

    // echo는 문자열만 출력 | print_r은 배열을 출력

    if (is_array($v)) {
        // 참 : 배열값
        #print_r($v);
        foreach ($v as $key => $value) {
            #echo $value;
            for ($i = 0; $i < strlen($value); $i++) {
                echo "(" . $value[$i] . ")";
            }
        }
    } else {
        // 거짓 : 문자열
        echo $v;
    }

    print "<br>";
}