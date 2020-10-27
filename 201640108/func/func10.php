<?php

function myname($first, $last, $univ) : string
{
    $n = func_num_args();
    echo $n."개의 매개변수가 전달  받았습니다.";
    
    $args = func_get_args();
    print_r($args);
    $name = $first . $last ;
    return $name;

    $name = "aaaaaa";
}

$my = myname("김", "우섭", "대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교", "우섭" , "김" );
echo "<hr>";
echo $my;