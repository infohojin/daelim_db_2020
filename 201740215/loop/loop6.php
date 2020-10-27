<?php
#msg=[]; //반배열을 초기화
#msg=array(); //함수를 이용해서
$msg=[
    ['greeting'=>"hello"],
    "안녕하세요",
    ['message'=>"daelim univ"]
];
foreach($msg as $k=>$v){ //제일 외곽의 1차배열
    echo"키는=" .$k;
    echo"값은=";//.$v;

    if(is_array($v)){//안쪽의 2차배열탐색
        //참:배열값
        print_r($v);
        foreach($v as $key => $value){  //연상배열
            for($i=0; $i<strlen($value);$i++){
                echo "(". $value[$i] .")";
            }
        }
    }else{
        //거짓:문자열
        echo $v;
    }
    //echo 문자열만 출력
    //print_r 배열을 출력

    print "<br>";
}