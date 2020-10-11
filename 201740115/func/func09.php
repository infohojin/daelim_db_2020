<?php

function  myname($first, $last,$univ)
{

    $n = func_num_args();
    echo $n."개의 매개변수가 전달 받았습니다.";

    $args =func_get_args();
    print_r($args);
   $name = $first . $last ;
   return $name;
}

$my = myname("문","병찬","대림대학교");
echo "<hr>";
echo $my;