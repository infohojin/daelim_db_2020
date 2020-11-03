<?php
$msg="abcde";
echo $msg."<br>";
//for 초기값,조건,증가 
//while 조건...
//while문 반복횟수 몰라도 동작가능 대신 조건써줘야함
// 조건항상참이면 무한루프 루프탈출하는코드를 작성해줘야함
$i=0; //조건에대한 초기값
while($i<strlen($msg)){

    echo $msg[$i++];
    print "<br>";

    if($i>3){
    break;
    }
}