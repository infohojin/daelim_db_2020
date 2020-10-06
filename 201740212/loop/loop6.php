<?php
# $msg = [];
# $msg = array();

$msg = [
    ['greeting'=>'hello'],
    "안녕하세요",
    ['message'=>'daelim univ']
];

foreach ($msg as $k => $v){
    echo "키는" . $k . " ";
    echo "값은="; //. $v;

    //echo 문자열만 출력
    //print_r 배열을 출력
    if(is_array($v)){
        //참 : 배열값
        // print_r($v);
        foreach($v as $key => $value){
            # echo $value;
            for($i=0; $i<strlen($value); $i++){
                echo "(". $value[$i] . ")";
            }
        }
    } else{
        //거짓 : 문자열
        echo $v;
    }
    

    print "<br>";
}