<?php
## $msg="abcde";
##echo $msg;
//for 함수->알고있어야한다
//모르면??

$fruit=['apple'=>"사과",'con'=>"옥수수",'strow'=>"딸기"];
//갯수를 어떻게 알수 있을까? 반복할수 있을까?
foreach($fruit as $key=>$value){
    echo $key ."=>";
    echo $value;
    print"<br>";
}
//