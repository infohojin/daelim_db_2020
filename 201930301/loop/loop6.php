<?php
# $msg = []; // 빈배열을 초기화
# $msg = array(); //함수 이용
//2차원 배열: 배열안에 또다른 배열 존재

$msg = [
    ["greeting"=>"hello"],
    "안녕하세요",
    ["message"=>"daelim univ"]
];

foreach($msg as $k => $v){ //제일 외각의 1차 배열
    echo "키는=".$k;
    echo "값은=";

    //echo는 문자열만 출력
    //print_r 배열 출력
    if(is_array($v)){ //안쪽의 2차 배열 탐색
        //참 : 배열값
        //print_r($v);
        foreach($v as $key => $value){ //연상배열 => foreach
            #echo $value;
            for($i=0;$i<strlen($value); $i++){
                echo "(".$value[$i].")";
            }
        }
    }else{
        //거짓: 문자열
        echo $v;
    }

    print "<br>"; //브라우저에서 다음줄
}