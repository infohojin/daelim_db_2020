<?php

$msg = [
    ['greeting'=>"hello"],
    "안녕하세요",
    ['message'=>"daelim univ"]
];
foreach ($msg as $k => $v){
    echo "키는= ".$k."   ";
    echo "값은= ";



// echo 문자열만 출력
// print_r 배열을 출력
   if(is_array($v)){ //안쪽에 2차배열 탐색
       #print_r($v);
       foreach($v as $key => $value){ //연상 => foreach
          # echo $value;
         for($i=0;$i<strlen($value);$i++){
             echo "(".$value[$i].")";
         }

       }
   }else{
       //거빗 : 문자열
       echo $v;
   }


   
    print "<br>";
}