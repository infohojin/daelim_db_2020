<?php


function daelim($i){
    global $name;
    //$name = "대림";
    // echo $name ."대학교" . $i;
    // print "<hr>";
    $name .=$i;
    echo $name."대학교";
    print "<hr>";
}
$name = "daelim";
for($i=0;$i<5;$i++)
    daelim($i);

echo $name."을 5번 출력함";