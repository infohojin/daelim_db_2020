<?php

function daelim($num)
{
    $name = "대림";
    echo $name ,"대학교", $num;
    print"<hr>";
}

$name = "daelim";
for($i = 0; $i<5; $i++){
    daelim($i);
}