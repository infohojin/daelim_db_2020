<?php
$msg = "abcde";
echo $msg;
//for   초기값;조건;증가;
//while 조건...

$i=0; //초기값
while($i<strlen($msg)){
    echo $msg[$i++]; //$i의 변화가 발생
    print "<br>";

     if($i>3){
     break;  //강제종료
     }
}
